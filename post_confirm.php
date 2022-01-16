<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];

function h($value){

   return htmlspecialchars($value,ENT_QUOTES);
   
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>

    <ul>
        <!-- <li> お名前：<?= $name ?> </li> -->
        <li> お名前：<?php echo h($name); ?> </li>
        <li> Mail：<?= $mail ?> </li>
    </ul>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>