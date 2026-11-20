<?php include "db.php"; ?>

<?php
$message = "";

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: animals.php");
        exit();
    } else {
        $message = "<div class='error'>Wrong email or password.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In - Cat P.A.W.S.</title>
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
        <a href="signup.php">Sign Up</a>
        <a href="signin.php" class="active">Sign In</a>
    </div>
</nav>

<div class="auth-page">
    <div class="auth-box">
    <h2>Sign In</h2>

    <?php echo $message; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="signin">Sign In</button>
    </form>
</div>
</div>
 
</body>
</html>