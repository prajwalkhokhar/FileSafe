<html>
<head>
<title>Users</title>
<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
        <?php
        include("controlmenu.php");
        include("../includes.php");
        ?>


                <div class="jumbotron col-lg-12">
                <table class="table table-responsive table-hover table-striped">
                    <th>Uid</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Username</th>
                    <th>Total Documents</th>
                    <th>Documents Present</th>
                    <th>Documents Removed</th>
                    <th>Remove User</th>
                <?php
                    $query="select * from signin";
                    $subresults=mysqli_query($conn,$query);
                    $rows=mysqli_num_rows($subresults);
                    $alert="alter(Do You really want to Delete this user?);";
                    echo "<br> <br><br>";
                    while($results=mysqli_fetch_array($subresults))
                    {
                        $uid=$results['uid'];
                        $removeuser="<a href='removeuser.php?uid=$uid'><div class='btn'>Remove User</div></a>";
                        echo "<tr><td>".$results['uid']."</td><td>".$results['fname']."</td><td>".$results['lname']."</td><td>".$results['phno']."</td><td>".$results['email']."</td><td>".$results['uname']."</td><td>".$results['totaldocs']."</td><td>".$results['docspresent']."</td><td>".$results['removeddocs']."</td><td>".$removeuser."</td></tr></a>";
                    }
                ?>
                </table>
                </div>


</body>
</html>