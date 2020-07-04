<html>
<head>
<title>Feedbacks</title>
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
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Message</th>
                <?php
                    $query="select * from feedback";
                    $subresults=mysqli_query($conn,$query);
                    $rows=mysqli_num_rows($subresults);
                    echo "<br> <br><br>";
                    while($results=mysqli_fetch_array($subresults))
                    {
                        echo "<tr><td>".$results['name']."</td><td>".$results['phno']."</td><td>".$results['email']."</td><td>".$results['msg'],"</td></tr>";
                    }
                ?>
                </table>
                </div>


</body>
</html>