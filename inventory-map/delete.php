<?php

include "connect.php"; // Using database connection file here

$id = $_REQUEST["id"]; // get id through query string

$step=$conn->prepare("DELETE FROM test2 WHERE randomkey=:id");
$step->bindParam(":id",$id,PDO::PARAM_INT);
$step->execute();

header("Location: index.html");
exit;

?>