<!DOCTYPE html>
<html lang="en">

<head>
    <title>feedback form</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
  session_start();
  if(isset($_SESSION['email'])){
    echo "";
  }
  else{
    echo "<script>window.location.href='./Login/signup.php'</script>";

  }
  ?>

<body>
    <form action="feedback.php" method="POST" >
    <div class="container">
        <div class="img"></div>

        <div class="contact-box">
            <br><br><br><br>
            <h2>Feedback Form
            </h2>
            <input type="text" class="field" name="name" placeholder="Your Name">
            <input type="text" class="field" anme="email" placeholder="Your Email">
            <textarea placeholder="Message" name="message" class="field"></textarea>
            <button class="btn" name="submit">Send</button>

        </div>
    </div>
    </form>


<?php

#create connection
$con =mysqli_connect('localhost','root','','elearning');
session_start();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback(name,email,message) VALUES ('$name','$email','$message')";
    $run = mysqli_query($con,$query);

    if(($run) > 0)
    {
        echo "SignUp SuccesFull"; 
        echo "<script>window.location.href='/ELWebsite'</script>";
        die; 
    }
    else{ 
        echo "SignUp failed"; 
    } 
}


?>





</body>

</html>