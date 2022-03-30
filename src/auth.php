<?php
include_once("Database.php");
include_once("./resources/user.php");
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $body = [];
  foreach ($_POST as $key => $value) {
    $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
  }
  echo json_encode(check($body["id"],$body["password"]));
}else{
  header('HTTP/1.1 500 Internal Server Error');
}
