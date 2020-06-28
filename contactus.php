<html>
    <head>
        <title>
            Contact Us
        </title>
        <?php
        include("includes.php");
        ?>
     <link rel="stylesheet" type="text/css" href="./css/form.css">
    </head>
    <body>
    <?php
session_start();
include("Header.php");
?>
 <div  class="form-container">
        You may contact us on the following numbers between 9:00 AM to 8:00 PM from Monday to Friday or drop an email.
            <br>
            +91-8837-802954<br>
            1800-0000-0101(Toll Free)
            <br>
            Email:kprajwaldeep@gmail.com<br><br><br>
(Alternatively you can send us Feedback)<br> <button style="background-color:grey; color:Black; border-radius:3px" onclick="window.location='feedback.php'">Feedback</button>        
        </div>
<?php
include("footer.php");
?>
    </body>
</html>