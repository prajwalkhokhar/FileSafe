<html>
    <head>
        <title>Welcome 
            <?php 
            session_start();
            if(isset($_SESSION['uname']))
            {
                echo ", ".$_SESSION['uname'];
            }
            ?>
        </title>
        <?php
        include("includes.php");
        ?>
        <link rel="stylesheet" href="./css/dashboard.css">
        <link rel="stylesheet" href="./css/upload.css">
        <link rel="stylesheet" href="./css/form.css">
        <script src="js/upload.js"></script>
    </head>
    <body>
    <?php 
        include("header.php"); 
        if(!isset($_SESSION['newprofile']))
        {
            header("location:login.php");
        }
    ?>
    <div class="well">
            <div class="well">
                <ul class="nav nav-pills pull-right">
                    <li>
                    <a href="dashboard.php"><?php 
                    if($_SESSION['newprofile']=='yes')
        {
            echo "Skip";
        }
        ?>
        </a>
                    </li>
                </ul>
                <div class="container form-container">
                <form action="uploadprofilepic.exec.php" method="post" enctype="multipart/form-data">
                <img id="dp" src="./profilepics/<?php echo $_SESSION['profilepic'].'.'.$_SESSION['extension'] ?>" class="img inmg-responsive img-circle" style="margin-left:37.5%; margin-right:37.5%; width:25%; border:1px solid black;"><br><br>
                <div class="btn" style="border: 1px solid black; text-align:center; width: 150px; border-radius:5px" onclick="document.getElementById('profilepic').click();">Change Picture</div><br>
                <input type="file" name="profilepic" id="profilepic" style="display:none"><br>
                <input type="submit" name="sub" value="Upload">
                    </form>
                </div>
            </div>
        </div>
        <br>
    <div class="col-lg-12">
        <?php 
        include("footer.php"); 
        ?>
        </div>
    </body>
</html>