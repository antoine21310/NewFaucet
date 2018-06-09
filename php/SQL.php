<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPW = "";

$linksSQL = "SELECT * FROM `faucet_links` ORDER BY rand() LIMIT 0,100";

$dbFaucet = mysqli_connect('localhost', $dbUser, $dbPW, 'faucet');

$links = $dbFaucet->query($linksSQL);
?>