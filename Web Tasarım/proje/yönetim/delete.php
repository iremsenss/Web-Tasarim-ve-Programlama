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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm-delete"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM fitness WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php"); // Yönlendirme
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Metin Sil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Blog Metin Sil</h2>

    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="alert alert-danger" role="alert">
            <p><strong>Uyarı:</strong> Bu işlem geri alınamaz.Silinsin mi?</p>
        </div>

        <button type="submit" class="btn btn-danger" name="confirm-delete">Evet, Sil</button>
        <a class="btn btn-secondary" href="admin.php">İptal</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>