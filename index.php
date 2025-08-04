<?php include 'db.php'; ?>

<link rel="stylesheet" href="style.css">
<div class="container">
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search by name or category">
    <button type="submit">Search</button>
</form>
<a href="index.php">Clear</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Quantity</th><th>Action</th>
</tr>

<?php
$search = $_GET['search'] ?? '';
$sql = "SELECT * FROM products WHERE name LIKE '%$search%' OR category LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['category']."</td>
                <td>".$row['price']."</td>
                <td>".$row['quantity']."</td>
                <td><a href='edit.php?id=".$row['id']."'>Edit</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No products found</td></tr>";
}
?>
</table>
</div>