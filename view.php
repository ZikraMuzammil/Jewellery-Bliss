<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM jewellery");

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Jewellery Bliss</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
     <?php include "navbar.php"; ?>
   
  
<a href="add.php" class="add-btn"><h2>+Add New Jewellery</h2></a>

<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td class="action">
        <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>