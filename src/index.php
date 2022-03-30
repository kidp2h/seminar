<?php
include_once("Database.php");
include_once("./resources/user.php");
header('Content-Type: application/json');
echo json_encode(getEntire(),JSON_PRETTY_PRINT);
//echo json_encode(getById(6),JSON_PRETTY_PRINT);
