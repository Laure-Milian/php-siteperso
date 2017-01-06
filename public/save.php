<?php
	//echo $last_message;
	$last_message = json_encode();
	$nom = $_POST["username"];
	$message = $_POST["message"];
	var_dump($data);
	file_put_contents(__DIR__.'/../data/last_message.json', '{"nom": "'.$nom.'", "message": "'.$message.'"}', FILE_USE_INCLUDE_PATH);
?>