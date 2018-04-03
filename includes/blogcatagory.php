<?php
$query = "SELECT * FROM catagories";
                $select_all_catagories_sidebar = mysqli_query($connection,$query);
                $cat_title_array_even_id = array();
                $cat_title_array_odd_id = array();
                while ($row = mysqli_fetch_assoc($select_all_catagories_sidebar))
                {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];
                   

                    if (($cat_id % 2) != 0)
                    {
                    $cat_title_array_even_id[] = $cat_title;
                   

                    }
                            else
                    {
                    $cat_title_array_odd_id[] = $cat_title;
                  
                    }
                }

?>
                    <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                    <div class="col-lg-6">
                     <ul class="list-unstyled">

<?php
foreach($cat_title_array_even_id as $val)
{
    $query = "SELECT * FROM catagories WHERE cat_title = '$val'";
    $get_cat_id = mysqli_query($connection,$query);
    while ($idrow = mysqli_fetch_assoc($get_cat_id))
    {
        $cat_id = $idrow['cat_id'];
        echo "<li><a href='catagory.php?catagory={$cat_id}'>{$val}</a></li>";
    }
}
?>
                 </ul>
                </div>
                        <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                    <ul class="list-unstyled">
<?php
foreach($cat_title_array_odd_id as $val) 
{
    $query = "SELECT * FROM catagories WHERE cat_title = '$val'";
    $get_cat_id = mysqli_query($connection,$query);
    while ($idrow = mysqli_fetch_assoc($get_cat_id))
    {
        $cat_id = $idrow['cat_id'];
        echo "<li><a href='catagory.php?catagory={$cat_id}'>{$val}</a></li>";
    }
}
?>

                        </ul>
                        </div>


                      <!-- /.col-lg-6 -->
                </div>
                    <!-- /.row -->
                </div>



