<?php
    session_start();
    if(!isset($_SESSION["uid"]))
    {
        header("location: adminlogin.php");
    }
?>

<?php
    



    include 'dbconnect.php';
    
    $qry = "SELECT * FROM `apply` ORDER BY id desc";
     $qry2 = "SELECT * FROM `register`";
    $result = mysqli_query($connect, $qry);
     $result2 = mysqli_query($connect, $qry2); 

   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

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
</head>

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

.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}

.succWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}

th {
    padding: 5px;
    text-align: center;
}

tr td {
    padding: 5px;
    text-align: center;
}

tr td a {
    text-decoration: none;
    color: black;
}

tr td a:hover {
    text-decoration: none;
    color: green;
}

#date {
    width: 10%;
}

#fullname {
    width: 32%;
}

#type {
    width: 15%;
}

#id {
    width: 3.5%;
}

#btndtl {
    width: 12%;
}

#demo {
    transition-v: 2s;
}

#view a {
    color: white;
}

#view a:hover {
    color: white;
}

#btn {
    position: relative;
    left: 92%;
    top: -80%;
}

#sidebox {
    text-align: left;
    position: relative;
    top: 1px;
    left: 5%;
}

div ul li {
    display: inline-block;
    text-size: 36px;
    height: 1%;
}

div ul li a {
    color: black;
    text-size: 36px;
}

div ul li a:hover {
    background-color: white;
    ;
    text-decoration: none;
    border-radius: 5px;
    color: black;

}

#btn:hover {
    text-decoration: none;
    color: white;
}

.modal.fade .modal-dialog {
    -webkit-transform: translate(0, 100%);
    -ms-transform: translate(0, 100%);
    -o-transform: translate(0, 100%);
    transform: translate(0, 100%);
}

#icon0 {
    position: relative;
    top: 5px;
}

#cancel a:hover {
    text-decoration: none;
    color: white;
}
</style>

