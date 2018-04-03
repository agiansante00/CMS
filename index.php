<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db.php'; ?>

<!-- header -->
<?php include 'includes/header.php'; ?>


<body>

<!-- top of page navigatin menu -->
 <?php include 'includes/navigation.php'; ?>



 <!-- Page Content -->
<?php include 'includes/pagecontent.php'; ?>


<!-- pager -->
<?php include 'includes/pager.php'; ?>

</div>

<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">


<?php if (!isset($_SESSION['username']))
{include("login.php");	
}
else
{
	echo "Good Day ". $_SESSION['username']. ", How are you Today?";
}?>




<!-- Blog Search Well -->
<br>

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
