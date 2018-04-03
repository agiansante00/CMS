 <?php

ob_start();

if (isset($_POST['submit_edit_post']))
{
    $post_catagory = $_POST['post_catagory'];
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_content = $_POST['post_content'];
    $post_tags = $_POST['post_tags'];
    $post_status = $_POST['post_status'];
    


if(isset($post_catagory))
{
$query_catagory_sync = "SELECT * FROM catagories WHERE cat_title = '{$post_catagory}'"; 
$catagory_query = mysqli_query($connection,$query_catagory_sync);
confirmQuery($catagory_query);
            while ($row = mysqli_fetch_assoc($catagory_query))
            {
               $cat_id = $row['cat_id'];
            }
$post_catagory_id = $cat_id;

    move_uploaded_file($post_image_temp, "../images/$post_image");

    if(empty($post_image))
    {
	$img_query = "SELECT * FROM Posts WHERE post_id = '{$post_id_edit}'"; 
	$query_results = mysqli_query($connection,$img_query);

	while ($u_row = mysqli_fetch_assoc($query_results))
	    {
	    $post_image = $u_row['post_image'];
		}
	}

	$update_query = "UPDATE Posts 
	SET post_title = '{$post_title}', 
		post_catagory_id = '{$post_catagory_id}', 
		post_catagory = '{$post_catagory}',
		post_author = '{$post_author}', 
		post_image = '{$post_image}', 
		post_tag = '{$post_tags}', 
		post_status = '{$post_status}', 
		post_content = '{$post_content}', 
		post_date = now() 
		WHERE post_id = '{$post_id_edit}'";

	$update_post = mysqli_query($connection,$update_query);
	confirmQuery($update_post);
	header("Location: ../posts.php");
}
}
?> 
