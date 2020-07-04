<html>
<head>
<title>Change Password</title>
<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<link rel="stylesheet" type="text/css" href="../css/form.css">
    </head>
    <body>
        <?php
        include("controlmenu.php");
        ?>
        <div class="form-container">
            <form method="post" action="changepwd.exec.php">
                <label style="font-size: 25px;">Change Password</label><br>
                <input type="Password" name="oldpass" id="oldpass" placeholder="Current Password" required><br>
                <input type="Password" name="newpass" id="newpass" placeholder="New Password" required><br>
                <input type="password" name="confpass" id="confpass" placeholder="Confirm Password" required><br>
                <input type="Submit" name="sub" id="Sub" value="Submit">
                <?php
                    if(isset($_GET['err']))
                    {
                        $error=$_GET['err'];
                        if($error=="wrong_pass")
                        {
                            echo "<br><b style='color:red'>Wrong Password</b>";
                        }
                        else if($error=="pass_mismatch")
                        {
                            echo "<br><b style='color:red'>Password Does not match Confirm Password</b>";
                        }
                    }
                ?>
            </form>
        </div>
    </body>
</html>