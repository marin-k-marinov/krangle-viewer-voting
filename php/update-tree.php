<?php 
  echo 'failed';
  exit();
  $_POST = json_decode(file_get_contents("php://input"), true);

  if (!isset($_POST['newTree'])) {
    echo 'failed';
    exit();
  }
  $path = __DIR__.'/global-tree.json';

  try {
    $newTree = $_POST['newTree'];

    // READ global tree json
    $jsonString = file_get_contents($path);
    $globalTree = json_decode($jsonString, true);

    foreach($newTree as $key => $value) {
      $newValue = $value;
      // check if gloal tree value exists
      if(!isset($globalTree[$key])) {
        $newValue = array($value => 1);
      } else if(is_array($globalTree[$key])) {
        $newValue = $globalTree[$key];
        $newValue[$value] = intval($newValue[$value] ?? "0") + 1;
      } else {
        if ($globalTree[$key] == $value) {
          $newValue = array($value => 2);
        } else {
          $newValue = array($value => 1, $globalTree[$key] => 1);
        }
      }
      
      //overwrite global tree
      $globalTree[$key] = $newValue;
    }

    // WRITE to global tree json
    file_put_contents($path, json_encode($globalTree, true), LOCK_EX);

    echo 'success';
    exit();
  } catch (Exception $e) {
    // echo $e;
    echo 'failed';
    exit();
  }
?>