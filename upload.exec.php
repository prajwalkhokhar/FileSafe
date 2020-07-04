<?php
session_start();
include("includes.php");
$fid=$_SESSION['fid'];
$foldername=$_SESSION['foldername'];
if(isset($_POST['sub']))
{
    $images=["png","jpg","jpeg"];
    $pdf=["pdf"];
    $documents=["txt","doc","docx","htm","html","xls","xlsx"];
    $actualname=$_FILES['file']['name']; 
    $extention_array=explode('.',$actualname);
    $extention=strtolower(end($extention_array));
    $uid=$_SESSION['uid'];
    if($_FILES['file']['error']===0)
    {
        if(in_array($extention,$images))
        {
            $type="image";
        }
        elseif(in_array($extention,$pdf))
        {
            $type="pdf";
        }
        elseif(in_array($extention,$documents))
        {
            $type="document";
        }
        else
        {
            $type="other";
        }
        $name=uniqid().".".$extention;
        $query="insert into files(folderid,type,name,actualname) values('$fid','$type','$name','$actualname')";
        $subresults=mysqli_query($conn,$query);
        $path="./uploads/".$name;
        if(move_uploaded_file($_FILES['file']['tmp_name'],$path))
        {
            $query="select * from signin where uid='$uid'";
            $subresults=mysqli_query($conn,$query);
            $results=mysqli_fetch_array($subresults);
            $totaldocs=$results['totaldocs']+1;
            $docspresent=$results['docspresent']+1;
            $query="update signin set totaldocs=$totaldocs, docspresent=$docspresent where uid=$uid";
            $subresults=mysqli_query($conn,$query);
            $query="select * from folders where sno='$fid'";
            $subresults=mysqli_query($conn,$query);
            $results=mysqli_fetch_array($subresults);
            $no_of_files=$results['no_of_files']+1;
            $query="update folders set no_of_files='$no_of_files' where sno=$fid";
            $subresults=mysqli_query($conn,$query);
            $_SESSION['totaldocs']=$totaldocs;
            $_SESSION['docspresent']=$docspresent;
            header("location:folder.php?fid=$fid&foldername=$foldername");
        }
        else
        {
            include("header.php");
            echo "<div style='text-align:center'><b>Upload Error</b></div>";
            include("footer.php");
        }
    }
    else
    {
        include("header.php");
        echo "<div style='text-align:center'><br><br><br><br><b>File Handling Error: ".$_FILES['file']['error']."</b><br><br><br><br></div>";
        include("footer.php");
    }
}
else
{
        header('location:upload.php');
}
?>