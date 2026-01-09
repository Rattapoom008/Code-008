<?php
/*http://api.kpt.ac.th/stdxxx/get_api.php*/
ob_clean(); // ← ป้องกันข้อความแปลกๆ จาก server

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit();
}

require_once "config.php";

$sql = "SELECT * FROM std_008";
$result = $conn->query($sql);

$data = array();
while($row = $result->fetch_assoc()){
  $data[] = $row;
}
echo json_encode(["status" => "success", "data" => $data]);
?>