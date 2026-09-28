<?php
include 'db.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $query = "INSERT INTO jewellery (name, category, price, description)
              VALUES ('$name', '$category', '$price', '$description')";

    if (mysqli_query($conn, $query)) {
        header("Location: view.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Jewellery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
    <div class="add-box">
        <h1>Add Jewellery</h1>

        <form method="post" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Category:</label>
            <input type="text" name="category" required>

            <label>Price:</label>
            <input type="number" name="price" required>

            <label>Description:</label>
            <textarea name="description" required></textarea>

            <button type="submit" name="add">Add</button>
        </form>
    </div>
</div>

</body>
</html>
