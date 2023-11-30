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

<div class=container>

<div class="img"></div>


<div class="logo text-center">
  <h1>Create Account</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">SignUp to your account</h2>
    <form action="signup.php" method="POST" id="formvalidate">
      <div class="input-group">
        <label class="palceholder" for="userName">User Name</label>
        <input class="form-control" name="username" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>

      <div class="input-group">
        <label class="palceholder" for="userPassword">Email</label>
        <input class="form-control" name="email" id="email" type="email" placeholder="" required/>
        <span class="lighting"></span>
      </div>

      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <a href="index.html"><button type="submit" id="login" name="sb"> SignUp </button> </a>

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
    <a href="Login.php">Already Registered ? <span class="text-primary">Login</span></a>
  </div>
</div>

</div>
<!-- REDIRECT TO LOGIN -->
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = () => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      };
      loginBtn.onclick = () => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      };
      signupLink.onclick = () => {
         signupBtn.click();
         return false;
      };
   </script>





<?php

#create connection
$con =mysqli_connect('localhost','root','','elearning');




      if(isset($_POST['sb']))
      {
         $username=$_POST['username'];
         $email=$_POST['email'];
         $password=$_POST['password'];
        

         $sql="select * from signup where email='$email' and password='$password' ";
         $run=mysqli_query($con,$sql);
         $data=mysqli_fetch_array($run);
         if(is_countable($data) && count($data)>0)
         { 
            echo "<script>alert('User already registered! Login please.'); </script>"; 
            echo "<script>window.location.href = './Login.php';</script>"; } 
            else{ $query="INSERT INTO signup(username,email,password) VALUES ('$username','$email','$password')";
    $run=mysqli_query($con,$query);
     if(($run)>0)
     {
       echo "SignUp SuccesFull"; 
       echo "<script>window.location.href='/ELWEBSITE'</script>";
       die; 
    }
    else{ echo "SignUp failed"; 
    } 
    
    }
     } 
     ?>



     <!-- partial -->
     <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'>
     
   </script><script  src="./script.js"></script>

</body>
</html>


