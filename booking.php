<?php include "db.php"; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$animal_id = $_GET['id'];
$message = "";

if (isset($_POST['book'])) {
    $user_id = $_SESSION['user_id'];
    $date = $_POST['booking_date'];

    $sql = "INSERT INTO bookings (user_id, animal_id, booking_date, status)
            VALUES ('$user_id', '$animal_id', '$date', 'Booked')";

    if (mysqli_query($conn, $sql)) {
        $message = "<div class='success'>Booking completed successfully.</div>";
    } else {
        $message = "<div class='error'>Booking failed.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment - Cat P.A.W.S.</title>
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
        <a href="mybookings.php">My Bookings</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <h2>Book Adoption Appointment</h2>

    <?php echo $message; ?>

    <form method="POST">
        <input type="date" name="booking_date" required>
        <button type="submit" name="book">Book Now</button>
    </form>
</div>

</body>
</html>