<?php

try {
 $db = new PDO("sqlite:".__DIR__."/database.db"); //__DIR__ current directory
  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
  echo "Unable to connect to database";
  echo $e->getMessage();
  exit;
}
  //echo "Connected to the database.";

?>
