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

    <center>
        <div id="changepwd"
            style=" box-shadow:17px 17px 15px 0px ; border-radius:15px; width: 600px; height:850px; margin-top:                                      0px;  text-align: left; padding-left: 10px; background-color:white;"
            class="class-control"><br>

            <div class="card-content"><br><br><br><br><br><br><br>

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
                    </div><br>


                    <div>
                        <center><button type="submit" class="btn btn-success" name="submit">Change Password</button>
                        </center>
                    </div>
            </div>

            </form>

        </div>

        </div>


</body>

</html>