<?php
    session_start();
    include("includes.php");
if(isset($_POST['sub']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $uname=$_POST['uname'];
    $_SESSION['uname']=$uname;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['phno']=$phno;
    $_SESSION['pass']=$pass;
    $_SESSION['newprofiletag']=true;
    $phnoregex="/^[6-9][0-9]{9}$/";
    $emailregex="/^([a-zA-Z0-9\.-])@([a-zA-Z0-9-]).([a-z]{2,5})(.[a-z]{2,5})?$/";
    $query="select * from signin where uname= '$uname'";
    $subresults=mysqli_query($conn,$query);
    if(trim($fname)=="")
    {
        header("location:signup.php?err=blank&field=First%20Name");
    }
    else if(trim($lname)=="")
    {
        header("location:signup.php?err=blank&field=Last%20Name");
    }
    else if(trim($phno)=="")
    {
        header("location:signup.php?err=blank&field=Phone%20Number");
    }
    else if(trim($email)=="")
    {
        header("location:signup.php?err=blank&field=Email");
    }
    else if(trim($uname)=="")
    {
        header("location:signup.php?err=blank&field=Username");
    }
    else if(trim($pass)=="")
    {
        header("location:signup.php?err=blank&field=Password");
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location:signup.php?err=invalid&field=Email%20Type");
    }
    else if(!preg_match($phnoregex,$phno))
    {
        header("location:signup.php?err=invalid&field=Phone%20Number");
    }
    else if(mysqli_fetch_array($subresults))
    {
        header("location:signup.php?err=uname_exists");
    }
    else if($cpass!=$pass)
    {
        header("location:signup.php?err=pass_mismatch");
    }
    else
    {
        header("location:profilecreator.exec.php");
    }
}
else
{
    header("location:signup.php");
}