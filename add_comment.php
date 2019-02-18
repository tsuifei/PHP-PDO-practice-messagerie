<?php
  require_once('../conn42.php');
  // print_r($_POST);

  $parent_id = $_POST['parent_id'];
  $nickname = $_POST['nickname'];
  $comment = $_POST['msg_content'];
  

  $sql = "INSERT INTO msgboard(parent_id,nickname, comment) values(?,?,?)";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($parent_id, $nickname, $comment));
  
  header('Location: index.php');

?>