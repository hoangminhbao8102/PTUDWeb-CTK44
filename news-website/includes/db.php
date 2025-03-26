<?php
$serverName = "localhost";
$connectionOptions = array(
    "Database" => "NewsDB",
    "Uid" => "sa",
    "PWD" => "minhbao8102",
    "TrustServerCertificate" => "true",
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>
