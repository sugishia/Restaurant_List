<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant List</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Restaurant List</h1>
<p>〈削除〉</p>

<?php

try {

$code = $_POST['code'];

//DB接続
$dsn = 'mysql:host=mysql7029.xserver.jp;dbname=tomakoblog_list;charset=utf8';
$user = 'tomakoblog_dbt';
$password = 'password';
$dbh = new PDO($dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'DELETE FROM list WHERE code=?';
$stmt = $dbh -> prepare($sql);
$data[] = $code;
$stmt -> execute($data);

$dbh = null;

echo '削除しました。';

} catch (Exception $e) {
    echo '障害によりご迷惑をおかけしております。';
    exit();
}

?>

<br>
<br>
<a href="list.php">リストへ戻る</a>

</body>
</html>