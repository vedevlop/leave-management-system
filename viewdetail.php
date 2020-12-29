<?php
include "dbconnect.php";

$id = $_GET["aid"];
$id2 = $_GET["rid"];

  $qry = "SELECT * FROM `apply` where id=$id"; 
   $qry2 = "SELECT * FROM `register` where id='$id2'"; 

$result = mysqli_query($connect , $qry);
$result2 = mysqli_query($connect , $qry2);
?>

<?php
    

    if(isset($_POST["update"]))
{

        $op = $_POST["status"];
        $desp = $_POST["description"];
        date_default_timezone_set('Asia/Kolkata');
        $admincurrentdate = date("d-m-Y G:i:s");

        $qry3 = "UPDATE `apply` SET `status`='$op',`admin_desp`='$desp',`admin_action_time`='$admincurrentdate'  WHERE id=$id";
        $result3 = mysqli_query($connect,$qry3);
        /* header("Refresh:0"); */
        header("location:adminmanage.php");

}

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

/* archivo-narrow-700 - latin */
@font-face {
    font-family: 'Archivo Narrow';
    font-style: normal;
    font-weight: 700;
    src: url('../fonts/archivo-narrow-v12-latin-700.eot');
    /* IE9 Compat Modes */
    src: local(''),
        url('../fonts/archivo-narrow-v12-latin-700.eot?#iefix') format('embedded-opentype'),
        /* IE6-IE8 */
        url('../fonts/archivo-narrow-v12-latin-700.woff2') format('woff2'),
        /* Super Modern Browsers */
        url('../fonts/archivo-narrow-v12-latin-700.woff') format('woff'),
        /* Modern Browsers */
        url('../fonts/archivo-narrow-v12-latin-700.ttf') format('truetype'),
        /* Safari, Android, iOS */
        url('../fonts/archivo-narrow-v12-latin-700.svg#ArchivoNarrow') format('svg');
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

#cancle a:hover {
    color: white;
}

#cancle a {
    color: white;
}

.modal.fade .modal-dialog {
    -webkit-transform: translate(0, 100%);
    -ms-transform: translate(0, 100%);
    -o-transform: translate(0, 100%);
    transform: translate(0, 100%);
}
</style>

<body
    style="background-color: #ebe9cc; background-repeat:no-repeat;  background-size: auto; font-family:'Roboto'; font-style:italic; font-weight: 500; ">

    <br><br>
    <div class="card"
        style=" width:70%;  font-size:20px; font-family: 'Andada'; font-style: normal; font-weight: 400;  margin-left:15%;">
        <div class="card-content">

            <table class="display responsive-table">
                <thead>
                    <tr class="class-control" style=" padding:0px 30px;">

                        <div class="card-content" style="width:100%;">
                            <center><span class="card-title"
                                    style="font-size:35px; font-family: 'Archivo Narrow'; font-style: normal; font-weight: 700;">Employee
                                    Details</span>
                            </center>
                            <div class="row">
                                <div class="col s12" name="signin"><br><br>

                                    <?php
                                           $row = mysqli_fetch_assoc($result);
                                           
                                            $row2 = mysqli_fetch_assoc($result2);
                                            
                                          
                                           ?>

                                    <div class="input-field col m6 s12">
                                        <b> Employee Name : </b><?php echo $row['name'];?>
                                    </div>


                                    <div class="input-field col m6 s12">
                                        <b>Gender :</b><?php echo $row2['gender'];?>
                                    </div>


                                    <div class="input-field col m6 s12">
                                        <b>Email :</b><?php echo $row2['email'];?>
                                    </div>


                                    <div class="input-field col m6 s12">
                                        <b>Contact :</b><?php echo $row2['contact'];?>
                                    </div>

                                    <div class="input-field col s12">
                                        <b> Address :</b><?php echo $row2['address'];?>
                                    </div>

                                    <div class="input-field col m6 s12">
                                        <b>City/Town :</b><?php echo $row2['city'];?>
                                    </div>


                                    <div class="input-field col s12">
                                        <b>Employe Leave Date: From
                                        </b><?php echo $row['leave'];?>&nbsp;<b>to</b>&nbsp;<?php echo $row['rejoin'];?>
                                    </div>

                                    <div class="input-field col s12">
                                        <b>Employe Leave Description :</b><?php echo $row['detail'];?>
                                    </div>

                                    <div class="input-field col s12">
                                        <b>Leave Type :</b><?php echo $row['subject'];?>
                                    </div>

                                    <div class="input-field col s12">
                                        <b>Status :</b>

                                        <?php $stats=$row['status']; 
                                                                if($stats==1){
                                                                ?>
                                        <span style="color: green">Approved</span>
                                        <?php } if($stats==2)  { ?>
                                        <span style="color: red">Not Approved</span>
                                        <?php } if($stats==0)  { ?>
                                        <span style="color: blue">waiting for approval</span>
                                        <?php } ?>


                                    </div>

                                    <div class="input-field col s12">
                                        <b>Description by admin :</b> <?php echo $row['admin_desp'];?></b>
                                    </div>


                                    <div class="input-field col s12">
                                        <b>Admin Action taken date : </b> <?php echo $row['admin_action_time']; ?></b>
                                    </div>








                                    <td id=btndtl>
                                        <form method="post">
                                            <button style="text-decoration:none;" id="action" class="btn btn-info "
                                                name="action" data-target="#demo" data-toggle="modal">Take
                                                Action</button></a>
                                            <button style="text-decoration:none; " id="cancle" class="btn btn-danger "
                                                name="cancel"><a href="adminmanage.php">Cancel</button></a>


                                            <div class="modal modal-trigger" id="demo"
                                                style="width:55%; height:80%; border-radius:2%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <b>Take Action</b>
                                                    </div>
                                                    <br>
                                                    <div class="modal-body">
                                                        <select class="form-control" name="status" required="">
                                                            <option value=""><b>Choose your option</b></option>
                                                            <option value="1"><b>Approved</b></option>
                                                            <option value="2"><b>Not Approved</b></option>
                                                        </select></p>
                                                        <br>
                                                        <p><textarea id="textarea1" name="description"
                                                                class="materialize-textarea" name="description"
                                                                placeholder="Description" length="500" maxlength="500"
                                                                required></textarea></p>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <button id="submit" style=" width:10%; margin-left:5%;"
                                                            class="btn btn-success" name="update"
                                                            value="Submit">Submit</button>&nbsp;&nbsp;
                                                        <button id="cancle" style="color:white; width:11%;"
                                                            data-dismiss="modal" class="btn btn-danger" name="cancel"
                                                            value="Cancle"><a href="adminmanage.php">Cancle</a></button>
                                                    </div>