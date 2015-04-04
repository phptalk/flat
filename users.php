<?php 
require_once 'includes/connection.php';
include 'includes/header.php';?>
<?php
$query = "select * from user";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($result)){
    $userSet[] = $row;
}
?>


<h2>Manage Users</h2>
<hr>
<table border="2">
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete </th>
    </tr>
    <?php
    if(!empty($userSet)){
        foreach ($userSet as $user){
            echo "<tr>";
            echo "<td>{$user['user_id']}</td>";
            echo "<td>{$user['first_name']}</td>";
            echo "<td>{$user['last_name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['password']}</td>";
            echo "<td>{$user['mobile']}</td>";
            echo "<td>{$user['address']}</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td></tr>";
        }
    }
    
    ?>
</table>
<?php include 'includes/footer.php'; ?>
