<?php
include 'config.php';

extract($_POST);
$sql = "insert into task (empid,title,description,category,members,date) value ($empid,'$title','$description',$category,$members,'$date')";

try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	echo 'done';
} catch(PDOException $e) {
	echo 'error';
}


?>