<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
if (isset($_SESSION['role']))
{
    if ($_SESSION['role'] !== 'Admin' )
    {
        header("Location: ../index.php");
    }
}

if (!isset($_SESSION['username']))
{
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.php"; ?>

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
                            Hello 
                            <small><?php echo $_SESSION['username'];?></small>
                        </h1>
                    </div>
                </div>

<?php
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `user_name` = '$username'"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
 {
$user_image = $row['user_image'];
}
}
?>

<?php include "includes/view_loggedin_users.php"; ?>

<hr>
<img class="img-responsive" src="../images/<?php echo $user_image; ?>" alt="">
<hr>




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
