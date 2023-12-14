<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'baza';

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if(isset($_POST['submit'])){
	$data = $_POST['data'];
	$osob = $_POST['osob'];
	$telefon = $_POST['telefon'];
	$rodo = $_POST['rodo'];
	
	$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', $osob, $telefon)";
	mysqli_query($db, $sql);
	
	echo 'Dodano rezerwacje do bazy';
}
else{
	echo 'Nie dodano rezerwacji';
}


mysqli_close($db);
?>