<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};
// php code for captcha Start
if (isset($_POST['submit'])) {
   $secret = "6LdVPpIgAAAAACRGOpEH5EgiYfGOWRU8rhi6Zo9y";
   $response = $_POST['g-recaptcha-response'];
   $remoteip = $_SERVER['REMOTE_ADDR'];
   $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
   $data = file_get_contents($url);
   $row = json_decode($data, true);
 }
 // php code for captcha End
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

    <!-- password_strength -->
   <link rel="stylesheet" type="text/css" href="password_strength/password_strength.css">

   <!-- Google Recaptcha -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
   <!--jquery-script-menu  -->
<div class="container"> 
   <div class="form-container">
      <!-- form start -->
      <form action="" method="post">
         <h3>register now</h3>
         <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
         ?>
      <div>
         <input type="text" name="name" required placeholder="enter your name">
      </div>

      <div>
         <input type="email" name="email" required placeholder="enter your email">
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
      </div>
         <div class="form-group">							
            <input type="password" name="password" id="password" class="form-control" required placeholder="enter your password" onKeyUp="checkPasswordStrength();">
         </div>
         <div id="password-strength-status"></div>
							

      <div>
         <input type="password" name="cpassword" required placeholder="confirm your password">
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>

      <!-- captcha -->
      <div class="row">
         <div class="g-recaptcha" data-sitekey="6LdVPpIgAAAAALdytl0Ux02v24XG-AQqMLuWVUxc"></div>
            <span id = "captcha_error" class = "text-danger"></span>
         </div>   
   
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   
      </form>
      <!-- form end -->

   </div> 
</div>
</div>

<style>
			#frmCheckPassword {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
			#password-strength-status {;color: #FFFFFF; border-radius:4px;margin-top:5px;}
			.medium{background-color: #117de4;border:#BBB418 1px solid;}
			.weak{background-color: #ff0000;border:#AA4502 1px solid;}
			.strong{background-color: #12CC1A;border:#0FA015 1px solid;}
</style>

<script src="jquery.min.js"></script>
<script src="main.js"></script>

<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

