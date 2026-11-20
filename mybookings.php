<?php include "db.php"; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$message = "";

if (isset($_POST['change'])) {
    $booking_id = $_POST['booking_id'];
    $new_date = $_POST['new_date'];

    mysqli_query($conn, "UPDATE bookings SET booking_date='$new_date' WHERE id='$booking_id'");
    $message = "<div class='success'>Booking date updated successfully.</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bookings - Cat P.A.W.S.</title>
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
        <a href="animals.php">Our Cats</a>
        <a href="mybookings.php" class="active">My Bookings</a>
        <a href="upload.php">Upload Documents</a>
        <a href="download.php">Download Files</a>
        <a href="payment.php">Payment</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <h2>My Bookings</h2>

    <?php echo $message; ?>

    <?php
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT bookings.id, animals.name, animals.image, bookings.booking_date, bookings.status
            FROM bookings
            JOIN animals ON bookings.animal_id = animals.id
            WHERE bookings.user_id = '$user_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "<p>You do not have any bookings yet.</p>";
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<img src='images/" . $row['image'] . "'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Date: " . $row['booking_date'] . "</p>";
        echo "<p>Status: " . $row['status'] . "</p>";

        echo "<form method='POST'>";
        echo "<input type='hidden' name='booking_id' value='" . $row['id'] . "'>";
        echo "<input type='date' name='new_date' required>";
        echo "<button type='submit' name='change'>Change Date</button>";
        echo "</form>";

        echo "<br>";
        echo "<a class='btn' href='payment.php'>Pay Now</a>";

        echo "</div>";
    }
    ?>
</div>

</body>
</html>