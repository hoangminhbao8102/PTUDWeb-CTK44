<?php
include("includes/db.php");

// Lấy danh sách tin tức từ database
$query = "SELECT * FROM News ORDER BY created_at DESC";
$result = sqlsrv_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị Tin Tức</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Xác nhận trước khi xóa
            $(".delete-btn").click(function (e) {
                if (!confirm("Bạn có chắc chắn muốn xóa bài viết này?")) {
                    e.preventDefault();
                }
            });
        });
    </script>
</head>
<body>
    <h1>Quản trị Tin Tức</h1>
    <a href="add_news.php"><button>Thêm bài viết mới</button></a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['created_at']->format('Y-m-d H:i:s') ?></td>
                    <td>
                        <a href="update_news.php?id=<?= $row['id'] ?>"><button>Sửa</button></a>
                        <a href="delete_news.php?id=<?= $row['id'] ?>" class="delete-btn"><button>Xóa</button></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
