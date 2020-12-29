 <?php
    session_start();
    if(!isset($_SESSION["uid"]))
    {
        header("location: login.php");
    }
?>

 <?php
include "dbconnect.php";
if(isset($_POST["pwdbtn"]))
{ 
    session_start();
    $pid = $_SESSION["uid"];

    $qryc = "SELECT `pwd` FROM `register` WHERE id='$pid'";
    $resultc = mysqli_query($connect,$qryc);
    $datac = mysqli_fetch_assoc($resultc);
    $cp = $_POST["currentpwd"];
    if($cp==$datac["pwd"])
    {
         $np = $_POST["newpwd"];
         $cop = $_POST["confirmpwd"];
         if($np==$cop)
        {
            $qryu = "UPDATE `register` SET `pwd`='$np' WHERE id='$pid'";
            $resultu = mysqli_query($connect,$qryu);
            if($resultu)
            {
            ?><script>
alert("Password has been changed successfully");
 </script><?php
            }
            else
            {
            ?><script>
alert("Something Went wrong | Please try again");
 </script><?php
            }
            
        }
         else
         {
               ?><script>
alert("Confirm password should be same as New password");
 </script><?php
         }
    }
    else
    {
        ?><script>
alert("Please enter valid current password");
 </script><?php
    }
   
}
?>

 <?php
include "dbconnect.php";
if(isset($_POST["submit"]))
{   
$leave = $_POST["leave"];
$rejoin = $_POST["rejoin"];
$detail = $_POST["detail"];
$firstname = $_POST["firstname"];
$empid = $_POST["empid"];
$subject = $_POST["subject"];
date_default_timezone_set('Asia/Kolkata');
$currentdate = date("d-m-Y G:i:s");

$qry = "INSERT INTO `apply`(`id`, `name`, `employee id`, `leave`, `rejoin`, `subject`, `detail`, `apply date`) 
                     VALUES (NULL,'$firstname','$empid','$leave','$rejoin','$subject','$detail','$currentdate')";

$result = mysqli_query($connect , $qry);
$data = mysqli_fetch_assoc($result);


if($result)
{
?><script>
alert('Apply for a Leave is submitted')
 </script><?php
}
else {
 ?><script>
alert('Something went wrong')
 </script><?php   
}
}
?>


 <?php
include "dbconnect.php";

session_start();
$id = $_SESSION["uid"];

$qry1 = "SELECT * FROM `register` WHERE id='$id'";  
$result1 = mysqli_query($connect , $qry1);
$data1 = mysqli_fetch_assoc($result1);

$qry3 = "SELECT * FROM `apply` WHERE 'id'='$id' 'employee id'='EM101'";  
$result3 = mysqli_query($connect , $qry3);
?>


 <?php
include "dbconnect.php";

