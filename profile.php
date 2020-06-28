<html>
    <head>
        <title>
            Profile
        </title>
        <?php
            include("includes.php");
            session_start();
        ?>
        <!-- <link rel="stylesheet" type="text/css" href="./css/table.css"> -->
        <link rel="stylesheet" type="text/css" href="./css/form.css">
    </head>
    <body>
        <?php
            include("header.php");
        ?>
        <div class="well">
            <div class="well">
                <br>
                <div class="jumbotron">
                    <img src="./profilepics/<?php echo $_SESSION['profilepic'].'.'.$_SESSION['extension']; ?>" class="img-circle" style="margin-left:37.5%; margin-right:37.5%; width:25%; border:1px solid black;"><br><br>
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
                            First Name:
                            </td>
                            <td>
                            <?php echo $_SESSION['fname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Last Name:
                            </td>
                            <td>
                            <?php echo $_SESSION['lname']; ?>
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
                        <!-- </tr>
                        <tr>
                            <td>
                            Number of Uploads in Account:
                            </td>
                            <td>
                            <?php echo $_SESSION['docspresent']; ?>
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
                            Total Uploads:
                            </td>
                            <td>
                            <?php echo $_SESSION['totaldocs']; ?>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
        <form action="editprofile.php" method="post" class="form-container">
            <input type="submit" name="sub" value="Update">
        </form>
        <?php
            include("footer.php");
        ?>
    </body>
</html>