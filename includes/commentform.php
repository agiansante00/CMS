   <!-- Comments Form -->
                   <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post">
                        <div class="form-group">
                            <label for='comment_author'>Author</label>
                            <input type='text' class='form-control' name ='comment_author'>
                            <label for='comment_email'>Email</label>
                            <input type='email' class='form-control' name = 'comment_email'>
                            <br>
                            <label for='comment_content'>Comment</label>
                            <textarea class="form-control" name='comment_content' rows="3"></textarea>
                        </div>
                        <button type="submit" name = 'create_comment' class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

<?php
if (isset($_POST['create_comment']))
{
    $comment_email = $_POST['comment_email'];
    $comment_content = $_POST['comment_content'];
    $comment_author = $_POST['comment_author'];
    $comment_post_id = $_GET['p_id'];

$query = 
"INSERT INTO `comments` 
(`comment_post_id`,`comment_author`,`comment_email`,`comment_content`,`comment_status`,`comment_date`) 
VALUES ('$comment_post_id', '$comment_author', '$comment_email', '$comment_content', 'awaiting approval', now())";
$add_comment = mysqli_query($connection,$query);


$comment_count_query = "UPDATE `Posts` SET post_comment_count = post_comment_count + 1 WHERE `Posts`.`post_id` = $comment_post_id";
$add_comment_count = mysqli_query($connection,$comment_count_query);
}
?>