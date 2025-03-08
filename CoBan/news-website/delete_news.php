<?php
include("includes/db.php");

$id = $_GET['id'];
$query = "DELETE FROM News WHERE id = ?";
$params = array($id);
sqlsrv_query($conn, $query, $params);

header("Location: admin.php");
?>
