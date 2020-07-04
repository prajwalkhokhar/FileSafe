<html>
    <head>
        <title>
            Forgot Password
        </title>
        <?php
        session_start();
        include("includes.php");
        ?>
        <link rel="stylesheet" type="text/css" href="./css/form.css">
        <link rel="stylesheet" type="text/css" href="./css/body.css">
    </head>
    <body>
        <?php
        include("header.php");
        ?>
        <div class="container form-container">
            <form action="forgotpass.exec.php" method="POST">
            <label style="font-size: 25px;">Recover Password</label><br>
                <input type="text" placeholder="User Name" name="uname"><br>
                <input type="text" placeholder="Registered Phone Number" name="num"><br>
                <input type="text" placeholder="Registered Email ID" name="email"><br>
                <input type="hidden" name="table" value="signin"><br>
                <input type="submit" name="sub" value="Recover Password"><br>
                <b style="color:red">
                <?php
                if(isset($_GET['pwd']))
                {
                    $pwd=$_GET['pwd'];
                    echo "Your Password is: ".$pwd;
                } 
                if(isset($_GET['error']))
                {
                $error=$_GET['error'];
                    echo $error;
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