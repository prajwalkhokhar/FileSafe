<html>
    <head>
        <title>
            Control Panel
        </title>
     <link rel="stylesheet" type="text/css" href="../css/form.css">
     <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    </head>
<?php
session_start();
include('controlmenu.php');
if(!isset($_SESSION['id']))
{
    header("location: login.php");
}
?>
<body>
                <div class="jumbotron form-container" style="border:1px solid black">
                    <img src="../profilepics/<?php echo $_SESSION ['profilepic'].'.'.$_SESSION['extension']; ?>" class="img-circle" style="margin-left:37.5%; margin-right:37.5%; width:25%; border:1px solid black;"><br><br>
                    <table class="table table-responsive table-hover table-striped">
                    <tr>
                            <td>
                            User Name:
                            </td>
                            <td>
                            <?php echo $_SESSION['uname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Name:
                            </td>
                            <td>
                            <?php echo $_SESSION['name']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Phone Number:
                            </td>
                            <td>
                            <?php echo $_SESSION['phno']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Email ID:
                            </td>
                            <td>
                            <?php echo $_SESSION['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Number of Uploads:
                            </td>
                            <td>
                            <?php echo $_SESSION['docspresent']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Total Number of Folders:
                            </td>
                            <td>
                            <?php echo $_SESSION['totalfolders']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Number of Deleted Documents:
                            </td>
                            <td>
                            <?php echo $_SESSION['removeddocs']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Total Users:
                            </td>
                            <td>
                            <?php echo $_SESSION['totalusers']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Total Uploads:
                            </td>
                            <td>
                            <?php echo $_SESSION['totaldocs']; ?>
                            </td>
                        </tr>
                    </table>
                </div>
</body>
</html>