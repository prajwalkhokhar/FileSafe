<html>
<head>
<title>Create New Folder</title>
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



<div class="container form-container">
    <form method="POST" action="newfolder.exec.php">
    <input type="text" name="foldername" id="foldername" placeholder="New Folder Name" required>
    <br><br>
    <input type="submit" name="sub" value="Create">
    </form>
</div>



<?php
include("footer.php");
?>
</body>
</html>