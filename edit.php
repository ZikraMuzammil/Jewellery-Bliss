<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM jewellery WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    mysqli_query($conn, "UPDATE jewellery SET 
        name='$name',
        category='$category',
        price='$price',
        description='$description'
        WHERE id=$id");

    header("Location: view.php");
}
?>
<?php include "navbar.php"; ?>
<h1>Edit Jewellery</h1>
<link rel="stylesheet" href="style.css">
<form method="post">
    <b>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Category: <input type="text" name="category" value="<?php echo $row['category']; ?>"><br><br>
    Price: <input type="number" name="price" value="<?php echo $row['price']; ?>"><br><br>
    Description:<br>
    <textarea name="description"><?php echo $row['description']; ?></textarea><br><br>
    <b><button name="update">Update</button>
</form>
</div>
