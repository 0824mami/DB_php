<?php require 'header.php'; ?>
<?php
try {
	$pdo = new PDO(
		// 'mysql:host=mysql80.okachimenko.sakura.ne.jp;dbname=okachimenko_unit_db;charset=utf8',
		// 'okachimenko_unit_db',
		// 'Ryujin0909',
		'mysql:host=localhost;dbname=shop;charset=utf8',
		'staff',
		'password',
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
	);
	echo '接続成功';
	echo "\n";
	$dbh = null;
} catch (PDOException $e) {
	echo '接続失敗' . $e->getMessage();
	exit();
};

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// var_dump($pdo);
?>
<?php require 'footer.php'; ?>
