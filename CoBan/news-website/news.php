<?php
include("includes/db.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$query = "SELECT * FROM News WHERE id = ?";
$params = array($id);
$result = sqlsrv_query($conn, $query, $params);
$news = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $news['title'] ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1><?= $news['title'] ?></h1>
    <p><?= $news['content'] ?></p>
    <a href="index.php">Quay lại</a>
</body>
</html>
