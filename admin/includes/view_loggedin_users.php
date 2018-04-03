<?php session_start(); ?>
<?php ob_start(); ?>
<?php include '/cms/includes/db.php'; ?>

    <table class = 'table table-bordered table-hover'>
        <thead>
            <tr>
                <th>User Name</th>
                <th>User First Name</th>
                <th>User Last Name</th>
                <th>User Email</th>
            </tr>

<?php
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `user_name` = '$username'"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
 {
$user_name = $row['user_name'];
$user_email = $row['user_email'];
$user_firstname = $row['user_firstname'];
$user_lastname = $row['user_lastname'];
    }
?>

<tr>
<td><?php echo $user_name; ?></td>
<td><?php echo $user_firstname; ?></td>
<td><?php echo $user_lastname; ?></td>
<td><?php echo $user_email; ?></td>
</tr>
 <?php } ?>


        </thead>
        <tbody>    
        </tbody>
    </table>