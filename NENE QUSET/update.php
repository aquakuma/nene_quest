<?php 
session_start();
//db接続文字列
$dsn = "mysql:host = 127.0.0.1;dbname=aquakuma;charset=utf8mb4";
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

$name="";
$score = "";
$time = "";
$date = "";

if(isset($_COOKIE["input_name"])){
	$name='"'.$_COOKIE["input_name"].'"';
	$score = $_COOKIE["input_score"];
	$time = '"'.$_COOKIE["input_time"].'"';
	$date = '"'.$_COOKIE["input_date"].'"';
	$sql = "INSERT INTO players (name,score,time,date) VALUES ($name,$score,$time,$date)";
	$pdo->exec($sql);
}

echo $name."<br>".$score."<br>".$time."<br>".$date."<br>";


//echo $name."<br>".$score."<br>".$time."<br>".$date."<br>";

header("location:index.php");
?>