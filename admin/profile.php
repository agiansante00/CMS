
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
include ('includes/edit_loggedin_user.php');
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


