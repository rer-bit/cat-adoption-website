<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Our Cats - Cat P.A.W.S.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="logo">
        🐾 <span>Cat P.A.W.S.</span>
        <small>Giving Cats a Brighter Tomorrow</small>
    </div>

    <div class="links">
        <a href="index.php">Home</a>
        <a href="animals.php" class="active">Our Cats</a>
        <a href="mybookings.php">My Bookings</a>
        <a href="upload.php">Upload Documents</a>
        <a href="download.php">Download Files</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <h2>Available Cats</h2>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM animals");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<img src='images/" . $row['image'] . "'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Type: " . $row['type'] . "</p>";
        echo "<p>Age: " . $row['age'] . " years</p>";
        echo "<p>Status: " . $row['status'] . "</p>";
        echo "<a class='btn' href='booking.php?id=" . $row['id'] . "'>Book Appointment</a>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>