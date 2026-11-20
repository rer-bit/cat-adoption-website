<?php include "db.php"; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$message = "";

if (isset($_POST['pay'])) {
    $message = "<div class='success'>Payment completed successfully! 🎉</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment - Cat P.A.W.S.</title>
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
        <a href="payment.php" class="active">Payment</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="auth-page">
    <div class="auth-box">
        <h2>Adoption Payment</h2>

        <?php echo $message; ?>

        <p>Adoption Fee: <b>10 JD</b></p>

        <form method="POST">
            <input type="text" placeholder="Card Number" required>
            <input type="text" placeholder="Card Holder Name" required>
            <input type="text" placeholder="MM/YY" required>
            <input type="text" placeholder="CVV" required>

            <button type="submit" name="pay">Pay Now</button>
        </form>
    </div>
</div>

</body>
</html>