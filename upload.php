<?php include "db.php"; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$message = "";

if (isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $path = "uploads/" . $file_name;

    if (move_uploaded_file($file_tmp, $path)) {
        $user_id = $_SESSION['user_id'];

        mysqli_query($conn, "INSERT INTO files (user_id, file_name, file_path)
                             VALUES ('$user_id', '$file_name', '$path')");

        $message = "<div class='success'>File uploaded successfully.</div>";
    } else {
        $message = "<div class='error'>Upload failed.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Documents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="logo">🐾 Cat P.A.W.S.</div>
    <div class="links">
        <a href="index.php">Home</a>
        <a href="animals.php">Our Cats</a>
        <a href="upload.php" class="active">Upload</a>
        <a href="download.php">Download</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <h2>Upload Document</h2>

    <?php echo $message; ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="upload">Upload File</button>
    </form>
</div>

</body>
</html>