<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">
<div class="container">
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search buyer by name or location">
    <button type="submit">Search</button>
</form>
<a href="buyers.php">Clear</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Location</th><th>Action</th>
</tr>

<?php
$search = $_GET['search'] ?? '';
$sql = "SELECT * FROM buyers WHERE name LIKE '%$search%' OR location LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['location']."</td>
                <td><a href='edit_buyer.php?id=".$row['id']."'>Edit</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No buyers found</td></tr>";
}
?>
</table>
</div>