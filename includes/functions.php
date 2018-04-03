<?php
function insert_catagories()
{
global $connection;
    if (isset($_POST['submit_add']))
    {
        $cat_title = $_POST['cat_title'];
            if ($cat_title == "" || empty($cat_title))
        {
            echo "THIS FIELD SHOULD NOT EMPTY";
        }
        else
        {
            $query = "INSERT INTO catagories(cat_title)
                      VALUE ('{$cat_title}')";
            $create_catagory = mysqli_query($connection,$query);

            if (!$create_catagory)
            { 
                die ("ERROR ENTERING INTO DB ". mysqli_error($connection));
            }
        }
    }
}

function view_catagories()
{
    global $connection;
    $query = "SELECT * FROM catagories";
    $query_results = mysqli_query($connection,$query);
    
    while ($row = mysqli_fetch_assoc($query_results))
    {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];
    ?>
    <tr>
                    <td><?php echo $cat_id ?></td>
                    <td><?php echo $cat_title ?></td>
                    <td><a href='catagories.php?delete=<?php echo $cat_id ?>'>delete</a></td>
                    <td><a href='catagories.php?edit=<?php echo $cat_id ?>'>edit</a></td>
    </tr>
<?php 
    } 
}
?>

<?php
function delete_catagories()
{   
    global $connection;
    if (isset($_GET['delete']))
    {
      $the_cat_id = $_GET['delete'];
      $query = "DELETE FROM `catagories` WHERE `catagories`.`cat_id`='{$the_cat_id}'";
      $delete_query = mysqli_query($connection,$query); 
      header("Location: catagories.php");
    }
}
?>

<?php
function edit_catagories()
{
global $connection;

    if (isset($_GET['edit']))
    {
        $cat_id = $_GET['edit'];
        $query = "SELECT * FROM catagories WHERE cat_id = $cat_id";
        $edit_select = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($edit_select))
        {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            if (isset($cat_title))
            { ?>
            <input value = '<?php echo $cat_title ?>' type="text" class = "form-controlx" name="cat_title">
            <?php }                                           
        }
    }
?>
    </div>
    <div class = "form-group" method="post">
    <?php
    if (isset($_GET['edit']))
    {
        $cat_id = $_GET['edit']; ?>
     <input class = "btn btn-primary" type="submit" name = "submit_update" value="update catagory">
    <?php    
     if (isset($_POST['submit_update']))
        {
        $cat_title = $_POST['cat_title'];
        $up_query = "UPDATE catagories SET cat_title = '{$cat_title}' WHERE cat_id = '{$cat_id}'";
        $update_query = mysqli_query($connection,$up_query);
            if(!isset($update_query))
            {
                die ("DATABASER ERROR ") . mysqli_error($connection);
            }
            
        }

    }
}

?>

<?php function confirmQuery($result){
    global $connection;
    if (!$result){
        die("Query Failed " . mysqli_error($connection));
    }
}
?>
