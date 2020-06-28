<html>
    <head>
        <title>Welcome, 
            <?php 
            session_start();
            if(isset($_SESSION['uname']))
            {
                echo $_SESSION['uname'];
            }
            else
            {
                echo"USER";
            }
            ?>
        </title>
        <?php
        include("includes.php");
        ?>
        <link rel="stylesheet" href="./css/dashboard.css">
        <link rel="stylesheet" href="./css/upload.css">
    </head>
    <body>
        <?php 
        include("header.php"); 
        ?>
        <div class="well col-lg-12">
            <div class="well col-lg-12">
                <?php
                   $_SESSION['fid']=0;
                   $_SESSION['foldername']="Dashboard";
                    $_SESSION['newprofile']="no";
                include("profilemenu.php");
                ?>
                <div class="jumbotron col-lg-12">
                    <?php
                        if(isset($_SESSION['uid']))
                        {
                            $uid=$_SESSION['uid'];
                            $query="select * from folders where uid='$uid'";
                            $subresult=mysqli_query($conn,$query);
                            $rows=mysqli_num_rows($subresult);
                            if($rows>0)
                            {
                            while($result=mysqli_fetch_array($subresult))
                                {   
                                    $xyz=$result['sno'];
                                    $folder=$result['name'];
                                    $url="folder.php?fid=$xyz&foldername=$folder";
                                    ?>
                                    <div class="col-lg-3">
                                        <a href="<?php echo $url;  ?>"> <img src="./images/icons/folder.png" style="height: 100px; margin:20px;" alt="folder"><br>
                                        <label>Name: <?php echo $result['name']; ?></label><br>
                                        &nbsp;<label>Type: <?php echo "Folder"; ?></label><br>
                                        <br><br><br><br><br>
                                    </div>
                                    <?php
                                }  
                            }
                            else{
                                echo "<div style='text-align:center'><br><br><br><br><b>You Have No Data</b><br><br><br><br></div>";
                                }
                        }
                        else
                        {
                            header("location:login.php");
                        }
                        ?>
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