<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blogdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST["baslik"];
    $metin = $_POST["metin"];
    $resim = $_POST["resim"]; 

    $sql = "INSERT INTO fitness (baslik, metin, resim) VALUES ('$baslik', '$metin', '$resim')";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php"); // yönlendirme
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Metin Ekle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Yeni Metin Ekle</h2>

    <form action="add.php" method="post">
        <div class="form-group">
            <label for="baslik">Başlık:</label>
            <input type="text" class="form-control" id="baslik" name="baslik" required>
        </div>
        <div class="form-group">
            <label for="metin">Metin:</label>
            <textarea class="form-control" id="metin" name="metin" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="resim">Resim URL:</label>
            <input type="text" class="form-control" id="resim" name="resim" required>
        </div>
  
        <button type="submit" class="btn btn-primary">Ekle</button>
        <a class="btn btn-secondary" href="admin.php">Geri Dön</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>