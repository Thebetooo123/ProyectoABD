<?php 
	//$string = file_get_contents("../json/tickets.json");
	//$json_a = json_decode($string, true);
	$json = file_get_contents("php://input");
 	$file = fopen('../json/version.json','w');
  	//fwrite($file, $json_a);
  	fwrite($file, $json);
  	fclose($file);
 ?>