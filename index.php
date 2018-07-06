<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Bookmark データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="jumbotron">
   <fieldset>
    <legend>本の登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <!-- <label>ファイル：<input type="file" name="up_file"></label><br> -->
     <label>感想：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<p>管理者ログイン</p>
  <form method="post" action="manager_act.php">
    <input type="text" name="lid" placeholder="ID" required>
    <input type="text" name="lpw" placeholder="pass" required>
    <input type="submit" value="ログイン">
  </form>
<!-- Main[End] -->


</body>
</html>
