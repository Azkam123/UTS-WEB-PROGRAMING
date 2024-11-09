<!-- * untuk mengeksekusi server harus di file main.php -->
<?php
$title = "Profil Saya";
$name = "Moh Hasan";
$description = "Halo! Saya seorang pengembang web yang tertarik dengan teknologi terbaru dan suka mengembangkan aplikasi yang berguna. Di waktu luang, saya menikmati membaca buku dan belajar hal baru.";

$links = [
    "tiktok" => "https://www.tiktok.com/@azkam_233?_t=8rCE7sFeLT8&_r=1",
    "youtube" => "https://youtube.com/@mohhasan-ij7jg?feature=shared",
    "instagram" => "https://www.instagram.com/yourusername"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
    <h1><?php echo $title; ?></h1>
    <img src="foto.jpg" alt="Foto Profil" class="profile-pic">
    <h2>Nama: <?php echo $name; ?></h2>
    <p><?php echo $description; ?></p>
    </div>
</body>
</html>