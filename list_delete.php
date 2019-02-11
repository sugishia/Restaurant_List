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

echo '店名： '.$name.'<br/>';
echo 'URL： '.$url.'<br/>';
echo 'メモ： '.$cmt.'<br/>';

} catch (Exception $e) {
    echo '障害によりご迷惑をおかけしております。';
    exit();
}
?>
<br>
上記内容を削除してよろしいでしょうか？<br>
<br>

<form method="post" action="list_delete_done.php">
<input type="hidden" name="code" value="<?php echo $code;?>">
<input type="button" onclick="history.back()" value="戻る" class="button">
<input type="submit" value="削除" class="button">
</form>

</body>
</html>
