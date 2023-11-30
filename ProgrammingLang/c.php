<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- <link rel="stylesheet" href="index.css" /> -->
    
	<!---custom css link---->
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<?php
  session_start();
  if(isset($_SESSION['email'])){
    echo "";
  }
  else{
    echo "<script>window.location.href='../Login/signup.php'</script>";

  }
?>


<frameset rows="12%,*" frameborder="yes" border="3">
<frame src="navbar1.html">
<frameset cols="25%,*" frameborder="yes" border="3" >
<frame src="cIndex.html" name="j1">
<frame src="cContent.html" name="j2">
</frameset>


</html>