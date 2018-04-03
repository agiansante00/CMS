<!DOCTYPE html>
<html lang="en">
<?php include 'includes/db.php'; ?>
<!-- header -->
<?php include 'includes/header.php'; ?>
<body>
<!-- top of page navigatin menu -->
 <?php include 'includes/navigation.php'; ?>

 <!-- Page Content -->
<?php include 'includes/thepost.php'; ?>

               
<!-- pager -->
<?php include 'includes/pager.php'; ?>

</div>

<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">


<!-- Blog Search Well -->
<?php include 'includes/searchbar.php' ;?>            

<!-- Blog Categories Well -->
<?php include 'includes/blogcatagory.php' ;?>


<!-- Side Widget Well -->
<?php include 'includes/sidewidget.php';?>

 </div>

</div>
        <!-- /.row -->

<hr>

<!-- footer -->
<?php include 'includes/footer.php';?>
       
</div>
    <!-- /.container -->

    <!-- jQuery -->
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

