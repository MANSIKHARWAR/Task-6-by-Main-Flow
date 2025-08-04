<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM buyers WHERE id=$id");
$buyer = $result->fetch_assoc();
?>

<link rel="stylesheet" href="style.css">

<div class="edit-form">
    <h2>Edit Buyer</h2>
    <form method="POST" action="update_buyer.php">
        <input type="hidden" name="id" value="<?php echo $buyer['id']; ?>">

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $buyer['name']; ?>">
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $buyer['email']; ?>">
        </div>

        <div class="form-group">
            <label>Location:</label>
            <input type="text" name="location" value="<?php echo $buyer['location']; ?>">
        </div>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="buyers.php" class="back-btn">← Back to Buyers List</a>
</div>
