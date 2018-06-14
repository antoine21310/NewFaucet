<?php


setcookie('cookie', '', time()-1,'/');
$return = array(
	'success' => '1',
	'message' => 'ok');
echo json_encode($return);
?>