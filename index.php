<?php 
session_start();
//db接続文字列
$dsn = "mysql:host = 127.0.0.1;dbname=NENE_QUEST;charset=utf8mb4";
//※data source name
//127.0.0.1=localhost

$db_user = "root"; //既定の管理ユーザ
$db_password = "";


//DB操作用オブジェクトの作成

$pdo = new PDO($dsn, $db_user, $db_password);

//PDOの設定変更（エラー黙殺→例外発生）
$pdo->setAttribute(
	PDO::ATTR_ERRMODE,          //3
	PDO::ERRMODE_EXCEPTION);    //2

$sql = "select * from players order by LPAD(score,4,0) desc,time";

//SQL実行
$dbh = $pdo->query($sql);
$index = 0;
$players;
while($record = $dbh->fetch(PDO::FETCH_ASSOC)){
	//インスタンスのみ→PDO::FETCH_NUM
	//連想配列のみ→PDO::FETCH_ASSOC
	//両方→PDO::FETCH_BOTH（メモリの無駄）
	//print_r($record);
	setcookie("id[$index]" , $record["id"]);
	setcookie("name[$index]" , $record["name"]);
	setcookie("score[$index]" , $record["score"]);
	setcookie("time[$index]" , $record["time"]);
	setcookie("date[$index]" , $record["date"]);
	$index++;

}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>NENE QUEST!</title>
	
	<link rel="icon" href="img/nenequest.ico" type="image/vnd.microsoft.icon" />
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	</script>
</head>
<body>


	<div class="side_left">
		<img src="img/controler.png" alt="">
		<p><img src="img/ATK_up.png" alt=""></p>
	</div>

	<div class="side_right">
		<img src="img/keyboard.png" alt="">
	</div>

	<div class = "game">
	<canvas id="canvas"></canvas>
	<p><a href="introduction.html">NENE QUESTとは</a></p>
	
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/three.min.js">></script>
	<script type="text/javascript" src="js/CSS3DRenderer.js">></script>

</body>
</html>