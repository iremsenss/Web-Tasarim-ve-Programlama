<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blogdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT id, baslik, metin, resim FROM fitness";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Blog Listesi</h2>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Başlık</th>
            <th>Metin</th>
            <th>Resim</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["baslik"] . "</td>";
                echo "<td>" . $row["metin"] . "</td>";
                echo "<td>" . $row["resim"] . "</td>";
                echo "<td>
                    <a class='btn btn-warning' href='update.php?id=" . $row["id"] . "'>Düzenle</a>
                    <a class='btn btn-danger' href='delete.php?id=" . $row["id"] . "'>Sil</a>
                  </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Kayıt bulunamadı.</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="add.php">Yeni Metin Ekle</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.ne"></script>