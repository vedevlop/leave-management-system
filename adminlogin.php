<?php
session_start();
if(isset($_SESSION["uid"]))
{
     header("location: adminmanage.php");
}
?>
<?php
if(isset($_POST["loginbtn"]))
{
include("dbconnect.php");

$eid = $_POST["email"];
$pwd = $_POST["password"];

$qry = "SELECT * FROM `register` WHERE email='$eid' AND pwd='$pwd'";

$result = mysqli_query($connect, $qry); 

$row = mysqli_num_rows($result);

if($row>0)
{
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    session_start();
    $_SESSION["uid"] = $id;
    if( $_SESSION["uid"] )
    {
    header("location: adminmanage.php");
    }
}
else
{
	?><script>
alert("Invalid Username or Password");
</script><?php
}







}
?>
<!DOCTYPE html>
<html>

<head>

    <title> Login Form </title>

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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    #border {

        padding: 20px;
        width: 120%;
        margin-left: -5%;
        background-color: lightgrey;
        border: 2px solid black;
        border-radius: 10px;
    }

    #back {
        background-color: lightblue;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
    }
    </style>
</head>

<body id="back">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5"><br><br><br>
                <div class="card white darken-1" style="width:130%; ">

                    <div class="card-content" style="width:100%;">
                        <span class="card-title" style="font-size:20px;">Admin Login</span>
                        <div class="row">
                            <form class="col s12" name="signin" method="post">
                                <div class="input-field col s12">
                                    <input id="username" type="text" placeholder="Email ID" name="email"
                                        class="validate" autocomplete="off" required>

                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" placeholder="Password" class="validate"
                                        name="password" autocomplete="off" required>

                                </div>
                                <div class="col s12 right-align m-t-sm">

                                    <a href="./leave/leavemanage.php"><input type="submit" name="loginbtn"
                                            value="Sign in" class="waves-effect waves-light btn teal"></a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>

</body>

</html>