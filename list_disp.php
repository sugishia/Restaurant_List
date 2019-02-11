<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant List</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Restaurant List</h1>
<p>〈参照〉</p>

<?php

try {

$code = $_GET['listcode'];

//DB接続
$dsn = 'mysql:host= ;dbname= ;charset=utf8';
$user = ' ';
$password = ' ';
$dbh = new PDO($dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT code,name,url,cmt FROM list WHERE code=?';
$stmt = $dbh ->prepare($sql);
$data[] = $code;
$stmt -> execute($data);

$rec = $stmt -> fetch(PDO::FETCH_ASSOC);

$name = $rec['name'];
$url = $rec['url'];
$cmt = $rec['cmt'];

$dbh = null;

} catch (Exception $e) {
    echo '障害によりご迷惑をおかけしております。';
    exit();
}

?>

店名：<?php echo $name; ?><br>
<br>
URL：<a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a><br>
<br>
メモ：<?php echo $cmt; ?><br>
<br>
<br>
<a href="list.php">リストへ戻る</a>

</body>
</html>
