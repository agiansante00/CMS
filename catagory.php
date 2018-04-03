
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db.php'; ?>

<!-- header -->
<?php include 'includes/header.php'; ?>


<body>

<!-- top of page navigatin menu -->
 <?php include 'includes/navigation.php'; ?>

   

 <!-- Page Content -->
<div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php
                $cat_id = $_GET['catagory'];
                $query = "SELECT * FROM posts WHERE post_catagory_id = $cat_id";
                $select_all_posts_query = mysqli_query($connection,$query);
          
                if (empty(mysqli_fetch_assoc($select_all_posts_query))) 
                	{ ?>
                    <h3><small> <a href="index.php">return to main page</a></small></h3>
           	<?php }else{ 

                $cat_id = $_GET['catagory'];
                $query = "SELECT * FROM posts WHERE post_catagory_id = $cat_id";
                $select_all_posts_query = mysqli_query($connection,$query);

          
            
                while($row = mysqli_fetch_assoc($select_all_posts_query))
                {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_id = $row['post_id'];
	
                    ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"> <?php echo $post_title ?> </a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
               

                <!-- Comment Form -->

<?php include 'includes/commentform.php' ?>

<!-- Comment -->

<?php include 'includes/comment.php' ?>


         <?php }}?>
               
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