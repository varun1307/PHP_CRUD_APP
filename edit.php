<?php
error_reporting(E_ALL ^ E_WARNING); 
$db=new mysqli("localhost","root","","radar");
$id=$_GET['GetID'];

$q=$db->query("SELECT * FROM employee where id='".$id."'");

while($res=mysqli_fetch_array($q)){

    
    

    $name=$res['name'];
    $address=$res['address'];
    $email=$res['email'];
    $edu=$res['edu'];
    $work=$res['work'];
    $job=$res['job'];
    

    

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Update Form</title>

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
                        <form method="POST" action="edit.php?ID=<?php echo $id?>" class="register-form" id="register-form" name="up">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo $name ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address" value="<?php echo $address ?>" />
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $email ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-book"></i></label>
                                <input type="text" name="edu" id="edu" placeholder="Educational Background" value="<?php echo $edu ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-card-travel"></i></label>
                                <input type="text" name="work" id="work" placeholder="Work history" value="<?php echo $work ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="edu"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="text" name="job" id="job" placeholder="Job title" value="<?php echo $job ?>"/>
                            </div>

                            <div class="form-group form-button" display: inline-block;>
                                <input type="submit" name="up" id="signup" class="form-submit" value="Update" style="display: inline-block;" />
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

</html>
<?php



error_reporting(E_ALL ^ E_WARNING); 
if(isset($_POST['up'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $edu=$_POST['edu'];
    $work=$_POST['work'];
    $job=$_POST['job'];

    $q=$db->query("UPDATE employee set name='".$name."',address='".$address."',email='".$email."',edu='".$edu."',work='".$work."',job='".$job."'");
    if($q>0){
        header('Location:success.html');
      }
      else{
        echo 'Error occured please try again';
      }

}
    ?>