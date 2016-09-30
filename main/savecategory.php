<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
// query
$sql = "INSERT INTO category (descripcion) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
header("location: category.php");


?>