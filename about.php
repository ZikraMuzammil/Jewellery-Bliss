<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM jewellery");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Jewellery Bliss</title>
    
     <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
   

<?php include "navbar.php"; ?>

<div class="container">

    <div class="item">
        <img src="images/r1.jpg">
        <p>Gold Ring – ₹15,000</p>
    </div>

    <div class="item">
        <img src="images/n1.jpg">
        <p>Necklace – ₹45,000</p>
    </div>

    <div class="item">
        <img src="images/b1.jpg">
        <p>Bangle – ₹25,000</p>
    </div>

    <div class="item">
        <img src="images/e6.jpg">
        <p>Earrings – ₹12,000</p>
    </div>

    <!-- ✅ ADD MORE ITEMS → NEXT ROW AUTOMATICALLY -->

    <div class="item">
        <img src="images/r2.jpg">
        <p>Gold Ring – ₹30,000</p>
    </div>

    <div class="item">
        <img src="images/n2.jpg">
        <p> Necklace – ₹18,000</p>
    </div>

    <div class="item">
        <img src="images/b7.jpg">
        <p>Bangle – ₹25,000</p>
    </div>

    <div class="item">
        <img src="images/e2.jpg">
        <p>Earrings – ₹12,000</p>
    </div>

    <!-- ✅ ADD MORE ITEMS → NEXT ROW AUTOMATICALLY -->

    <div class="item">
        <img src="images/r3.jpg">
        <p>Gold Ring – ₹16,000</p>
    </div>

    <div class="item">
        <img src="images/n3.jpg">
        <p> Necklace – ₹75,000</p>
    </div>

    <div class="item">
        <img src="images/b8.jpg">
        <p>Bangle – ₹33,000</p>
    </div>

    <div class="item">
        <img src="images/e3.jpg">
        <p>Earrings – ₹22,000</p>
    </div>

    <!-- ✅ ADD MORE ITEMS → NEXT ROW AUTOMATICALLY -->

    <div class="item">
        <img src="images/r4.jpg">
        <p>Gold Ring – ₹25,000</p>
    </div>

    <div class="item">
     <img src="images/n4.jpg">
    <p> Necklace – ₹50,000</p>
    </div>

    <div class="item">
        <img src="images/b4.jpg">
        <p>Bangle – ₹35,000</p>
    </div>

    <div class="item">
        <img src="images/e4.jpg">
        <p>Earrings – ₹18,000</p>
    </div>


    <!-- ✅ ADD MORE ITEMS → NEXT ROW AUTOMATICALLY -->

    <div class="item">
        <img src="images/r6.jpg">
        <p>Goldd Ring – ₹30,000</p>
    </div>

    <div class="item">
     <img src="images/n5.jpg">
    <p> Necklace – ₹80,000</p>
    </div>

    <div class="item">
        <img src="images/b5.jpg">
        <p>Bangle – ₹28,000</p>
    </div>

    <div class="item">
        <img src="images/e5.jpg">
        <p>Earrings – ₹20,000</p>
    </div>




</div>
</div>
</div>
</body>
</html>