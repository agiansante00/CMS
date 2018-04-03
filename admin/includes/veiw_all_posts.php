
    <table class = 'table table-bordered table-hover'>
        <thead>
            <tr>
                <th>Post Id</th>
                <th>Post Catagory Id</th>
                <th>Post Catagory</th>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Post Date</th>
                <th>Post Image</th>
                <th>Post Content</th>
                <th>Post Tag</th>
                <th>Post Comment Count</th>
                <th>Post Status</th>
            </tr>

<?php 
$query = "SELECT * FROM Posts"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
    {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tag = $row['post_tag'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];

    $post_catagory_id = $row['post_catagory_id'];
            $query_catagory_sync = "SELECT * FROM catagories WHERE cat_id = '{$post_catagory_id}'";
            $catagory_query = mysqli_query($connection,$query_catagory_sync);
            confirmQuery($catagory_query);
            while ($row = mysqli_fetch_assoc($catagory_query))
            {
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
            }
    $post_catagory = $cat_title;
?>

<tr>
<td><?php echo $post_id; ?></td>
<td><?php echo $post_catagory_id; ?></td>
<td><?php echo $post_catagory; ?></td>
<td><?php echo $post_title; ?></td>
<td><?php echo $post_author; ?></td>
<td><?php echo $post_date; ?></td>
<td><img width = "100" src="../images/<?php echo $post_image; ?>" alt=""></td>
<td><?php echo $post_content; ?></td>
<td><?php echo $post_tag; ?></td>
<td><?php echo $post_comment_count; ?></td>
<td><?php echo $post_status; ?></td>
<td><a href='../admin/posts.php?source=edit_post&p_id=<?php echo $post_id ?>'>Edit</a></td>
<td><a href='../admin/posts.php?delete=<?php echo $post_id ?>'>Delete</a></td>
            </tr>
 <?php } ?>


        </thead>
        <tbody>    
        </tbody>
    </table>