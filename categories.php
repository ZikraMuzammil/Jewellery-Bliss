<?php
include "db.php";

$result = mysqli_query($conn, "SELECT DISTINCT category FROM jewellery");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories - Jewellery Bliss</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include "navbar.php"; ?>


<div class="container">

    <h2 class="category-title">Jewellery Categories</h2>
 <div class="category-list">
    <div class="category-wrapper">
   <div class="category-item">Silver</div>
        <div class="category-item">Gold</div>
    </div>

</div>
</div>

</body>
</html>

