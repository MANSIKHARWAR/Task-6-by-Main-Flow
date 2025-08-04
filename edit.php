<link rel="stylesheet" href="style.css">
<?php

include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();
?>
<div class="edit-form">
    <h2>Edit Product</h2>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>">
        </div>

        <div class="form-group">
            <label>Category:</label>
            <input type="text" name="category" value="<?php echo $product['category']; ?>">
        </div>

        <div class="form-group">
            <label>Price:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>">
        </div>

        <div class="form-group">
            <label>Quantity:</label>
            <input type="text" name="quantity" value="<?php echo $product['quantity']; ?>">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="description"><?php echo $product['description']; ?></textarea>
        </div>

        <button type="submit">Update</button>
    </form>
     <br>
    <a href="index.php" class="back-btn">← Back to Product List</a>
</div>

