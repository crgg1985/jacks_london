<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM category WHERE category_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>