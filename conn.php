<?php
    $conn = mysql_connect('localhost','root','');
    $db = mysql_select_db('eddlos', $conn);
	mysql_query("SET NAMES 'utf8'", $conn);
	?>