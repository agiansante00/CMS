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

case 'add_post';
include ("includes/add_posts.php");
break;

case 'edit_post';
include ('includes/edit_posts.php');
break;

default:
include ("includes/veiw_all_comments.php");
}
?>


<?php
if (isset($_GET['delete']))
{
$comment_id = $_GET['delete'];
$query = "DELETE FROM `comments` WHERE `comments`.`comment_id` = {$comment_id}";
$delete_post = mysqli_query($connection,$query);
header("Location: comments.php");
}
?>

<?php
if (isset($_GET['dissapprove']))
{
$comment_id = $_GET['dissapprove'];
$query = "UPDATE `comments` SET comment_status = 'dissapproved' WHERE `comments`.`comment_id` = $comment_id ";
$dissapprove_post = mysqli_query($connection,$query);
header("Location: comments.php");
}
?>

<?php
if (isset($_GET['approve']))
{
$comment_id = $_GET['approve'];
$query = "UPDATE `comments` SET comment_status = 'approved' WHERE `comments`.`comment_id` = $comment_id ";
$approve_post = mysqli_query($connection,$query);
header("Location: comments.php");
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


