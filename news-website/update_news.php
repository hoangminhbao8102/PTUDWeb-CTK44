<?php
include("includes/db.php");

$id = $_GET['id'];
$query = "SELECT * FROM News WHERE id = ?";
$params = array($id);
$result = sqlsrv_query($conn, $query, $params);
$news = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "UPDATE News SET title = ?, content = ? WHERE id = ?";
    $params = array($title, $content, $id);
    sqlsrv_query($conn, $query, $params);

    header("Location: admin.php");
}
?>
<form method="POST">
    <input type="text" name="title" value="<?= $news['title'] ?>" required>
    <textarea name="content" required><?= $news['content'] ?></textarea>
    <button type="submit">Cập nhật</button>
</form>
