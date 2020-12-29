<?php


if(isset($_POST["registerbtn"]))
{
include("dbconnect.php");
$fn = $_POST["firstname"];
$mn = $_POST["middlename"];
$ln = $_POST["Lastname"];
$dob =  $_POST["dob"];
$eid =  $_POST["email"];
$pwd =  $_POST["password"];
$cn =  $_POST["contact"];
$add = $_POST["address"];
$gn =  $_POST["gender"];
$city = $_POST["city"];
$empid = $_POST["empid"];

$qry = "INSERT INTO `register`(`id`, `firstname`, `middlename`, `lastname`, `dob`, `email`, `pwd`, `employee id`, `address`, `contact`, `city`, `gender`)
               VALUES (NULL,'$fn','$mn','$ln','$dob','$eid','$pwd','$empid','$add','$cn','$city','$gn')";

$result = mysqli_query($connect,$qry);
if($result)
{
    ?> <script>
alert("Registered Successfully ||");
window.location.href = "login.php";
</script> <?php
}
else
{
	echo "failed";
}


}
?>
<!DOCTYPE html>
<html>
<title>Register Page</title>
<meta charset="UTF-8">

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
::placeholder {
    color: black;
}

#gender {
    color: black;
}
</style>

<!-- Top bar Menu Section-->

<body style="background-color:lightblue; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top:0%; margin-left:-5%;">
                <div class="card"
                    style="box-shadow:18px 17px 9px -7px #494949; width:130%; background-color:darkgrey;background-image: linear-gradient(to-left,315deg, #ffeaa7 0%, #000000 74%);">


                    <div class="card-content" style="width:100%;">
                        <span class="card-title" style="font-size:20px;">Register Page</span>
                        <div class="row">
                            <form class="col s12" name="signin" method="post">

                                <div class="input-field col m6 s12">
                                    <input id="username" type="text" placeholder="Enter Firstname" name="firstname"
                                        class="validate" autocomplete="off" required>
                                </div>

                                <div class="input-field col m6 s12">
                                    <input id="username" type="text" placeholder="Enter middlename" name="middlename"
                                        class="validate" autocomplete="off" required>
                                </div>

                                <div class="input-field col s12">
                                    <input id="username" type="text" placeholder="Enter Lastname" name="Lastname"
                                        class="validate" autocomplete="off" required>
                                </div>

                                <div class="input-field col m6 s12">
                                    <p style="color:black;">Birthdate :</p>
                                    <input style="color:lightgrey;" placeholder="00/00/0000" id="birthdate" name="dob"
                                        value="DOMstring" type="date" class="datepicker" autocomplete="off">
                                </div>


                                <div class="input-field col m6  s12"><br>
                                    <input id="username" type="text" placeholder="Enter Your Employee ID" name="empid"
                                        class="validate" autocomplete="off" required>
                                </div>


                                <div class="input-field col s12">
                                    <input id="username" type="email" placeholder="Enter email id" name="email"
                                        class="validate" autocomplete="off" required>

                                </div>
                                <div class="input-field col s12">
                                    <input id="username" type="password" placeholder="Enter password" name="password"
                                        class="validate" autocomplete="off" required>

                                </div>


                                <div class="input-field col s12">
                                    <input id="address" name="address" placeholder="Address" type="text"
                                        autocomplete="off" required>
                                </div>

                                <div class="input-field col m6  s12">
                                    <input id="username" type="text" placeholder="Enter contact" name="contact"
                                        class="validate" autocomplete="off" required>
                                </div>


                                <div class="input-field col m6 s12">
                                    <input id="city" name="city" placeholder="City/Town" type="text" autocomplete="off"
                                        required>
                                </div>


                                <div class="input-field col s12">
                                    <label id="gender">Gender</label> <br>
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label id="gender" for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label id="gender" for="female">Female</label>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label id="gender" for="other">Other</label> <br><br>
                                </div>





                                <div class="input-field col s12">
                                    <button type="submit" name="registerbtn" onclick="return valid();" id="add"
                                        class="waves-effect waves-light btn indigo m-b-xs">Submit</button>

                                </div>
                            </form>

                            <p>&nbsp;&nbsp;&nbsp;&nbsp; Already have an account? <a href="login.php">Login / Sign In</a>

                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>





</body>

</html>