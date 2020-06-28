<html>
<head>
<title>Sign Up</title>
<?php
include("includes.php");
?>
<link rel="stylesheet" href="./css/form.css">
<!-- <script src="js/forms.js"></script> -->
<script src="js/upload.js"></script>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['uid']))
{
    header("location:dashboard.php");
}
include("Header.php");
?>
<div class="container form-container">
<form encytype="multipart/form-data" action="signup.exec.php" method="post">
    <label style="font-size: 25px;">Sign Up</label><br>
    <input type="text" placeholder="First Name" name="fname" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname']; } ?>"><br>
    <input type="text" placeholder="Last Name" name="lname" value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname']; } ?>"><br>
    <input type="number" placeholder="Phone Number" name="phno" value="<?php if(isset($_SESSION['phno'])){ echo $_SESSION['phno']; } ?>"><br>
    <input type="email" placeholder="email" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>"><br>
    <input type="text" placeholder="User Name" name="uname" value="<?php if(isset($_SESSION['uname'])){ echo $_SESSION['uname']; } ?>"><br>
    <input type="password" placeholder="Password" name="pass"><br>
    <input type="password" placeholder="Confirm Password" name="cpass"><br>
    <input type="submit" value="Sign Up" name="sub"><br>

    <b style="color:red">
        <?php
        if(isset($_GET['err']))
        {
            if($_GET['err']=="blank")
            {
           echo $_GET['field']." Must Not Be Blank";
            }
            else if($_GET['err']=="invalid")
            {
           echo "Invalid ".$_GET['field'];
            }
            else if($_GET['err']=="pass_mismatch")
            {
           echo "Confirm Password does not match Password";
            }
            else if($_GET['err']=="uname_exists")
            {
           echo "Username Already Taken. Please Try another username";
            }
        }
        ?>
    </b>

</form>
<a href="login.php">Already a User?</a><br>
</div>
<?php
include("footer.php");
?>
</body>
</html>