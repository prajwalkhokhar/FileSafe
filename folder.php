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
                 if(isset($_GET['fid'])&isset($_GET['foldername']))
                 {
                     $_SESSION['fid']=$_GET['fid'];
                     $_SESSION['foldername']=$_GET['foldername'];
                 }
                include("profilemenu.php");
                ?>
                <div class="jumbotron col-lg-12">
                <?php
                if(isset($_GET['fid'])&isset($_GET['foldername']))
                {
                    $flag=0;
                    $_SESSION['fid']=$_GET['fid'];
                    $_SESSION['foldername']=$_GET['foldername'];
                    $folderid=$_GET['fid'];
                    $folder=$_GET['foldername'];
                    $query="select * from files where folderid='$folderid'";
                    $subresults=mysqli_query($conn,$query);
                    $rows=mysqli_num_rows($subresults);
                    echo "<br> <br><br>";
                    while($results=mysqli_fetch_array($subresults))
                    {
                        $flag+=1;
                        $name=$results['name'];
                        $actualname=$results['actualname'];
                        $type=$results['type'];
                        $path="./uploads/".$name;
                            ?>
                            <div class="col-lg-3" style="margin:1px solid black;"> 
                            <?php
                                echo "<a href='$path' download='$actualname'>";
                            ?>
                            <img src="<?php
                            if($type=="image")
                            {
                                echo $path;
                            }
                            else if($type=="pdf")
                            {
                                echo "./images/icons/pdf.png";
                            }
                            else if($type=="document")
                            {
                                echo "./images/document.png";
                            }
                            else
                            {
                                echo "./images/icons/others.png";
                            }
                            ?>" alt="<?php echo $name; ?>" style="height:200px"> <?php
                                echo "</a>";
                            ?><br>
                            <label>Name: <?php echo $actualname; ?></label><br>
                            <label>Type: <?php echo $type; ?></label><br>
                            <br><br><br><br><br>
                            </div>
                            <?php
                    }
                    if($flag==0)
                        {
                            echo "<div style='text-align:center'><br><br><b>You Have No Data</b><br><br><br><br></div>";
                        }
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
        <?php 
        include("footer.php"); 
        ?>
        </div>
    </body>
</html>