<html>
<head>
<Title>Welcome to Filesafe. Please Login To Continue</title>
<?php
include("includes.php");
session_start();
if(isset($_SESSION['uid']))
{
    header("location:dashboard.php");
}
?>
     <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>
<body>
<?php
include("Header.php");
?>
<div class="form-container">
<form method="Post" action="login.exec.php">
    <label style="font-size: 25px;">Log In</label><br>
<input type="text" name="uname" placeholder="User Name">
<br>
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="sub" value="Log In"><br>
<?php 
if(isset($_GET['error']))
{
echo "<br><b style='text-align:center; color:red'>Wrong Username Or Password</b><br>";
}
?>
<a href="signup.php">New User?</a><br>
<a href="forgotpass.php">Forgot Password?</a>
</form>
</div>
<?php
include("footer.php");
?>
</body>
</html>