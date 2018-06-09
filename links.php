<?php
include("php/getIP.php");
$dbHost = "localhost";
$dbUser = "root";
$dbPW = "";
$IP = get_ip();

$linksSQL = "SELECT * FROM `faucet_links` ORDER BY rand() LIMIT 0,100";
$allMyLinksSQL = "SELECT * FROM `faucet_links` WHERE IP = '{$IP}'";

$dbFaucet = mysqli_connect('localhost', $dbUser, $dbPW, 'faucet');

$links = $dbFaucet->query($linksSQL);
$allMyLinks = $dbFaucet->query($allMyLinksSQL);

$content ="
<head>
   <title>Faucet</title>
   <meta name='viewport' content='width=device-width, user-scalable=no'>
   <meta charset='utf-8'>
   <link rel='stylesheet' href='css/bootstrap.min.css'>
   <link rel='stylesheet' type='text/css' href='css/animate.min.css'>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css' integrity='sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp' crossorigin='anonymous'>
   <link rel='stylesheet' type='text/css' href='css/style.css'>
   <script type='text/javascript' src='js/jquery.js'></script>
   <script type='text/javascript' src='js/popper.js'></script>
   <script type='text/javascript' src='js/bootstrap.min.js'></script>
   <script type='text/javascript' src='js/particles.js'></script>
   <script type='text/javascript' src='js/popover.js'></script>
</head>
<style>td a{display:block;}</style>
<h1>List</h1>Submit your links

<!-- Button trigger modal -->
<a style='cursor:pointer;' data-toggle='modal' data-target='#Modal'>
here</a>.

<!-- Modal -->
<div class='modal fade' id='Modal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<button  type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span style='color:black;' aria-hidden='true'>&times;</span></button>
<h2 class='modal-title' id='exampleModalLabel'>Submit your url</h2>

</div>
<div class='modal-body'>
<div id='return'></div>

<label>Owner :</label>
<input type='text' class='form-control' id='owner' name='owner' autofocus>

<label>Url :</label>
<input type='url' class='form-control' id='url' name='url' >

<br>
<button id='submit' class='btn btn-primary'>Send</button>


<script type='text/javascript' src='/js/submitLinks.js'></script>


</div>

</div>
</div>
</div>
</br>
Please click on other's links and &quot;Skip ad&quot; to generate revenue.
<div id='returnClic'></div>

<pre><table><th>Owner</th><th>My links</th><th>Clicks</th><th>Delete</th>";

while($myLinks = mysqli_fetch_array($allMyLinks))
{
	$content .= "<tr><td>".$myLinks['Owner']."</td>";

	$content .= "<td><a onClick='clic(this.id)' class='mylink' id='".$myLinks['Url']."' target='_blank' href='".$myLinks['Url']."''>".$myLinks['Url']."</a></td>";

	$content .= "<td>".$myLinks['Clics']."</td><td><a id='".$myLinks['Url']."' href='#' onClick='del(this.id)'>X</a></tr>";

}

$content.="
<pre><table><th>Owner</th><th>Links</th><th>Clicks</th>";

while($allLinks = mysqli_fetch_array($links))
{
	$content .= "<tr><td>".$allLinks['Owner']."</td>";

	$content .= "<td><a onClick='clic(this.id)' class='link' id='".$allLinks['Url']."' target='_blank' href='".$allLinks['Url']."''>".$allLinks['Url']."</a></td>";

	$content .= "<td>".$allLinks['Clics']."</td></tr>";

}
$content .= "</table></pre>


";
echo $content;
?>