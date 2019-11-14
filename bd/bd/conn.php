<?php

$con = new mysqli("localhost", "root", "usbw", "db_evento");
$con -> query ("SET NAMES 'utf8'");
$con -> query ('SET character_set_connection = utf8');
$con -> query ('SET character_set_client = utf8');
$con -> query ('SET character_set_results = utf8');

?>