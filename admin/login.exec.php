<?php
session_start();
include("../includes.php");
if(isset($_POST['sub']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $query="select * from admin where uname='$uname' and pass='$pass'";
    $subresult=mysqli_query($conn,$query);
    $result=mysqli_fetch_array($subresult);
    $rows=mysqli_num_rows($subresult);   
        if($rows>0)
        {
        $_SESSION['uname']=$result['uname'];
        $_SESSION['id']=$result['id'];
        $_SESSION['phno']=$result['phno'];
        $_SESSION['email']=$result['email'];
        $_SESSION['name']=$result['name'];
        $_SESSION['profilepic']="logo";
        $_SESSION['extension']="jpg";
        
        $query="select count(uid) as 'users' from signin";
        $subresult=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($subresult);
        $_SESSION['totalusers']=$result['users'];

        $query="select sum(totaldocs) as 'totaldocs' from signin";
        $subresult=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($subresult);
        $_SESSION['totaldocs']=$result['totaldocs'];

        $query="select sum(docspresent) as 'docspresent' from signin";
        $subresult=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($subresult);
        $_SESSION['docspresent']=$result["docspresent"];

        $query="select sum(removeddocs) as 'removeddocs' from signin";
        $subresult=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($subresult);
        $_SESSION['removeddocs']=$result["removeddocs"];

        $query="select count(sno) as 'nooffolders' from folders";
        $subresult=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($subresult);
        $_SESSION['totalfolders']=$result["nooffolders"];

        header("location:controlpanel.php");
        }
        else
        {   
            header("location:login.php?error='wrong_uname_pass'");
        }
}
else
{
header("location:login.php");
}
?>