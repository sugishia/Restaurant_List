<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant List</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Restaurant List</h1>

<?php

try {
    
//DB接続
$dsn = 'mysql:host=mysql7029.xserver.jp;dbname=tomakoblog_list;charset=utf8';
$user = 'tomakoblog_dbt';
$password = 'password';
$dbh = new PDO($dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT code,name FROM list WHERE 1';
$stmt = $dbh ->prepare($sql);
$stmt -> execute();

$dbh = null;

echo '<form method="post" action="branch.php">';
while (true) {
    $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
    if ($rec == false) {
        break;
    }
    echo '<input type="radio" name="listcode" value="'.$rec['code'].'">';
    echo $rec['name'].'<br/>';
}
echo '<br/>';
echo '<br/>';
echo '<input type="submit" name="edit" value="修正" class="button">';
echo '<input type="submit" name="delete" value="削除" class="button">';
echo '<input type="submit" name="disp" value="参照" class="button">';
echo '<br/>';
echo '<br/>';
echo '<input type="submit" name="add" value="リストを追加する" class="button_add">';
echo '</form>';

} catch (Exception $e) {
    echo '障害によりご迷惑をおかけしております。';
    exit();
}

?>

</body>
</html>