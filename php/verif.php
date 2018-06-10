<?php 
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

$msgSuccess = '<div class="alert alert-success">Successfully registered !</div>';
$msgAlready = '<div class="alert alert-warning">Username already used !</div>';
$msgBlank = '<div class="alert alert-warning">All fields are required !</div>';
$msgInvalid = '<div class="alert alert-warning">Your e-mail looks invalid !</div>';

$registerSQL = "INSERT INTO faucet_users (Email,username, Password) VALUES ('{$email}','{$username}', '{$password}')";
$alreadyUsernameSQL = "SELECT COUNT(Username) as countUsername from faucet_users where Username='{$username}'";

$dbSubmit = mysqli_connect('localhost', 'root', '', 'faucet');


$alreadyUsername = $dbSubmit->query($alreadyUsernameSQL);

$countUsername = mysqli_fetch_assoc($alreadyUsername);



if($countUsername['countUsername'] != '0'):
	$return = array(
		'success' => '0',
		'message' => $msgAlready);
	echo json_encode($return);
elseif($email == '' || $password == '' || $username == ''):
	$return = array(
		'success' => '0',
		'message' => $msgBlank);
	echo json_encode($return);
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == 'false'):
	$return = array(
		'success' => '0',
		'message' => $msgInvalid);
	echo json_encode($return);
else:
	$dbSubmit->query($registerSQL);
	$return = array(
		'success' => '1',
		'message' => $msgSuccess);
	echo json_encode($return);
endif;

?>