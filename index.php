 <?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cat P.A.W.S.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="logo">
        🐾 <span>Cat P.A.W.S.</span>
        <small>Giving Cats a Brighter Tomorrow</small>
    </div>

    <div class="links">
        <a href="index.php" class="active">Home</a>
        <a href="animals.php">Our Cats</a>
        <a href="signup.php">Sign Up</a>
        <a href="signin.php">Sign In</a>
        <a href="mybookings.php">My Bookings</a>
        <a href="upload.php">Upload Documents</a>
        <a href="download.php">Download Files</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-text">
        <h1>Give Love.<br><span>Adopt a Cat. ♡</span></h1>
        <p>Every cat deserves a safe home and a loving family.<br>
        Adopt today and change a life forever.</p>
        <a href="animals.php" class="btn">🐾 View Available Cats</a>
    </div>
</section>

<section class="mission">
    <h2>🐾 About Our Mission</h2>
    <p>
        We are dedicated to rescuing cats in need, providing medical care,
        shelter, and finding them loving forever homes.
        Together, we can make a difference in their lives.
    </p>
</section>

<section class="cards">
    <div class="home-card">
        <img src="images/cat.jpg">
        <h3>Adopt a Cat</h3>
        <p>Adopting is one of the most effective ways to support our work.</p>
        <a href="animals.php">READ MORE</a>
    </div>

    <div class="home-card">
        <img src="images/cat2.jpg">
        <h3>My Bookings</h3>
        <p>View your adoption appointments, check status, and reschedule.</p>
        <a href="mybookings.php">READ MORE</a>
    </div>

    <div class="home-card">
        <img src="images/cat3.jpg">
        <h3>Upload Documents</h3>
        <p>Upload required documents for your adoption process securely.</p>
        <a href="upload.php">READ MORE</a>
    </div>

    <div class="home-card">
        <img src="images/cat4.jpg">
        <h3>Download Files</h3>
        <p>Download adoption forms and important files anytime.</p>
        <a href="download.php">READ MORE</a>
    </div>
</section>

</body>
</html>