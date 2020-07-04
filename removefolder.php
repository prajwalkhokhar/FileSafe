<?php

session_start();
include("includes.php");
if(isset($_SESSION['uid']))
{
    if(isset($_GET['folder']))
    {
        $fid=$_SESSION['fid'];
        $foldername=$_SESSION['foldername'];
        $folder=$_GET['folder'];
        $uid=$_SESSION['uid'];
        $query="select count(name) as docs from files where folderid='$folder'";
        $subresult=mysqli_query($conn,$query);
        if($results1=mysqli_fetch_array($subresult))
        {
            $filesremoved=$results1['docs'];
            $query="select * signin where uid='$uid'";
            $subresult=mysqli_query($conn,$query);
            $results=mysqli_fetch_array($subresult);
            $removeddocs=$results['removeddocs']+$filesremoved;
            $docspresent=$results['docspresent']-$filesremoved;
            $query="update signin set removeddocs='$removeddocs', docspresent='$docspresent' where uid=$uid";
            $subresult=mysqli_query($conn,$query);
            $query="select * from files where folderid='$folder'";
            $subresult=mysqli_query($conn,$query);
            while($result=mysqli_fetch_array($subresult))
            {
                $path="./uploads/".$result['name'];
                unlink($path);
            }
            $query="delete from files where folderid='$folder'";
            $subresult=mysqli_query($conn,$query);
            $query="delete from folders where sno='$folder'";
            $subresult=mysqli_query($conn,$query);
            $_SESSION['removeddocs']=$removeddocs;
            $_SESSION['docspresent']=$docspresent;
            header("location:dashboard.php");
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