if(isset($_POST["updatebtn"]))
{

    $fn = $_POST["firstname"];
    $mn = $_POST["middlename"];
    $ln = $_POST["lastname"];
    $eid = $_POST["empid"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];


    $qryx = "UPDATE `register` SET `firstname`='$fn',`middlename`='$mn',`lastname`='$ln',`email`='$email',`employee id`='$eid',`address`='$address',`contact`='$contact',`city`='$city'  WHERE id='$id'";
    $resultx = mysqli_query($connect,$qryx);
?>
 <script>
alert("Your profile has been updated successfully");
window.location.href = "leavemanage.php";
 </script><?php


}
?>






 <!DOCTYPE html>
 <html>

 <head>
     <title>
         Leave Approval Management
     </title>

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
     <meta charset="UTF-8">
     <meta name="description" content="Responsive Admin Dashboard Template" />
     <meta name="keywords" content="admin,dashboard" />
     <meta name="author" content="Steelcoders" />

     <!-- Styles -->
     <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css" />
     <link href="assets/css/materialdesign.css" rel="stylesheet">
     <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


     <!-- Theme Styles -->
     <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />


     <style>
     /* andada-regular - latin-ext_latin */
     @font-face {
         font-family: 'Andada';
         font-style: normal;
         font-weight: 400;
         src: url('../fonts/andada-v12-latin-ext_latin-regular.eot');
         /* IE9 Compat Modes */
         src: local(''),
             url('../fonts/andada-v12-latin-ext_latin-regular.eot?#iefix') format('embedded-opentype'),
             /* IE6-IE8 */
             url('../fonts/andada-v12-latin-ext_latin-regular.woff2') format('woff2'),
             /* Super Modern Browsers */
             url('../fonts/andada-v12-latin-ext_latin-regular.woff') format('woff'),
             /* Modern Browsers */
             url('../fonts/andada-v12-latin-ext_latin-regular.ttf') format('truetype'),
             /* Safari, Android, iOS */
             url('../fonts/andada-v12-latin-ext_latin-regular.svg#Andada') format('svg');
         /* Legacy iOS */
     }

     /* roboto-regular - latin */
     @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: url('../fonts/roboto-v20-latin-regular.eot');
         /* IE9 Compat Modes */
         src: local(''),
             url('../fonts/roboto-v20-latin-regular.eot?#iefix') format('embedded-opentype'),
             /* IE6-IE8 */
             url('../fonts/roboto-v20-latin-regular.woff2') format('woff2'),
             /* Super Modern Browsers */
             url('../fonts/roboto-v20-latin-regular.woff') format('woff'),
             /* Modern Browsers */
             url('../fonts/roboto-v20-latin-regular.ttf') format('truetype'),
             /* Safari, Android, iOS */
             url('../fonts/roboto-v20-latin-regular.svg#Roboto') format('svg');
         /* Legacy iOS */
     }

     /* roboto-500italic - latin */
     @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 500;
         src: url('../fonts/roboto-v20-latin-500italic.eot');
         /* IE9 Compat Modes */
         src: local(''),
             url('../fonts/roboto-v20-latin-500italic.eot?#iefix') format('embedded-opentype'),
             /* IE6-IE8 */
             url('../fonts/roboto-v20-latin-500italic.woff2') format('woff2'),
             /* Super Modern Browsers */
             url('../fonts/roboto-v20-latin-500italic.woff') format('woff'),
             /* Modern Browsers */
             url('../fonts/roboto-v20-latin-500italic.ttf') format('truetype'),
             /* Safari, Android, iOS */
             url('../fonts/roboto-v20-latin-500italic.svg#Roboto') format('svg');
         /* Legacy iOS */
     }

     /* roboto-500 - latin */
     @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 500;
         src: url('../fonts/roboto-v20-latin-500.eot');
         /* IE9 Compat Modes */
         src: local(''),
             url('../fonts/roboto-v20-latin-500.eot?#iefix') format('embedded-opentype'),
             /* IE6-IE8 */
             url('../fonts/roboto-v20-latin-500.woff2') format('woff2'),
             /* Super Modern Browsers */
             url('../fonts/roboto-v20-latin-500.woff') format('woff'),
             /* Modern Browsers */
             url('../fonts/roboto-v20-latin-500.ttf') format('truetype'),
             /* Safari, Android, iOS */
             url('../fonts/roboto-v20-latin-500.svg#Roboto') format('svg');
         /* Legacy iOS */
     }

     /* alegreya-900 - latin */
     @font-face {
         font-family: 'Alegreya';
         font-style: normal;
         font-weight: 900;
         src: url('../fonts/alegreya-v16-latin-900.eot');
         /* IE9 Compat Modes */
         src: local(''),
             url('../fonts/alegreya-v16-latin-900.eot?#iefix') format('embedded-opentype'),
             /* IE6-IE8 */
             url('../fonts/alegreya-v16-latin-900.woff2') format('woff2'),
             /* Super Modern Browsers */
             url('../fonts/alegreya-v16-latin-900.woff') format('woff'),
             /* Modern Browsers */
             url('../fonts/alegreya-v16-latin-900.ttf') format('truetype'),
             /* Safari, Android, iOS */
             url('../fonts/alegreya-v16-latin-900.svg#Alegreya') format('svg');
         /* Legacy iOS */
     }

     @media screen and (max-width: 1236px) {
         #sidebox {
             width: 120px;

         }

         #notice li {
             line-height: 30px;
         }

     }

     #enter {
         position: relative;
         top: -35px;
         left: 4%;
         color: black;
         text-align: left;
         font-family: 'Alegreya';
         font-style: normal;
         font-weight: 900;

     }

     #logo {
         position: relative;
         top: 12px;
     }

     #sidebox {
         text-align: left;
     }

     ul li {}

     div ul li:hover {
         background-color: white;
         text-decoration: none;
         box-shadow: 17px 17px 15px 0px;
         border-radius: 10px;

     }

     div ul li a {
         text-decoration: none;
         color: black;
         display: inline;
         padding: 5%;
         cell-spacing: 1%;
     }

     div ul li a:hover {
         text-decoration: none;
         color: black;
     }

     #col9 {
         border-radius: 0px 15px 15px 0px;
         padding: 25px;
         border: 2px solid black;
         height: 850px;
         width: 100px;
         background-color: #ebe9cc;
     }

     #notice {
         padding: 10px;
         height: 400px;
     }

     #notice li {
         line-height: 50px;
     }

     #notice1 {
         border-radius: 10px;
     }

     #cardhead {
         border-radius: 15px 15px 0px 0px;
         background-color: black;
         color: white;
     }

     #apply {

         transition: 0.8s;
     }

     #status {

         transition: 0.4s;
     }

     #approved {

         transition: 0.4s;
     }

     #rejected {

         transition: 0.4s;
     }

     #remaining {

         transition: 0.4s;
     }

     #ref {
         text-decoration: none;
         color: white;
     }

     #btn {
         position: relative;
         left: 93%;
         top: -125%;
     }

     tr th {
         text-align: center;
     }

     tr td {
         text-align: center;
     }

     #mask1 {
         font-size: 14pt;
     }
     </style>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script src='https://kit.fontawesome.com/a076d05399.js'></script>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>




     <script src="https://code.jquery.com/jquery-3.5.1.js"
         integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 </head>

 <!--Heading-->

 <body>
     <div class="container"
         style=" font-family: 'Roboto';font-style: italic;font-weight: 500; border-radius: 10px; background-image: linear-gradient(to top right, #ffffcc 0%, #999966 100%); padding-top: 10px;">
         <div class="row">
             <div class="col-md-3"></div>
             <div id="head" class="col-md-7">
                 <center><br><br>
                     <h1><b>Leave Approval Management</b></h1>
                     <br><br>
                 </center>
             </div>
             <div class="col-md-4"></div>

         </div>
     </div><br>
     <div class="container-fluid"
         style="background-color: #ebe9cc; height:10%; font-size:17px; font-family: 'Andada';font-style: normal;font-weight: 400;">
         <b><i id="logo" class='fas fa-id-card-alt' style='font-size:36px'></i>
             <h3 id="enter">
                 Hello:<br><?php echo $data1["firstname"];?>&nbsp;<?php echo $data1["middlename"];?>&nbsp;<?php echo $data1["lastname"];?>&nbsp;&nbsp;[<?php echo $data1["employee id"] ?>]
             </h3>
         </b>

         <button id="btn" class="btn btn-danger"><a id="ref" href="logout.php"><span class="iconify"
                     data-icon="fa-sign-out" data-inline="false"></span>&nbsp;&nbsp;Logout</a></button>
     </div>
     <br>

     <!--main block-->
     <div class="container-fluid" style=" font-size:17px; font-family: 'Andada';font-style: normal;font-weight: 400;">

         <div class="row" style="padding:10px; ">

             <div class="col-md-3"
                 style=" border-radius: 15px 0px 0px 15px; border: 2px solid black; height:850px; width: 100px; background-color: #ebe9cc">


                 <div>

                     <br>
                     <ul>
                         <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" href="#apply"
                                 name="apply" data-toggle="collapse"><i class='far fa-file-alt'
                                     style='font-size:24px'></i> &nbsp;&nbsp;&nbsp;Apply for Leave </a> </li>
                         <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" href="#status"
                                 data-toggle="collapse"><i class='far fa-clock' style='font-size:24px'></i>
                                 &nbsp;&nbsp;&nbsp;Leave History </a></li>
                         <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" href="#remaining"
                                 data-toggle="collapse"><i class='fas fa-stream' style='font-size:24px'></i>
                                 &nbsp;&nbsp;&nbsp;Remaining Leaves </a> </li>
                         <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" href="#myprofile"
                                 data-toggle="collapse"><i class='fas fa-users' style='font-size:24px'></i>
                                 &nbsp;&nbsp;&nbsp;My Profile </a></li>
                         <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" href="#changepwd"
                                 name="changepwd" data-toggle="collapse"><i class="material-icons"
                                     style='font-size:30px;'>&#xe90d;</i> &nbsp;&nbsp;&nbsp;Change Password </a></li>
                     </ul>
                     </center>
                 </div><br>
                 <div id="notice1" class="card">
                     <div id="cardhead" class="card-header">
                         <center>
                             <h5>Notice</h5>
                         </center>
                     </div>
                     <marquee direction="up" S>
                         <div id="notice" class="card-body">
                             <ol>
                                 <li> THIS IS NOTICE NO. 1</li>
                                 <li> THIS IS NOTICE NO. 2</li>
                                 <li> THIS IS NOTICE NO. 3</li>
                                 <li> THIS IS NOTICE NO. 4</li>
                                 <li> THIS IS NOTICE NO. 5</li>
                                 <li> THIS IS NOTICE NO. 6</li>
                                 <li> THIS IS NOTICE NO. 7</li>
                                 <li> THIS IS NOTICE NO. 8</li>
                                 <li> THIS IS NOTICE NO. 9</li>
                                 <li> THIS IS NOTICE NO. 10</li>
                                 <li> THIS IS NOTICE NO. 11</li>
                                 <li> THIS IS NOTICE NO. 12</li>
                             </ol>
                         </div>
                     </marquee>
                 </div>
             </div>






             <div id="col9" class="col-md-9">

                 <div id="accordion">

                     <center>
                         <div id="remaining" class="card collapse" data-parent="#accordion"
                             style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; height:850px; margin-top: 0px;  text-align: left; padding-left: 10px; background-color:white;"
                             class="class-control"><br>
                             <h3>
                                 <center>
                                     You have 25 Remaing leaves ||
                                 </center>
                             </h3>
                         </div>
                         <center>
                             <div id="myprofile" class="card collapse" data-parent="#accordion"
                                 style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; height:850px; margin-top: 0px;  text-align: left; padding-left: 10px; background-color:white;"
                                 class="class-control"><br>



                                 <div class="card-content" style="width:100%;">
                                     <span class="card-title" style="font-size:25px;">Profile Page</span>
                                     <div class="row">
                                         <form class="col s12" name="signin" method="post"><br>



                                             <div class="input-field col m6 s12">
                                                 <b>
                                                     <h5 style="color:black;">Your First Name-
                                                 </b></h5></label>
                                                 <input id="mask1" type="text" value="<?php echo $data1["firstname"];?>"
                                                     name="firstname" class="validate" autocomplete="off" required>
                                             </div>

                                             <div class="input-field col m6 s12">
                                                 <b>
                                                     <h5 style="color:black;">Your Middle Name-
                                                 </b></h5></label>
                                                 <input id="mask1" type="text"
                                                     value="<?php echo $data1["middlename"];?>" name="middlename"
                                                     class="validate" autocomplete="off" required>
                                             </div>

                                             <div class="input-field col m6 s12">
                                                 <b>
                                                     <h5 style="color:black;">Your Last Name-
                                                 </b></h5></label>
                                                 <input id="mask1" type="text" value="<?php echo $data1["lastname"];?>"
                                                     name="lastname" class="validate" autocomplete="off" required>
                                             </div>

                                             <div class="input-field col m6  s12">
                                                 <b>
                                                     <h5 style="color:black;">Your Employee ID-
                                                 </b></h5></label>
                                                 <input id="mask1" type="text"
                                                     value="<?php echo $data1["employee id"];?>" name="empid"
                                                     class="validate" autocomplete="off" required>
                                             </div>


                                             <div class="input-field col s12">
                                                 <b>
                                                     <h5 style="color:black;">Your Email id-
                                                 </b></h5></label>
                                                 <input id="mask1" type="email" value="<?php echo $data1["email"];?>"
                                                     name="email" class="validate" autocomplete="off" required>

                                             </div>

                                             <div class="input-field col s12">
                                                 <b>
                                                     <h5 style="color:black;">Your Address-
                                                 </b></h5></label>
                                                 <input id="mask1" name="address"
                                                     value="<?php echo $data1["address"];?>" type="text"
                                                     autocomplete="off" required>
                                             </div>

                                             <div class="input-field col m6  s12">
                                                 <b>
                                                     <h5 style="color:black;">Your contact-
                                                 </b></h5></label>
                                                 <input id="mask1" type="text" value="<?php echo $data1["contact"];?>"
                                                     name="contact" class="validate" autocomplete="off" required>
                                             </div>


                                             <div class="input-field col m6 s12">
                                                 <b>
                                                     <h5 style="color:black;">Your City/Town-
                                                 </b></h5></label>
                                                 <input id="mask1" name="city" value="<?php echo $data1["city"];?>"
                                                     type="text" autocomplete="off" required>
                                             </div>



                                             <center>
                                                 <div class="input-field col s12">
                                                     <button type="submit" name="updatebtn" onclick="return valid();"
                                                         id="add"
                                                         class="waves-effect waves-light btn indigo m-b-xs">Update</button>

                                                 </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div id="changepwd" class="card collapse" data-parent="#accordion"
                                 style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; height:850px; margin-top: 0px;  text-align: left; padding-left: 10px; background-color:white;"
                                 class="class-control"><br>

                                 <div class="card-content">

                                     <form
                                         style="font-family: 'Andada';font-style: normal;font-weight: 400; margin-bottom:5%;"
                                         id="" name="form" method="post">

                                         <div class="input-field col s12 form-group">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Your Current Password-
                                                 </b></h5></label>
                                             <input placeholder="******" id="curpwd" name="currentpwd" type="Password"
                                                 class="form-control validate" required>

                                         </div>

                                         <div class="input-field col s12 form-group">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">New Password-
                                                 </b></h5></label>
                                             <input placeholder="******" id="npwd" name="newpwd" type="Password"
                                                 class="form-control validate" required>

                                         </div>

                                         <div class="input-field col s12 form-group">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Confirm Password-
                                                 </b></h5></label>
                                             <input placeholder="******" id="conpwd" name="confirmpwd" type="Password"
                                                 class="form-control validate" required>
                                             <input type="checkbox" id="show-passwords" onclick="myFunction()">
                                             <label for="show-passwords">
                                                 <h5 style="color:black;">Show Password</h5>
                                             </label>
                                         </div>


                                         <div>
                                             <center><button type="submit" class="btn btn-success" name="pwdbtn">Change
                                                     Password</button></center>
                                         </div>
                                 </div>

                                 </form>

                             </div>

                             <center>
                                 <div id="apply" class="collapse" data-parent="#accordion"
                                     style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; height:850px; margin-top: 0px;  text-align: left; padding-left: 10px; background-color:white;">
                                     <br><br>
                                     <form
                                         style="font-family: 'Andada';font-style: normal;font-weight: 400; margin-bottom:5%;"
                                         id="" name="form" method="post">

                                         <div class="input-field col s12">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Your Name-
                                                 </b></h5></label>
                                             <input placeholder="" id="mask1" name="firstname"
                                                 value="<?php echo $data1["firstname"];?>&nbsp;<?php echo $data1["middlename"];?>&nbsp;<?php echo $data1["lastname"];?>"
                                                 type="text" readonly>
                                         </div>

                                         <div class="input-field col s12">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Employee ID-
                                                 </b></h5></label>
                                             <input placeholder="" id="mask1" name="empid"
                                                 value="<?php echo $data1["employee id"];?>" type="text" readonly>
                                         </div>

                                         <div class="input-field col s12">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Leave Date
                                                 </b></h5></label>
                                             <input placeholder="" id="mask1" name="leave" type="date"
                                                 data-inputmask="'alias': 'date'" required>
                                         </div>

                                         <div class="input-field col s12">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Rejoin Date
                                                 </b></h5></label>
                                             <input placeholder="" id="mask1" name="rejoin" type="date"
                                                 data-inputmask="'alias': 'date'" required>
                                         </div>



                                         <div class="input-field col s12">
                                             <label for="fromdate" class="active"><b>
                                                     <h5 style="color:black;">Type Leave-
                                                 </b></h5></label>
                                             <input placeholder="" id="mask1" name="subject" type="text" required>
                                         </div>


                                         <div class="input-field col m12 s12">
                                             <label for="Details" class="active"><b>
                                                     <h5 style="color:black;">Description
                                                 </b></h5></label>
                                             <textarea id="mask1" name="detail" class="materialize-textarea"
                                                 length="500" required></textarea>
                                         </div>


                                         <div>
                                             <center><button type="submit" class="btn btn-success"
                                                     name="submit">Submit</button></center>
                                         </div>
                                         <div>
                                             <br><br>
                                             <div>
                                     </form>
                                 </div>
                             </center>


                             <center>
                                 <div id="status" class="card collapse" data-parent="#accordion"
                                     style=" box-shadow:17px 17px 15px 0px ; width: 80%; height:850px; margin-top: 0px; text-align: left; padding-left: 10px;"
                                     class="class-control">

                                     <div class="card-content">

                                         <table class="display responsive-table">
                                             <thead>
                                                 <tr class="class-control" style=" padding:0px 30px;">

                                                     <th>Sr no</th>
                                                     <th>Leave Type</th>
                                                     <th>Leave Date</th>
                                                     <th>Description</th>
                                                     <th>Status</th>
                                                     <th>Admin Remark</th>
                                                     <th>Admin Action Taken Details</th>

                                                 </tr>
                                             </thead>
                                             <?php
              if(mysqli_num_rows($result3) > 0)
            {
                
               while($data3 = mysqli_fetch_array($result3))
                {
                    if($data1['employee id']==$data3['employee id'])
                {  
?>
                                             <tbody>
                                                 <tr>
                                                     <td><?php echo $data3['id'];?></td>
                                                     <td><?php echo $data3['subject'];?></td>
                                                     <td>From <?php echo $data3['leave'];?> to
                                                         <?php echo $data3['rejoin'];?> </td>
                                                     <td> <?php echo $data3['detail'];?></td>
                                                     <td><?php $stats=$data3['status']; 
if($stats==1){
?>
                                                         <span style="color: green">Approved</span>
                                                         <?php } if($stats==2)  { ?>
                                                         <span style="color: red">Not Approved</span>
                                                         <?php } if($stats==0)  { ?>
                                                         <span style="color: blue">waiting for approval</span>
                                                         <?php } ?>
                                                     </td>
                                                     <td><?php echo $data3['admin_desp'];?></td>
                                                     <td><?php echo $data3['admin_action_time'];?></td>


                                                 </tr>

                                                 <?php
                }
                }
            }
            ?>
                                             </tbody>


                                     </div>

                                     <center>


                                     </center>
                                 </div>
                 </div>
             </div>
         </div>

 </body>

 </html>
 <script>
