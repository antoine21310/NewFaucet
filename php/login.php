<?php 

$username = htmlspecialchars($_POST['username']);

$password = htmlspecialchars($_POST['password']);

$checkPasswdSQL = "SELECT Password FROM faucet_users WHERE Username = '{$username}' ";

$dbSubmit = mysqli_connect('localhost', 'root', '', 'faucet');

$passwd = $dbSubmit->query($checkPasswdSQL);

$passwordDB = mysqli_fetch_assoc($passwd);
$username = base64_encode($username);


$cookie = $passwordDB['Password'] . ':' . $username;

if(password_verify($password, $passwordDB['Password'])){
	setcookie('cookie', $cookie, time() + 365*24*3600, '/', null, false, true);
	$return = array(
		'success' => '1',
		'message' => $cookie);
	echo json_encode($return);
	//header("location: ".$_SERVER["PHP_SELF"]);

}
else{
	$return = array(
		'success' => '0',
		'message' => 'no');
	echo json_encode($return);
}

?>