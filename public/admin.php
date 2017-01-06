<?php
$data = file_get_contents(__DIR__.'/../data/last_message.json', FILE_USE_INCLUDE_PATH);
$data_decode = json_decode($data);
?>
<h4> <?= $data_decode->nom; ?> </h4>
<p> <?= $data_decode->message; ?></p>