var checkbox = document.querySelector('input#show-passwords');

// Convert NodeList to an Array -- forEach has no IE support on NodeLists
var passwordFields = Array.prototype.slice.call(document.querySelectorAll('[type=password]'));

checkbox.addEventListener('click', function(event) {
    passwordFields.forEach(function(passwordField) {
        passwordField.type = checkbox.checked ? 'text' : 'password';
    });
}, false);
 </script>


 <div id="article">
     <?php  /*  <h1>Welcome :</h1>
                 <p>
				A leave management system provides an easy way for human resources or management to administer leave, granting the ability to setup a standard leave scheme or customizes it per employee, which in Durban, where people have more than one job allocated to them, their job would be made easy. </p>
                The leave management system will automatically deduct leave, take and add leave accumulated according to number of days giving within a determined period in accordance with the company’s leave policy.Having a detailed record of leave is essential for different departments in Durban companies and highlights the leave managements system’s ability to keep a history of leave means details and specific reports can be drawn to identify employees personally, that perhaps are consistently going over their allocated leave or that workaholic that has accumulated too much leave. The data in the leave management system can also be extracted and used to speed up the running of payroll or wages in a company.</p>
                <p>A leave management system automates the entire process revolved around leave within a company, saving time and resources by letting employees focus on the important tasks before them and eliminating the traditional need to record and file leave documents. With the business world being so competitive in Durban, this could save valuable time for other projects.
 */?>
     </p>
 </div>