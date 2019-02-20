<?php
  require_once('../conn42.php');
  require_once('./utils/utils.php');
  // print_r($_POST);

  $parent_id = escapeIn($_POST['parent_id']);
  $nickname = escapeIn($_POST['nickname']);
  $comment = escapeIn($_POST['msg_content']);
  

  $sql = "INSERT INTO msgboard(parent_id,nickname, comment) values(?,?,?)";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($parent_id, $nickname, $comment));
  
  header('Location: index.php');

?>