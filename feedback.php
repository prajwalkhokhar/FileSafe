<html>
    <head>
        <title>
            Feedback
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
        <form method="post" action="feedback.exec.php">
            <label style="font-size: 25px;">Feedback</label><br>
        <input type="text" name="name" placeholder="Name" id="name" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname']; } ?>"><br>
        <input type="text" name="email" placeholder="Email ID" id="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>"><br>
        <input type="text" name="num" placeholder="Contact Number" id="num" value="<?php if(isset($_SESSION['phno'])){ echo $_SESSION['phno']; } ?>"><br>
        <textarea placeholder="Message" name="msg" id="msg"></textarea><br>
        <input type="submit" name="sub" value="Submit"><br>

        <b style="color:red">
        <?php
        if(isset($_GET['err']))
        {
            if($_GET['err']=="blank")
            {
           echo $_GET['field']." Must Not Be Blank";
            }
            else if($_GET['err']=="invalid")
            {
           echo "Invalid ".$_GET['field'];
            }
        }
        ?>
    </b>        

        </form>
</div>
<?php
include("footer.php");
?>
    </body>
</html>