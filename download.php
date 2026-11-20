<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Download Files</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="logo">🐾 Cat P.A.W.S.</div>
    <div class="links">
        <a href="index.php">Home</a>
        <a href="animals.php">Our Cats</a>
        <a href="upload.php">Upload</a>
        <a href="download.php" class="active">Download</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<div class="container">
    <h2>Download Files</h2>

    <h3>Adoption Form</h3>
    <a class="btn" href="adoption_form.txt" download>Download Form</a>

    <hr>

    <h3>Uploaded Files</h3>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM files");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row['file_name'] . " - 
        <a href='" . $row['file_path'] . "' download>Download</a></p>";
    }
    ?>
</div>

</body>
</html>