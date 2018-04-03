
    <table class = 'table table-bordered table-hover'>
        <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>User Password</th>
                <th>User First Name</th>
                <th>User Last Name</th>
                <th>User Email</th>
                <th>User Image</th>
                <th>User Role</th>
                <th>User RandSait</th>
            </tr>

<?php 
$query = "SELECT * FROM users"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
    {

    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];
    $user_randsait = $row['user_randSait'];
 
?>

<tr>
<td><?php echo $user_id; ?></td>
<td><?php echo $user_name; ?></td>
<td><?php echo $user_password; ?></td>
<td><?php echo $user_firstname; ?></td>
<td><?php echo $user_lastname; ?></td>
<td><?php echo $user_email; ?></td>
<td><?php echo $user_image; ?></td>
<td><?php echo $user_role; ?></td>
<td><?php echo $user_randsait ?></td>
<td><a href='../admin/users.php?source=edit_users&user_id=<?php echo $user_id ?>'>Edit</a></td>
<td><a href='../admin/users.php?delete=<?php echo $user_id ?>'>Delete</a></td>
<td><a href='../admin/users.php?user_guest=<?php echo $user_id ?>'>Guest</a></td>
<td><a href='../admin/users.php?user_user=<?php echo $user_id ?>'>User</a></td>


            </tr>
 <?php } ?>


        </thead>
        <tbody>    
        </tbody>
    </table>