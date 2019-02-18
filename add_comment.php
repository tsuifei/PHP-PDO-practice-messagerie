<?php
  require_once('../conn42.php');
  // print_r($_POST);

  $parent_id = htmlspecialchars($_POST['parent_id'],ENT_QUOTES);
  $nickname = htmlspecialchars($_POST['nickname'],ENT_QUOTES);
  $comment = htmlspecialchars($_POST['msg_content'],ENT_QUOTES);
  

  $sql = "INSERT INTO msgboard(parent_id,nickname, comment) values(?,?,?)";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($parent_id, $nickname, $comment));
  
  header('Location: index.php');

?>