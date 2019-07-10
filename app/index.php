<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_GET["comment"]) && isset($_GET["userName"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_GET["comment"]);
        $userName = htmlspecialchars($_GET["userName"]);
        print("${userName}のコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="GET" action="index.php">
          <label for="comment">コメント:</label>
          <input name="comment"/>
          <label for="userName">名前：</label>
        　<input name="userName"/>

        　    
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>