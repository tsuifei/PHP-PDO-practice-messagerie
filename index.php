<?php require_once('../conn42.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Message board</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
  <div class="wrap">
    <h1 class="site-name">
      Message Board
    </h1>
    <!-- 主留言框 -->
    <div class="add_comment">
      <form method="POST" action="add_comment.php">
        <div class="board__form-input">
        <input type="text" name="nickname" id="" placeholder="name">
        </div>
        <div class="board__form-textarea">
        <textarea name="msg_content" id="" cols="30" rows="5" placeholder="message"></textarea>
        </div>
        <input type="hidden" name="parent_id" value="0" id="" >
        <input type="submit" value="Send" class="bnt">
      </form>
    </div>

    <?php
      // 顯示所有留言
      $sql = "SELECT * FROM msgboard 
        WHERE parent_id = 0 
        ORDER BY created_at DESC";
      $stmt = $db->prepare($sql); 
      $stmt -> execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>
    
     <!-- 所有留言 -->
      <div class='comments'>
      <?php
      // while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
        foreach($results as $row){
        // var_dump($row);
        ?>
     
          <!-- // 主留言  -->
          <div class='comment'>
            <div class='comment__bloc'>
            <div class='comment__author'><? echo $row['nickname'] . " : "?>
            <span class='comment__content'><? echo $row['comment'] ?></span>
            </div>
            <div class='comment__timestamp'><? echo $row['created_at'] ?></div>
          

            <!-- // 子留言 -->
            <div class='sub-comment'>
            
              <?php
              $parent_id = $row['ID'];
              $sql_child = "SELECT * 
                FROM msgboard 
                WHERE parent_id = $parent_id 
                ORDER BY created_at DESC";
              $stmt = $db->prepare($sql_child); 
              $stmt -> execute();
              // $row_sub = $stmt->fetch(PDO::FETCH_ASSOC); 
              while($row_sub = $stmt->fetch(PDO::FETCH_ASSOC)){
          ?>
                  <div class='comment__bloc'>
                    <div class='comment__author'><? echo $row_sub['nickname'] . " : "?>
                    <span class='comment__content'><? echo $row_sub['comment'] ?></span>
                  </div>
                  <div class='comment__timestamp'><? echo $row_sub['created_at'] ?></div>
                </div>
                  <?php }  // fin while ?>
              

                <!-- 子留言框 -->
                <div class="add-sub-comment">
                  <form action="add_comment.php" method="POST">
                    <div class="board__form-input">
                    <input type="text" name="nickname" id="" placeholder="name">
                    </div>
                    <div class="board__form-textarea">
                    <textarea name="msg_content" id="" cols="30" rows="3" placeholder="message"></textarea>
                    </div>
                    <input type="hidden" name="parent_id" value="<?php echo $row['ID']; ?>" > 
                    <input type="submit" value="Send" class="bnt">
                  </form>
                </div>

            </div>  
            </div>

        </div>

        <?php }  // fin while ?>
        </div> 
    
  </div> <!-- fin wrap -->
  </body>
</html>