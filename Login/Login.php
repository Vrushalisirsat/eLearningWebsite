<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form with JavaScript Validation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>LOGIN</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login to your account</h2>
    <form action="Login.php" method="POST" id="formvalidate">
      <div class="input-group">
        <label class="palceholder" for="userName">Email</label>
        <input class="form-control" name="email" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <button type="submit" id="login" name="submit" >Login</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a class="forgot pull-right" href="#">Forgot Password?</a>
      </div>
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="signup.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>



 <!-- LOGIN FORM -->
 <?php
#create connection
$con =mysqli_connect('localhost','root','','elearning');
session_start();
if(isset($_POST['submit']))
      {
         $email=$_POST['email'];
         $password=$_POST['password'];
         // $query="INSERT INTO login(username,password) VALUES ('$email','$password')";
         // $run=mysqli_query($con,$query);

         $sql="select email,password from signup where email='$email' and password='$password'";
         $result=mysqli_query($con,$sql);
         
         if(mysqli_num_rows($result)>0)
         { $_SESSION['email']=$email; 
          echo "LoginSuccesfully"; 
         echo "<script>window.location.href='/ELWebsite'</script>";
          die; 
          } 
          else { echo "Username or Password is Incorrect"; 
          } 
          }

   
?>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'>

</script><script  src="./script.js"></script>

</body>
</html>
