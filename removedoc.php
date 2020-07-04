<?php

session_start();
include("includes.php");
if(isset($_SESSION['uid']))
{
    if(isset($_GET['file']))
    {
        $fid=$_SESSION['fid'];
        $foldername=$_SESSION['foldername'];
        $file=$_GET['file'];
        $uid=$_SESSION['uid'];
        $query="delete from files where name='$file'";
        $subresult=mysqli_query($conn,$query);
        if($subresult)
        {
            $query="select * from signin where uid='$uid'";
            $subresult=mysqli_query($conn,$query);
            $result=mysqli_fetch_array($subresult);
            $removeddocs=$result['removeddocs']+1;
            $docspresent=$result['docspresent']-1;
            $query="update signin set removeddocs='$removeddocs', docspresent='$docspresent' where uid=$uid";
            $subresult=mysqli_query($conn,$query);
            unlink("uploads/".$file);
            $query="select * from folders where sno='$fid'";
            $subresults=mysqli_query($conn,$query);
            $results=mysqli_fetch_array($subresults);
            $no_of_files=$results['no_of_files']-1;
            $query="update folders set no_of_files='$no_of_files' where sno=$fid";
            $subresults=mysqli_query($conn,$query);
            $_SESSION['removeddocs']=$removeddocs;
            $_SESSION['docspresent']=$docspresent;
            header("location:folder.php?fid=$fid&foldername=$foldername");
        }
        else
        {
            echo $mysqli_error();
        }
    }
    else
    {
        echo "ERROR: INVALID URL TYPE";
    }
}
else
{
    header("location:dashboard.php");
}

?>