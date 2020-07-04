<html>
<head>
<title>Upload File</title>
<?php
include("includes.php");
?>
<link rel="stylesheet" href="./css/form.css">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
include("Header.php");
?>
 <div class="well">
            <div class="well">
                <?php
                include("profilemenu.php");
                ?>
                <div class="jumbotron">
                <div class="container form-container">
                <form action="upload.exec.php" method="post" enctype="multipart/form-data">
                <h3>Please Choose File:</h3><br>
                <div class="btn" style="border: 1px solid black; text-align:center; width: 150px; border-radius:5px" onclick="document.getElementById('file').click();">Choose File</div><br>
                <input type="file" name="file" id="file" style="display:none"><br>
                <input type="submit" name="sub" value="Upload">
                </form>
                </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
    </body>
</html>