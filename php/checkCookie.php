<?php
if(isset($_COOKIE['cookie'])){	
	$cki = explode(':', $_COOKIE['cookie']);

	$username = base64_decode($cki[1]);
	$password = $cki[0];
	echo $username;
	$checkPasswdSQL = "SELECT Password FROM faucet_users WHERE Username = '{$username}' ";

	$dbSubmit = mysqli_connect('localhost', 'root', '', 'faucet');

	$passwd = $dbSubmit->query($checkPasswdSQL);

	$passwordDB = mysqli_fetch_assoc($passwd);

	if($password == $passwordDB['Password']){
		echo "connecté";
	}
	else{
		echo "erreur coockie";
	}

}	

?>