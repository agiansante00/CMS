<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = 'password';
$db['db_name'] = 'CMS';
foreach($db as $key => $value)
{
    define(strtoupper($key),$value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if (!$connection){
    echo "failed to connect";
}
else {
    echo "connected";
}
?>


<?php
include 'includes/db.php';
if (isset($_POST['submit']))
{

        $search = $_POST['search'];
        echo $search;
        $query = "SELECT * FROM `Posts` WHERE `post_tag` LIKE '%$search%'";
        $search_query = mysqli_query($connection, $query);

           
        if (!$search_query)
            {
                die("QUERY FAILED: ". mysqli_error($connection));
            }
        else
        {
            echo " everything is groovy ";
        }

        $count = mysqli_num_rows($search_query);
            if($count == 0)
            {
                echo "<h1> No Results Found </h1>";
            }
            else
            {
                echo "<h1> Results Found </h1>";   
            } 
}
?>