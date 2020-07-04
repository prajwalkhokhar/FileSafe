<?php
session_start();
include("../includes.php");
if(isset($_POST['sub']))
{
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $confpass=$_POST['confpass'];
    $id=$_SESSION['id'];
    $query="select pass from admin where id='$id';";
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
        $query="update admin set pass='$newpass' where id='$id'";
        $subresults=mysqli_query($conn,$query);
        if($subresults)
        {
            echo "<div style='text-align:center'><br><br><br><br><b>Password Changed.</b><br><br><br><br></div>";
            echo "<div style='text-align:center'><br><br><br><br><a href='controlpanel.php'>Go Back Home</a><br><br><br><br></div>";
        }
    }
}
else
{
    header("location:changepwd.php");
}
?>