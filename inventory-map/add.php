<?php

include("connect.php");

$sql = "INSERT INTO test2 (floorid, nameid, locationid, ip, floorport, switchport, purchasedate, serialid, ownerid, notes, svgid) 
VALUES (:floorid, :nameid, :locationid, :ip, :switchport, :floorport, :purchasedate, :serialid, :ownerid, :notes, :svgid)";

$floorid = $_POST['floorid'];
$nameid = $_POST['nameid'];
$locationid = $_POST['locationid'];
$ip = $_POST['ip'];
$floorport = $_POST['floorport'];
$switchport = $_POST['switchport'];
$purchasedate = $_POST['purchasedate'];
$serialid = $_POST['serial'];
$ownerid = $_POST['ownerid'];
$notes = $_POST['notes'];
$svgid = $_POST['svgid'];

$statement = $conn->prepare($sql);
$statement->bindValue(':svgid', $svgid, PDO::PARAM_STR);
$statement->bindValue(':floorid', $floorid, PDO::PARAM_STR);
$statement->bindValue(':nameid', $nameid, PDO::PARAM_STR);
$statement->bindValue(':locationid', $locationid, PDO::PARAM_STR);
$statement->bindValue(':ip', $ip, PDO::PARAM_STR);
$statement->bindValue(':floorport', $floorport, PDO::PARAM_STR);
$statement->bindValue(':switchport', $switchport, PDO::PARAM_STR);
$statement->bindValue(':purchasedate', $purchasedate, PDO::PARAM_STR);
$statement->bindValue(':serialid', $serialid, PDO::PARAM_STR);
$statement->bindValue(':ownerid', $ownerid, PDO::PARAM_STR);
$statement->bindValue(':notes', $notes, PDO::PARAM_STR);
$insert = $statement->execute();

$conn=null;

header("Location: add.html");
exit;

?>