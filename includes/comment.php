<?php 
$post_comment_id = $_GET['p_id'];
$query = "SELECT * FROM `comments` WHERE `comment_post_id` = $post_comment_id AND comment_status = 'approved' ";
$query .= "ORDER BY comment_id DESC";

$load_comment = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($load_comment))
{
$comment_date = $row['comment_date'];
$comment_author = $row['comment_author'];
$comment_content = $row['comment_content'];

?>

               <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author;?>
                            <small><?php echo $comment_date;?></small>
                        </h4>
                     <?php echo $comment_content;?>
                    </div>
                </div>


<?php }?>



