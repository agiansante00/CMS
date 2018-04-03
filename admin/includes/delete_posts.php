<?php
if (isset($_GET['delete']))
{
$delete_post_id = $_GET['delete'];
$query = "DELETE FROM Posts WHERE post_id = {$delete_post_id}";
$delete_post = mysqli_query($connection,$query);
// header("Location: posts.php");
}
?>