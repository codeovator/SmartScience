<?php
include 'config.php';
extract($_POST);
extract($Form);
$sql = "insert into employee (firstName,lastName,managerId,title,department,officePhone,cellPhone,email,city,picture,devices) value ('$firstName','$lastName','$managerId','$title','$department','$officePhone','$cellPhone','$email','$city','$picture','$devices')";
echo"$sql";
try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	echo 'done';
} catch(PDOException $e) {
echo 'error';}
?>
