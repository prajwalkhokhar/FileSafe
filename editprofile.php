<html>
    <head>
        <title>Edit Profile</title>
    <?php
    include("includes.php");
    session_start();
    ?>
     <link rel="stylesheet" type="text/css" href="./css/form.css">
    </head>
    <body>
            <div class="well">
            <div class="well">
                <?php
                    include("profilemenu.php");
                ?><br>
                <div class="jumbotron form-container">
                <form action="editprofile.exec.php" method="post">
                    <img src="./profilepics/<?php echo $_SESSION['profilepic'].'.'.$_SESSION['extension']; ?>" class="img inmg-responsive img-circle" style="margin-left:37.5%; margin-right:37.5%; width:25%; border:1px solid black;"><ul class="nav pull-right"><li><a href="uploadprofilepic.php" style="font-family:Wingdings;  border:1px solid whiteS;"><b style="font-family:'Helvetica Neue';">Update Profile Pic</b>?</a></li></ul><br><br>
                    <table class="table table-responsive table-hover table-striped tbl">
                    <tr>
                            <td>
                            User Name:
                            </td>
                            <td>
                            <input type="text" name="uname" minlength="3" value="<?php echo $_SESSION['uname']; ?>">
                            </td>
                        </tr>
                    <tr>
                            <td>
                            First Name:
                            </td>
                            <td>
                            <input type="text" name="fname" id="fname" value="<?php echo $_SESSION['fname']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Last Name:
                            </td>
                            <td>
                            <input type="text" name="lname" id="lname" value="<?php echo $_SESSION['lname']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Phone Number:
                            </td>
                            <td>      
                            <input type="text" name="phno" id="phno" minlength="10" value="<?php echo $_SESSION['phno']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Email ID:
                            </td>
                            <td>
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="sub" id="sub" value="Submit Changes"><br>
                    <?php
                        if(isset($_GET['err']))
                        {
                            if($_GET['err']=="uname_exists")
                            {
                                ?>
                                <b style="color:red;">Username Already Exists. Please Choose a different Username</b>
                                <?php
                            }
                        }
                    ?>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>