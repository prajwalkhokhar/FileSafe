<?php
include("includes.php");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $phno=$_POST['num'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $phnoregex="/^[6-9][0-9]{9}$/";
    $emailregex="/^([a-zA-Z0-9\.-])@([a-zA-Z0-9-]).([a-z]{2,5})(.[a-z]{2,5})?$/";
    if(trim($name)=="")
    {
        header("location:feedback.php?err=blank&field=Name");
    }
    else if(trim($email)=="")
    {
        header("location:feedback.php?err=blank&field=Email");
    }
    else if(trim($phno)=="")
    {
        header("location:feedback.php?err=blank&field=Phone%20Number");
    }
    else if(trim($msg)=="")
    {
        header("location:feedback.php?err=blank&field=Message");
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location:feedback.php?err=invalid&field=Email%20Type");
    }
    else if(!preg_match($phnoregex,$num))
    {
        header("location:feedback.php?err=invalid&field=Phone%20Number");
    }
    $query="insert into feedback(name,phno,email,msg) values('$name',$phno,'$email','$msg');";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header("location:thanksforfeedback.php");
    }
    else
    {
        include('header.php');
        echo "<div style='text-align:center;'><br><br><br><br><b>Error Dilivering Your Feedback</b><BR><BR><BR><BR></div>";
        include("footer.php");
    }
}
else
{
    header("location:feedback.php");
}
?>