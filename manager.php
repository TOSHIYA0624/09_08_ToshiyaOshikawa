<?php
session_start();
include("funcs.php");

loginCheck();

$pdo = db_connect();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理者画面</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">管理者画面</div>
    </div>
  </nav>
</header>

<p><?php echo $_SESSION["name"]; ?>さんこんにちは。</p>


<?php if($_SESSION["kanri_flg"]==1){?>
<a href="manager_list.php">管理者一覧</a><br><br>
<?php }?>

<a href="select.php">Bookmark一覧</a><br><br>

<a href="logout.php">ログアウト</a><br><br>
</body>
</html>