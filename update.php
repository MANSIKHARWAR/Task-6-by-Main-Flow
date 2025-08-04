<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];

$sql = "UPDATE products SET 
        name='$name', 
        category='$category', 
        price='$price', 
        quantity='$quantity', 
        description='$description' 
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully. <a href='index.php'>Back to list</a>";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
