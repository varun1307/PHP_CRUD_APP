<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="index.php" class="register-form" id="register-form" name="sf">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address" />
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-book"></i></label>
                                <input type="text" name="edu" id="edu" placeholder="Educational Background" />
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-card-travel"></i></label>
                                <input type="text" name="work" id="work" placeholder="Work history" />
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="text" name="job" id="job" placeholder="Job title" />
                            </div>

                            <div class="form-group form-button" display: inline-block;>
                                <input type="submit" name="sf" id="signup" class="form-submit" value="Register" style="display: inline-block;" />
                            </div>

                        </form>

                    </div>

                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure><br>
                        <div class="form-group form-button">
                            <a href="./data.php" class="form-submit" style="text-decoration: none; display: inline-block;">View/Edit data</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
<?php


$db=new mysqli("localhost","root","","radar");
if(isset($_POST['sf'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $edu=$_POST['edu'];
    $work=$_POST['work'];
    $job=$_POST['job'];
    
    
   

    $q=$db->query("INSERT INTO `employee`(`id`,`name`,`address`,`email`,`edu`,`work`,`job`) VALUES ('','$name','$address','$email','$edu','$work','$job')");
    if($q>0){
      header('Location:success.html');
    }
    else{
      echo 'Error occured please try again';
    }
    
}
 

    ?>

</html>
