<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant List</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Restaurant List</h1>
<p>〈追加〉</p>

<?php

try {

$name = $_POST['name'];
$url = $_POST['url'];
$cmt = $_POST['cmt'];

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
$cmt = htmlspecialchars($cmt, ENT_QUOTES, 'UTF-8');

//DB接続
$dsn = 'mysql:host= ;dbname= ;charset=utf8';
$user = ' ';
$password = ' ';
$dbh = new PDO($dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO list(name,url,cmt) value(?,?,?)';
$stmt = $dbh ->prepare($sql);
$data[] = $name;
$data[] = $url;
$data[] = $cmt;
$stmt -> execute($data);

$dbh = null;

echo '追加しました。'.'<br>';

} catch(Exception $e) {
    echo '障害によりご迷惑おかけしております。';
    exit();
}

?>

<br>
<br>
<a href="list.php">リストへ戻る</a>

</body>
</html>
