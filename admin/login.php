<html>
<head>
    <?php
    session_start();
    if(isset($_SESSION['id']))
    {
        header("location:controlpanel.php");
    }
    ?>
<Title>Welcome Admin</title>
     <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
    <div  style="text-align:center; margin-top:70px; ">
<label style="font-size: 25px;">Welcome to Admin Panel Login</label><br>
<div>
<div class="form-container">
<form method="Post" action="login.exec.php">
<label style="font-size: 25px;">Log In</label><br>
<input type="text" name="uname" placeholder="User Name">
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="sub" value="Log In"><br>
<?php 
if(isset($_GET['error']))
{
echo "<br><b style='text-align:center; color:red'>Wrong Username Or Password</b><br>";
}
?>
</form>
</div>
</body>
</html>