<body
    style="background-color: #ebe9cc; background-repeat:no-repeat;  background-size: auto; font-family:'Roboto'; font-style:italic; font-weight: 500; ">
    <div class="container"
        style=" border-radius: 10px; background-image: linear-gradient(to top right, #ffffcc 0%, #999966 100%); padding-top: 10px;">
        <div class="row">
            <div class="col-md-3">&copy; Vedevelops pvt.ltd</div>
            <div id="head" class="col-md-7">
                <center><br><br>
                    <h1><b>Leave Approval Management</b></h1>
                    <br><br>
                </center>

            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
    <br>
    <div class="container-fluid" style="background-color:white; height:10%;">
        <ul>
            <li style="height:5px;" class="no-padding" id="sidebox"><a class="waves-effect waves-grey"
                    data-target="#myprofile" data-toggle="modal">&nbsp;&nbsp;&nbsp;<h4><i class='fas fa-users'
                            id="icon0" style='font-size:24px'></i> &nbsp;<span style="position:relative; top:5px;">My
                            Profile </span>&nbsp;&nbsp;&nbsp; </h4></a></li> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <li class="no-padding" id="sidebox"><a class="waves-effect waves-grey" data-target="#changepwd"
                    data-toggle="modal">&nbsp;&nbsp;&nbsp;<h4><i class="material-icons" id="icon0"
                            style='font-size:30px;'>&#xe90d;</i> Change Password &nbsp;&nbsp;&nbsp;</h4></a></li>
        </ul>
        </h4><button id="btn" class="btn btn-danger"><a style="text-decoration:none; color:white;" id="ref"
                href="logoutadmin.php"><span class="iconify" data-icon="fa-sign-out"
                    data-inline="false"></span>&nbsp;&nbsp;Logout</h4></a></button>
    </div>
    <center><br><br><br>
        <div class="card"
            style=" width:90%;  font-size:20px; font-family: 'Andada'; font-style: normal; font-weight: 400;">
            <div class="card-content">

                <table class="display responsive-table">
                    <thead>
                        <tr class="class-control" style=" padding:0px 30px;">

                            <th>Sr no</th>
                            <th>Name of Applicant</th>
                            <th>Employee ID </th>
                            <th>Leave Type</th>
                            <th>Leave Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <?php

               
           
            if( mysqli_num_rows($result) > 0 )
            {
                $sr = 1;
                 while($row = mysqli_fetch_array($result))  
                    {
            ?>
                    <tbody>
                        <tr>
                            <td><b><?php echo $sr ?></b></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['employee id'];?></td>
                            <td><?php echo  $row['subject'];?></td>
                            <td> From &nbsp;<b><?php echo  $row['leave'];?></b> &nbsp; To &nbsp;
                                <b><?php echo  $row['rejoin'];?></b>
                            </td>
                            <td><?php $stats=$row['status']; 
if($stats==1){
?>
                                <span style="color: green">Approved</span>
                                <?php } if($stats==2)  { ?>
                                <span style="color: red">Not Approved</span>
                                <?php } if($stats==0)  { ?>
                                <span style="color: blue">waiting for approval</span>
                                <?php } ?>


                            </td>

                            <?php

    $eid = $row["employee id"];
$qryr = "SELECT * FROM `register` WHERE `employee id`='$eid'";
$resultr = mysqli_query($connect,$qryr);
$datar = mysqli_fetch_assoc($resultr);
     ?>


                            <td id=btndtl>
                                <button id="view" style="text-decoration:none;" class="btn btn-info" name="detail">
                                    <a href="viewdetail.php?aid=<?php echo $row['id']?>&&rid=<?php echo $datar['id']?>">View
                                        Details</a>
                                </button>
                            </td>

                            <?php
                 $sr++; }
            
             }
            ?>
            </div>
        </div>


        </table>

        <div class="modal modal-trigger" id="changepwd"
            style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 800px; height:100%; margin-top:                                      56px;  text-align: left; padding-left: 10px; background-color:#ebe9cc;"
            class="class-control"><br>

            <div class="card-content">
                <form style="font-family: 'Andada';font-style: normal;font-weight: 400; margin-bottom:5%;" id=""
                    name="form" method="post">


                    <div class="input-field col s12 form-group">
                        <label for="fromdate" class="active"><b>
                                <h5 style="color:black;">Your Current Password-
                            </b></h5></label>
                        <input placeholder="******" id="curpwd" name="currentpwd" type="Password"
                            class="form-control validate" required>
                    </div><br>

                    <div class="input-field col s12 form-group">
                        <label for="fromdate" class="active"><b>
                                <h5 style="color:black;">New Password-
                            </b></h5></label>
                        <input placeholder="******" id="npwd" name="newpwd" type="Password"
                            class="form-control validate" required>
                    </div><br>


                    <div class="input-field col s12 form-group">
                        <label for="fromdate" class="active"><b>
                                <h5 style="color:black;">Confirm Password-
                            </b></h5></label>
                        <input placeholder="******" id="conpwd" name="coinfirmpwd" type="Password"
                            class="form-control validate" required>
                        <input type="checkbox" id="show-passwords" onclick="myFunction()">
                        <label for="show-passwords">
                            <h5 style="color:black;">Show Password</h5>
                        </label>
                    </div>



                    <center><button type="submit" class="btn btn-success" name="submit">Change Password</button>
                        <button id="cancle" class="btn btn-danger " name="cancel"><a
                                style="text-decoration:none; color:white; " href="adminmanage.php">Cancel</button></a>
                    </center>

            </div>

            </form>

        </div>

        </div>


        <div id="myprofile" class="modal modal-trigger"
            style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; max-height:100% !important; margin-top: 0px;  text-align: left; padding-left: 10px; background-color:white;"
            class="class-control"><br>



            <div class="card-content" style="width:100%;">
                <span class="card-title" style="font-size:25px;">Profile Page</span>
                <div class="row">
                    <form class="col s12" name="signin" method="post"><br>




                        <div class="input-field col m6 s12">
                            <b>
                                <h5 style="color:black;">Your First Name-
                            </b></h5></label>
                            <input id="mask1" type="text" value="<?php echo $data1["firstname"];?>" name="firstname"
                                class="validate" autocomplete="off" required>
                        </div>

                        <div class="input-field col m6 s12">
                            <b>
                                <h5 style="color:black;">Your Middle Name-
                            </b></h5></label>
                            <input id="mask1" type="text" value="<?php echo $data1["middlename"];?>" name="middlename"
                                class="validate" autocomplete="off" required>
                        </div>

                        <div class="input-field col m6 s12">
                            <b>
                                <h5 style="color:black;">Your Last Name-
                            </b></h5></label>
                            <input id="mask1" type="text" value="<?php echo $data1["lastname"];?>" name="Lastname"
                                class="validate" autocomplete="off" required>
                        </div>

                        <div class="input-field col m6  s12">
                            <b>
                                <h5 style="color:black;">Your Employee ID-
                            </b></h5></label>
                            <input id="mask1" type="text" value="<?php echo $data1["employee id"];?>" name="empid"
                                class="validate" autocomplete="off" required>
                        </div>


                        <div class="input-field col s12">
                            <b>
                                <h5 style="color:black;">Your Email id-
                            </b></h5></label>
                            <input id="mask1" type="email" value="<?php echo $data1["email"];?>" name="email"
                                class="validate" autocomplete="off" required>

                        </div>

                        <div class="input-field col s12">
                            <b>
                                <h5 style="color:black;">Your Address-
                            </b></h5></label>
                            <input id="mask1" name="address" value="<?php echo $data1["address"];?>" type="text"
                                autocomplete="off" required>
                        </div>

                        <div class="input-field col m6  s12">
                            <b>
                                <h5 style="color:black;">Your contact-
                            </b></h5></label>
                            <input id="mask1" type="text" value="<?php echo $data1["contact"];?>" name="contact"
                                class="validate" autocomplete="off" required>
                        </div>


                        <div class="input-field col m6 s12">
                            <b>
                                <h5 style="color:black;">Your City/Town-
                            </b></h5></label>
                            <input id="mask1" name="city" value="<?php echo $data1["city"];?>" type="text"
                                autocomplete="off" required>
                        </div>


</body>

</html>