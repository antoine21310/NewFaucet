<?php 
$email = htmlspecialchars($_POST['email']);

$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

$username = htmlspecialchars($_POST['username']);

$date = date("Y-m-d H:i:s", strtotime('+2 hours'));

$msgSuccess = '<div class="alert alert-success">Successfully registered !</div>';
$msgAlreadyUsername = '<div class="alert alert-warning">Username already used !</div>';
$msgAlreadyEmail = '<div class="alert alert-warning">Your e-mail is already used ! Try to login</div>';
$msgBlank = '<div class="alert alert-warning">All fields are required !</div>';
$msgInvalid = '<div class="alert alert-warning">Your e-mail looks invalid !</div>';

$registerSQL = "INSERT INTO faucet_users (Email,username, Password, Joined) VALUES ('{$email}','{$username}', '{$password}', '{$date}')";

$alreadyUsernameSQL = "SELECT COUNT(Username) as countUsername from faucet_users where Username='{$username}'";
$alreadyEmailSQL = "SELECT COUNT(Email) as countEmail from faucet_users where Email='{$email}'";

$dbSubmit = mysqli_connect('localhost', 'root', '', 'faucet');


$alreadyUsername = $dbSubmit->query($alreadyUsernameSQL);
$alreadyEmail = $dbSubmit->query($alreadyEmailSQL);

$countUsername = mysqli_fetch_assoc($alreadyUsername);
$countEmail = mysqli_fetch_assoc($alreadyEmail);



if($countUsername['countUsername'] != '0'):
	$return = array(
		'success' => '0',
		'message' => $msgAlreadyUsername);
	echo json_encode($return);
elseif($countEmail['countEmail'] != '0'):
	$return = array(
		'success' => '0',
		'message' => $msgAlreadyEmail);
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