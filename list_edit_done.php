<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant List</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Restaurant List</h1>
<p>〈編集〉</p>

<?php

try {

$code = $_POST['code'];
$name = $_POST['name'];
$url = $_POST['url'];
$cmt = $_POST['cmt'];

$code = htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
$cmt = htmlspecialchars($cmt, ENT_QUOTES, 'UTF-8');

//DB接続
$dsn = 'mysql:host=mysql7029.xserver.jp;dbname=tomakoblog_list;charset=utf8';
$user = 'tomakoblog_dbt';
$password = 'password';
$dbh = new PDO($dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'UPDATE list SET name=?,url=?,cmt=? WHERE code=?';
$stmt = $dbh -> prepare($sql);
$data[] = $name;
$data[] = $url;
$data[] = $cmt;
$data[] = $code;
$stmt -> execute($data);

$dbh = null;

echo '修正しました。';

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