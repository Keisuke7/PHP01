<html>
<head>
	<meta charset="utf-8">
	<title>GET練習</title>
</head>
<body>

<!-- URLにくっつけて送るのでパスワードなどはよくない。 -->
<form action="get_confirm.php" method="get">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<input type="submit" value="送信">
</form>

<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>