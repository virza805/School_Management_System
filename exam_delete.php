<?php 
	include "database.php";
	session_start();

	$s="delete from exam where EID={$_GET["id"]} ";

	$db->query($s);
	echo "<script>window.open('set_exam.php?mes=Exam Deleted.','_self'); </script>";
 ?>
