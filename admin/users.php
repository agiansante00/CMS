<!DOCTYPE html>
<html lang="en">
<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "../includes/functions.php"; ?>
<body>
<div id="wrapper">
        <!-- Navigation -->
<?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
        <div class="col-lg-12">
                        
        <h1 class="page-header">
            Posts
         <small>username</small>
         </h1>
       

<?php 

if(isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}

switch($source){

case 'add_user';
include ("includes/add_users.php");
break;

case 'edit_users';
include ('includes/edit_users.php');
break;

default:
include ("includes/veiw_all_users.php");
}
?>


<?php
if (isset($_GET['delete']))
{
$user_id = $_GET['delete'];
$query = "DELETE FROM `users` WHERE `users`.`user_id` = {$user_id}";
$delete_post = mysqli_query($connection,$query);
header("Location: users.php");
}
?>
<?php
if (isset($_GET['user_guest']))
{
$user_id = $_GET['user_guest'];
$query = "UPDATE `users` SET `user_role` = 'Guest' WHERE `users`.`user_id` = $user_id";
$delete_post = mysqli_query($connection,$query);
header("Location: users.php");
}
?>
<?php
if (isset($_GET['user_user']))
{
$user_id = $_GET['user_user'];
$query = "UPDATE `users` SET `user_role` = 'User' WHERE `users`.`user_id` = $user_id";
$delete_post = mysqli_query($connection,$query);
header("Location: users.php");
}
?>


  </div>
        </div>


</div>
<!-- /.row -->
<?php include "includes/footer.php" ?>
        </div>
 <!-- /.container-fluid -->

        </div>
 <!-- /#page-wrapper -->
        </div>
<!-- /#wrapper -->
<!-- jQuery -->
 <script src="js/jquery.js"></script>

 <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>


