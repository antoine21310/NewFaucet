<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$checkPasswdSQL = "SELECT Password FROM faucet_users WHERE Username = '{$username}' ";

$dbSubmit = mysqli_connect('localhost', 'root', '', 'faucet');

$passwd = $dbSubmit->query($checkPasswdSQL);

$passwordDB = mysqli_fetch_assoc($passwd);

if(password_verify($password, $passwordDB['Password'])){
	$return = array(
		'success' => '0',
		'message' => 'ok');
	echo json_encode($return);
}
else{
	$return = array(
		'success' => '0',
		'message' => 'no');
	echo json_encode($return);
}