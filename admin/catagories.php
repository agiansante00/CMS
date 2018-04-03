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
                            Catagories
                            <small>username</small>

                        </h1>



   
<!-- INPUT FIELD     -->                 
<div class = 'col-xs-6'>

<!-- ADD CATAGORY -->

<?php insert_catagories(); ?>



<form action = "" method = "post">
<div class = "form-group">
<input type="text" class = "form-controlx" name="cat_title">
</div>
<div class = "form-group" method="post">
<input class = "btn btn-primary" type="submit" name = "submit_add" value="add catagory">
</div>
</form>





<!-- EDIT CATAGORY -->
<form action = "" method = "post">
<div class = "form-group">

<?php edit_catagories(); ?>

</div>
</form>
</div>

<!-- LIST FROM SQL -->

<div class = 'col-xs-6'>
    <table class = 'table table-bordered table-hover'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>    


<!-- View -->
<?php view_catagories(); ?>

<!-- DELETE -->
 <?php delete_catagories();?>    

        </tbody>
    </table>
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
