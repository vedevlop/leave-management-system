<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

// code for action taken on leave
if(isset($_POST['update']))
{ 
$did=intval($_GET['leaveid']);
$description=$_POST['description'];
$status=$_POST['status'];   
date_default_timezone_set('Asia/Kolkata');
$admremarkdate=date('Y-m-d G:i:s ', strtotime("now"));
$sql="update tblleaves set AdminRemark=:description,Status=:status,AdminRemarkDate=:admremarkdate where id=:did";
$query = $dbh->prepare($sql);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':admremarkdate',$admremarkdate,PDO::PARAM_STR);
$query->bindParam(':did',$did,PDO::PARAM_STR);
$query->execute();
$msg="Leave updated Successfully";
}



 ?>




<html>

<body>
    <h1>
        <?php 
if($stats==0)
{

?>
        <tr>
            <td colspan="5">
                <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Take&nbsp;Action</a>
                <form name="adminaction" method="post">
                    <div id="modal1" class="modal modal-fixed-footer" style="height: 60%">
                        <div class="modal-content" style="width:90%">
                            <h4>Leave take action</h4>
                            <select class="browser-default" name="status" required="">
                                <option value="">Choose your option</option>
                                <option value="1">Approved</option>
                                <option value="2">Not Approved</option>
                            </select></p>
                            <p><textarea id="textarea1" name="description" class="materialize-textarea"
                                    name="description" placeholder="Description" length="500" maxlength="500"
                                    required></textarea></p>
                        </div>
                        <div class="modal-footer" style="width:90%">
                            <input type="submit" class="waves-effect waves-light btn blue m-b-xs" name="update"
                                value="Submit">
                        </div>

                    </div>

            </td>
        </tr>
        <?php } ?>

    </h1>
</body>

</html>