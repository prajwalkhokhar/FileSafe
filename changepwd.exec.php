<?php
session_start();
include("includes.php");
if(isset($_POST['sub']))
{
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $confpass=$_POST['confpass'];
    $uid=$_SESSION['uid'];
    $query="select pass from signin where uid= '$uid'";
    $subresults=mysqli_query($conn,$query);
    $results=mysqli_fetch_array($subresults);
    if($oldpass!=$results[0])
    {
        header("location:changepwd.php?err=wrong_pass");
    }
    else if($newpass!=$confpass)
    {
        header("location:changepwd.php?err=pass_mismatch");
    }
    else 
    {
        $query="update signin set pass='$newpass' where uid='$uid'";
        $subresults=mysqli_query($conn,$query);
        if($subresults)
        {
            include("header.php");
            echo "<div style='text-align:center'><br><br><br><br><b>Password Changed.</b><br><br><br><br></div>";
            include("footer.php");
        }
    }
}
else
{
    header("location:changepwd.php");
}
?>