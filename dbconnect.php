<?php

$servername = 'sql313.epizy.com';
$mysqlname = 'epiz_27231970';
$pass = '1LqqWDZJuFma';
$dbname = 'epiz_27231970_leavemanage';

$connect = mysqli_connect($servername, $mysqlname, $pass, $dbname);
if($connect)
{
   
}
else{
    echo "DB NOT CONNECTED!!";
}
?>