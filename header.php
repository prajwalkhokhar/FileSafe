<?php
include("includes.php")
?>
<ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
    <li><a href="feedback.php">Feedback</a></li>
    <li style="float:right; margin: 10px"><img src="./images/icons/logo.jpg" alt="Deejwal_Vu Logo" style="height:40px; border-radius:10px"></li>
    <?php 
    if(isset($_SESSION['uid']))
    {
        echo "<li><a href='dashboard.php'>Dashboard</a></li>";
    }
    else
    {
        echo "<li><a href='login.php'>Log In</a></li>";
    }
    ?>
</ul>