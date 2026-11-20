<?php include "db.php"; ?>

<?php
$message = "";

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "<div class='success'>Account created successfully. You can sign in now.</div>";
    } else {
        $message = "<div class='error'>Email already exists or something went wrong.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Cat P.A.W.S.</title>
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
        <a href="signup.php" class="active">Sign Up</a>
        <a href="signin.php">Sign In</a>
    </div>
</nav>

<div class="auth-page">
    <div class="auth-box">
    <h2>Create Account</h2>

    <?php echo $message; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="signup">Sign Up</button>
    </form>
</div>
</div>
 
</body>
</html>