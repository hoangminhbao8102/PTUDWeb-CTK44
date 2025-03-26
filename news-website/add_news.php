<?php
include("includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO News (title, content) VALUES (?, ?)";
    $params = array($title, $content);
    sqlsrv_query($conn, $query, $params);

    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Tin Tức</title>
</head>
<body>
    <h1>Thêm Tin Tức</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Tiêu đề" required>
        <textarea name="content" placeholder="Nội dung" required></textarea>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
