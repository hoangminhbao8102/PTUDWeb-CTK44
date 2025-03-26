<?php
include("includes/db.php");

$query = "SELECT * FROM News ORDER BY created_at DESC";
$result = sqlsrv_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Website Tin Tức</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Trang Tin Tức</h1>
    <input type="text" id="search" placeholder="Tìm kiếm tin tức...">
    <div id="news-list">
        <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) : ?>
            <div class="news-item">
                <h2><a href="news.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h2>
                <p><?= substr($row['content'], 0, 100) ?>...</p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
