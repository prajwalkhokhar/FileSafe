<html>
<head>
<title>Home</title>
<?php
include("includes.php");
?>
<link rel="stylesheet" href="./css/body.css">
<style>
body
{
    background-color: red;
}
</style>
</head>
<body>
<?php
session_start();
$var='set';
include("Header.php");
?>
<br>
<hr><hr>
<div class="container" style="text-align:center">
    <div class="col-lg-12">
    <div  class="col-lg-7">
    <h1>What is Cloud Storage?<h1>
    <h5>Cloud storage is a cloud computing model that stores data on the Internet through a cloud computing provider 
    who manages and operates data storage as a service. It’s delivered on demand with just-in-time capacity and 
    costs, and eliminates buying and managing your own data storage infrastructure. This gives you agility, global 
    scale and durability, with “anytime, anywhere” data access.</h5><BR><BR><BR><BR><BR><BR><hr></div>
    <img src="./images/cloud.png" style="width:30%; border:1px solid black; height: 300px;"></div>
<div class="col-lg-12">
<div  class="col-lg-7 pull-right">
<h1>How Does Cloud Storage Work?</h1>
<h5>Cloud storage is purchased from a third party cloud vendor who owns and operates data storage capacity and 
    delivers it over the Internet in a pay-as-you-go model. These cloud storage vendors manage capacity, security 
    and durability to make data accessible to your applications all around the world.
Applications access cloud storage through traditional storage protocols or directly via an API. 
Many vendors offer complementary services designed to help collect, manage, secure and analyze data at massive scale.</h5><BR><BR><BR><BR><BR><BR><hr></div>
<img src="./images/cloud2.png" style="width:30%; padding: 30px; border:1px solid black; height: 300px;">
</div>
<div class="col-lg-12">
<div  class="col-lg-7">
<h1>Benefits of Cloud Storage</h1>
Storing data in the cloud lets IT departments transform three areas:

<h5>Total Cost of Ownership. With cloud storage, there is no hardware to purchase, storage to provision, or capital being 
used for "someday" scenarios. You can add or remove capacity on demand, quickly change performance and retention 
characteristics, and only pay for storage that you actually use. Less frequently accessed data can even be 
automatically moved to lower cost tiers in accordance with auditable rules, driving economies of scale.
Time to Deployment. When development teams are ready to execute, infrastructure should never slow them down. 
Cloud storage allows IT to quickly deliver the exact amount of storage needed, right when it's needed. This allows IT 
to focus on solving complex application problems instead of having to manage storage systems.
Information Management. Centralizing storage in the cloud creates a tremendous leverage point for new use cases. By 
using cloud storage lifecycle management policies, you can perform powerful information management tasks including 
automated tiering or locking down data in support of compliance requirements.</h5><BR><BR><BR><BR><BR><BR><hr></div>
<img src="./images/cloud3.jfif" style="width:30%; padding: 30px; border:1px solid black; height: 300px;">
</div>
<hr>
<div class="col-lg-12">
<div class="container col-lg-7" style="text-align:center">
<h3>Be partner with reliable cloud service providers, who gaurantee saftey of your data and 100% Privacy</h3>
<h5>Why go with anyone else when you can join hands with <a href="about.php">#Praj_K Department</a> itself. Join hands with the best, to be the best, and to reach the heights of success.<br>
<h5> Our team provides the following features:</h5><br>
<ul style="text-align:justify">
<li><b>100% Data Privacy:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your data would not be accessed by our employees. Our servers are locked in darkest, deepest dungeons to the point where even we can't find them anymore.</li><br>
<li><b>Free service:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We do not charge for our services. But yeah we accept donations. Please dont humiliate yourself by donating just 99 cents, we all know you can do better than that. Thank you.</li><br>
<li><b>Customer Support:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Customer care service managers are so talkitive they do nothing but talk at job. Literally.</li><br>
</ul>
</h5>
<a href="signup.php"><div class="btn" style="background-color:rgb(180, 221, 225);">
        <?php
        if(!isset($_SESSION['uid']))
        {
        echo 'Join Us';
        }
        else
        {
            echo '<a href="dashboard.php">Go To Your Dashboard</a>';
        }
        ?></a>
    </div>
</div>
<img src="./images/logo.jpg" style="width:30%; padding: 30px; border:1px solid black; height: 300px;">
</div>
<br>
<hr>
</div><hr><hr><br><br>
<div class="col-lg-12">
<?php
include("footer.php");
?>
</div>
</body>
</html>