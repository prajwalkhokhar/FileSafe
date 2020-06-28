<?php
session_start();
include("includes.php");
if(isset($_SESSION['uid']))
{
    if(isset($_POST['sub']))
    {
        $temp=$_FILES['profilepic']['tmp_name'];
        $actualname=$_FILES['profilepic']['name'];
        $images=["png","jpg","jpeg"];
        $extention_array=explode('.',$actualname);
        $extension=strtolower(end($extention_array));
        $path="./profilepics/".$_SESSION['uid'].'.'.$extension;
        $uid=$_SESSION['uid'];
        if($_FILES['profilepic']['error']==0)
        {
            $query="update signin set profilepic='$uid', extension='$extension';";
            $subresults=mysqli_query($conn,$query);
            if($subresults)
            {
                if(in_array($extension,$images))
                {
                    
                    $_SESSION['extension']=$extension;
                    $_SESSION['profilepic']=$uid;
                    move_uploaded_file($temp,$path);
                    header("location:dashboard.php");
                }
                else 
                {
                    include("header.php");
                    echo "<div style='text-align:center'><br><br><br><br><b>Invalid File Type</b><br><br><br><br></div>";
                    include("footer.php");        
                }        
            }
        }
        else
        {
                include("header.php");
                echo "<div style='text-align:center'><br><br><br><br><b>File Upload Error: ".$_FILES['profilepic']['error']."</b><br><br><br><br></div>";
                include("footer.php");
        }
    }
    else
    {
        include("header.php");
        echo "<div style='text-align:center'><br><br><br><br><b>We are Facing some error in uploading your file</b><br><br><br><br></div>";
        include("footer.php");
    }
}
else
{
    header("location:login.php");
}
?>