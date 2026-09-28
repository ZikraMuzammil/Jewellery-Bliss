<?php
include "db.php";

// total jewellery count
$jewellery_count = mysqli_query($conn, "SELECT COUNT(*) AS total FROM jewellery");
$jewellery = mysqli_fetch_assoc($jewellery_count);

// total categories count
$category_count = mysqli_query($conn, "SELECT COUNT(DISTINCT category) AS total FROM jewellery");
$category = mysqli_fetch_assoc($category_count);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Jewellery Bliss</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include "navbar.php"; ?>


<h1>Admin Dashboard</h1>

<div class="dashboard">
    <div class="card">
        <h2>Total Jewellery</h2>
        <p><?php echo $jewellery['total']; ?></p>
    </div>

    <div class="card">
        <h2>Total Categories</h2>
        <p><?php echo $category['total']; ?></p>
    </div>
</div>

<div class="links">
    <a href="add.php">➕ Add Jewellery</a>
    <a href="view.php">📋 View Jewellery</a>
</div>

</body>
</html>
