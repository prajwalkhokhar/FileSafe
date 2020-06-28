
   <ul class="nav pull-left pagination">
                       <li><?php
                       $fid=$_SESSION['fid'];
                       $foldername=$_SESSION['foldername'];
                       if($fid==0)
                       {
                        echo $foldername; 
                       }
                       else
                       {
                        echo "Dashboard/".$foldername;
                        ?>
                        <script>
                            document.getElementById("nf").innerHTML="";
                        </script>
                        <?php
                       }
                       ?>
                       </li>
                   </ul>
               <ul class="nav pull-right pagination">
                   <li><a href="profile.php">Profile</a></li>
                   <?php
                   if($fid!=0)
                   {
                   echo '<li><a href="upload.php">Upload</a></li>';
                   }
                   ?>
                   <?php
                   if($_SESSION['fid']==0)
                   {
                   echo '<li><a href="newfolder.php">New Folder</a></li>';
                   }
                   ?>
                   <li><a href="changepwd.php">Change Password</a></li>
                   <li><a href="logout.exec.php">Logout</a></li>
                   <?php
                        if(isset($_SESSION['profilepic']))
                        {
                            echo '&nbsp;&nbsp;&nbsp;<img class="img img-circle" style="height:30px;" src="./profilepics/'.$_SESSION['profilepic'].".".$_SESSION['extension'].'">';
                        }
                   ?>
               </ul>
               <br><br><br><br>