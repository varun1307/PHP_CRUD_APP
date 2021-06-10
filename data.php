<?php

$db=new mysqli("localhost","root","","radar");
$result=$db->query("SELECT * FROM `employee` ORDER BY id DESC")
 
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data</title>
    </head>

    <body>
    <a href="./index.php" style="float:left;text-decoration:none;font-size:20px">⬅️Home</a>
        <div class="container">
            
            <h1 style="color:black">Data</h1>
            <table class="rwd-table">
                <tbody>
                    <tr>

                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Education</th>
                        <th>Work Experience</th>
                        <th>Job title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>


                    <?php

while($res=mysqli_fetch_array($result)){

    
    echo '<tr>';

    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['address'].'</td>';
    echo '<td>'.$res['email'].'</td>';
    echo '<td>'.$res['edu'].'</td>';
    echo '<td>'.$res['work'].'</td>';
    echo '<td>'.$res['job'].'</td>';
    echo '<td><a href="edit.php?GetID='. $res['id'] .'" style="text-decoration:none;">Edit</a></td>';
    echo '<td><a href="delete.php?Del='. $res['id'] .'" style="text-decoration:none;">Delete</a></td>';

    echo '</tr>';
    

}



?>


                </tbody>
            </table>

        </div>
    </body>

    </html>
    <style>
        .rwd-table {
            margin: auto;
            min-width: 300px;
            max-width: 100%;
            border-collapse: collapse;
        }
        
        .rwd-table tr:first-child {
            border-top: none;
            background: #428bca;
            color: #fff;
        }
        
        .rwd-table tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            background-color: #f5f9fc;
        }
        
        .rwd-table tr:nth-child(odd):not(:first-child) {
            background-color: #ebf3f9;
        }
        
        .rwd-table th {
            display: none;
        }
        
        .rwd-table td {
            display: block;
        }
        
        .rwd-table td:first-child {
            margin-top: .5em;
        }
        
        .rwd-table td:last-child {
            margin-bottom: .5em;
        }
        
        .rwd-table td:before {
            content: attr(data-th) ": ";
            font-weight: bold;
            width: 120px;
            display: inline-block;
            color: #000;
        }
        
        .rwd-table th,
        .rwd-table td {
            text-align: left;
        }
        
        .rwd-table {
            color: #333;
            border-radius: .4em;
            overflow: hidden;
        }
        
        .rwd-table tr {
            border-color: #bfbfbf;
        }
        
        .rwd-table th,
        .rwd-table td {
            padding: .5em 1em;
        }
        
        @media screen and (max-width: 601px) {
            .rwd-table tr:nth-child(2) {
                border-top: none;
            }
        }
        
        @media screen and (min-width: 600px) {
            .rwd-table tr:hover:not(:first-child) {
                background-color: #d8e7f3;
            }
            .rwd-table td:before {
                display: none;
            }
            .rwd-table th,
            .rwd-table td {
                display: table-cell;
                padding: .25em .5em;
            }
            .rwd-table th:first-child,
            .rwd-table td:first-child {
                padding-left: 0;
            }
            .rwd-table th:last-child,
            .rwd-table td:last-child {
                padding-right: 0;
            }
            .rwd-table th,
            .rwd-table td {
                padding: 1em !important;
            }
        }
        /* THE END OF THE IMPORTANT STUFF */
        /* Basic Styling */
        
        body {
            background: #B993D6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8CA6DB, #B993D6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            font-family: arial;
            font-weight: bold;
        }
        
        h1 {
            text-align: center;
            font-size: 2.4em;
            color: #f2f2f2;
        }
        
        .container {
            display: block;
            text-align: center;
        }
        
        h3:before {
            content: "\25C0";
            position: absolute;
            left: -50px;
            -webkit-animation: leftRight 2s linear infinite;
            animation: leftRight 2s linear infinite;
        }
        
        h3:after {
            content: "\25b6";
            position: absolute;
            right: -50px;
            -webkit-animation: leftRight 2s linear infinite reverse;
            animation: leftRight 2s linear infinite reverse;
        }
        
        @-webkit-keyframes leftRight {
            0% {
                -webkit-transform: translateX(0)
            }
            25% {
                -webkit-transform: translateX(-10px)
            }
            75% {
                -webkit-transform: translateX(10px)
            }
            100% {
                -webkit-transform: translateX(0)
            }
        }
        
        @keyframes leftRight {
            0% {
                transform: translateX(0)
            }
            25% {
                transform: translateX(-10px)
            }
            75% {
                transform: translateX(10px)
            }
            100% {
                transform: translateX(0)
            }
        }
    </style>