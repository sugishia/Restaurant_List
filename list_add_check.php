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

$name = $_POST['name'];
$url = $_POST['url'];
$cmt = $_POST['cmt'];

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
$cmt = htmlspecialchars($cmt, ENT_QUOTES, 'UTF-8');

//店名が空欄の場合
if($name == '') {
    echo '店名が空欄です！！'.'<br>';
} else {
    echo '店名： '.$name.'<br>';
}

//URLが空欄の場合
if($url == '') {
    echo 'URLが空欄です！！'.'<br>';
} else {
    echo 'URL： '.$url.'<br>';
}

//メモが空欄の場合
if($cmt == '') {
    echo ''.'<br>';
} else {
    echo 'メモ： '.$cmt.'<br>';
}

if($name=='' || $url =='') {
    echo '<input type="button" onclick="history.back()" value="戻る">';
} else {
    echo '<br>'; 
    echo '<br>';    
    echo '上記内容で追加してよろしいですか？'.'<br>';
    echo '<br>';    

    echo '<form method="post" action="list_add_done.php">';
    echo '<input type="hidden" name="name" value="'.$name.'">';
    echo '<input type="hidden" name="url" value="'.$url.'">';
    echo '<input type="hidden" name="cmt" value="'.$cmt.'">';
    echo '<input type="button" onclick="history.back()" value="戻る" class="button">';
    echo '<input type="submit" value="追加" class="button">';
    echo '</form>';

}

?>

</body>
</html>