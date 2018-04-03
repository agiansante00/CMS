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
include ("includes/veiw_all_posts.php");
}
?>


<?php
if (isset($_GET['delete']))
{
$delete_post_id = $_GET['delete'];
$query = "DELETE FROM Posts WHERE post_id = {$delete_post_id}";
$delete_post = mysqli_query($connection,$query);
header("Location: posts.php");
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


