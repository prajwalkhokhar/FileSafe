<?php
session_start();
if(isset($_POST['sub']))
{
    include("includes.php");
    $foldername=$_POST['foldername'];
    $uid=$_SESSION['uid'];
    $query="insert into folders(uid,name,no_of_files) values('$uid','$foldername',0);";
    $subresults=mysqli_query($conn,$query);
    if($subresults)
    {
        header("location:dashboard.php");
    }
    else
    {
        include("header.php");
        echo "<div style='text-align:center'><br><br><br><br><b>Error: Folder Could not be created. Please Try Again later</b><br><br><br><b0r></div>";
        include("footer.php");
    }
}
else
{
    header("location:newfolder.php");
}
?>