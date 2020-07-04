<?php

include("../includes.php");
if(isset($_GET['uid']))
{
    $uid=$_GET['uid'];
    $query="delete from signin where uid='$uid'";
    $subresults=mysqli_query($conn,$query);
    $query="select * from folders where uid='$uid'";
    $foldersubresults=mysqli_query($conn,$query);
    while($folderresult=mysqli_fetch_array($foldersubresults))
    {
        $folderid=$folderresult['sno'];
        $query="select * from files where folderid='$folderid'";
        $filesubresults=mysqli_query($conn,$query);
        while($fileresult=mysqli_fetch_array($filesubresults))
        {
            $path="../uploads/".$fileresult['name'];
            echo $path;
            unlink($path);
        }
        $query="delete from files where folderid='$folderid'";
        $subresults=mysqli_query($conn,$query);
        $query="delete from folders where uid='$uid'";
        $subresults=mysqli_query($conn,$query);
    }
    if($subresults)
    {
        header("location:users.php");
    }
    else
    {
        echo "Error Removing the user: ".mysqli_error($conn);
    }
}
else
{
    header("location:login.php");
}

?>