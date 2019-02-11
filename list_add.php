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

<form method="post" action="list_add_check.php">
店名：
<input type="text" name="name" class="input">（必須）<br>
<br>
URL：
<input type="url" name="url" class="input">（必須）<br>
<br>
メモ：
<input type="text" name="cmt" class="input"><br>
<br>
<input type="button" onclick="history.back()" value="戻る" class="button">
<input type="submit" value="追加" class="button">
</form>

</body>
</html>