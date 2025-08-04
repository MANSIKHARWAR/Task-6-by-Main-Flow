<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];

$sql = "UPDATE buyers SET name='$name', email='$email', location='$location' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Buyer updated successfully. <a href='buyers.php'>Back to list</a>";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
