<?php

include_once(__DIR__."/../Database.php");
$GLOBALS["db"] = Database::Instance()->getDatabase();
function getById($id){
  $result = $GLOBALS["db"]->query("SELECT * FROM user WHERE id={$id}");
  return mysqli_fetch_assoc($result);

}

function getEntire(){
  $result = $GLOBALS["db"]->query("SELECT * FROM user WHERE 1=1");
  $rows = [];
  while($row = mysqli_fetch_assoc($result))
  {
    $rows[] = $row;
  }
  return $rows;
}