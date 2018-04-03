
    <table class = 'table table-bordered table-hover'>
        <thead>
            <tr>
                <th>Comment Id</th>
                <th>Comment Post Id</th>
                <th>Comment Author</th>
                <th>Comment Email</th>
                <th>Comment Date</th>
                <th>Comment Content</th>
                <th>Comment Status</th>
            </tr>

<?php 
$query = "SELECT * FROM comments"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
    {

    $comment_id = $row['comment_id'];
    $comment_post_id = $row['comment_post_id'];
    $comment_author = $row['comment_author'];
    $comment_email = $row['comment_email'];
    $comment_date = $row['comment_date'];
    $comment_content = $row['comment_content'];
    $comment_status = $row['comment_status'];

?>

<tr>
<td><?php echo $comment_id ?></td>
<td><?php echo $comment_post_id; ?></td>
<td><?php echo $comment_author; ?></td>
<td><?php echo $comment_email; ?></td>
<td><?php echo $comment_date; ?></td>
<td><?php echo $comment_content; ?></td>
<td><?php echo $comment_status; ?></td>
<td><a href='../admin/comments.php?approve=<?php echo $comment_id ?>'>Approve</a></td>
<td><a href='../admin/comments.php?dissapprove=<?php echo $comment_id ?>'>Dissapprove</a></td>
<td><a href='../admin/comments.php?delete=<?php echo $comment_id ?>'>Delete</a></td>
            </tr>
 <?php } ?>


        </thead>
        <tbody>    
        </tbody>
    </table>