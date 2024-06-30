<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blogdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM fitness WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $baslik = $row["baslik"];
        $metin = $row["metin"];
        $resim = $row["resim"];
    } else {
        echo "Kayıt bulunamadı.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $metin = $_POST["metin"];
    $resim = $_POST["resim"]; 

    $sql = "UPDATE fitness SET baslik='$baslik', metin='$metin', resim='$resim' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php"); // Yönlendirme
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Güncelle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Blog Güncelle</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="baslik">Başlık:</label>
            <input type="text" class="form-control" id="baslik" name="baslik" value="<?php echo $baslik; ?>" required>
        </div>
        <div class="form-group">
            <label for="metin">Metin:</label>
            <textarea class="form-control" id="metin" name="metin" rows="3" required><?php echo $metin; ?></textarea>
        </div>
        <div class="form-group">
            <label for="resim">Resim URL:</label>
            <input type="text" class="form-control" id="resim" name="resim" value="<?php echo $resim; ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Güncelle</button>
        <a class="btn btn-secondary" href="index.php">Geri Dön</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>