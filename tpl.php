<?php
//include("php/price.php");
include("php/SQL.php");
include("php/getIP.php");

$css = '

<meta name="viewport" content="width=device-width, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
';

$js = '
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/popover.js"></script>

<script type="text/javascript" src="js/submitLinks.js"></script>
';

$titleHome = 'Cryptomine';
$titleHome = 'Cryptomine - Links exchange';

$navbarHome = '
<nav class="navbar sticky-top navbar-expand-lg navbar-dark animated shadow">
<a class="navbar-brand" href="#">Cryptomine</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse animated fadeIn" id="navbarText">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Claim</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">List</a>
</li>
<li class="nav-item">
<a class="nav-link" href="links.php">Links exchange</a>
</li>
</ul>
<span class="navbar-text">
<i class="fas fa-user margin-right-10"></i><a class="" href="account.php">My Account</a>
<a class="" data-toggle="modal" data-target="#Modal" href="#">Login / Register</a>
<a id="logout" href="#">Logout</a>
</span>
</div>
</nav>
';

$navbarLinks = '
<nav class="navbar sticky-top navbar-expand-lg navbar-dark animated  shadow">
<a class="navbar-brand" href="#">Cryptomine</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse animated fadeIn" id="navbarText">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Claim</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">List</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="links.php">Links exchange</a>
</li>
</ul>
<span class="navbar-text">
<i class="fas fa-user margin-right-10"></i><a class="" href="account.php">My Account</a>
</span>
</div>
</nav>
';

$modal = '
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title" id="exampleModalLabel">Login</h2>
<button  type="button" class="close" data-dismiss="modal" aria-label="Close">
<span style="color:black;" aria-hidden="true">&times;</span></button>


</div>
<div class="modal-body">
<div id="return"></div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<label>Username :</label>
<input type="text" class="form-control" id="usernameL" >

<label>Password :</label>
<input type="text" class="form-control" id="passwordL" >

<br>
<button id="login" class="btn btn-primary">Send</button>


</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<label>Email :</label>
<input type="text" class="form-control" id="emailR" autofocus>

<label>Username :</label>
<input type="text" class="form-control" id="usernameR" >

<label>Password :</label>
<input type="text" class="form-control" id="passwordR" >

<br>
<button id="register" class="btn btn-primary">Send</button>
<script type="text/javascript" src="js/login.js"></script>
</div>
</div>


</div>

</div>
</div>
</div>
';

$adTop = '
<center>
<pre class="rounded margin-top-20 margin-bottom-20 animated swing" ><div class="rounded animated " style="height: 90px; width: 728px; background-color: lightgrey;"></div></pre>
</center>
';

$adBot = '
<center>
<pre class="rounded margin-bottom-20 animated swing" >
<iframe class="rounded align-middle ad" data-aa="933427" src="//ad.a-ads.com/933427?size=728x90" scrolling="no" style="width:728px; height:90px; border:0px; padding:0;overflow:hidden" allowtransparency="true"></iframe>
</pre>
</center>
';

$adRight = '
<center>
<pre class="rounded margin-bottom-20 animated swing" ><div class="rounded animated " style="height: 100px; width: 300px; background-color: lightgrey;"></div></pre>
</center>
';

$news = '
<div class="card shadow animated fadeIn ">
<div class="card-header">News</div>
<div class="card-body">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in repre class="rounded"henderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in repre class="rounded"henderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
</div>
</div>
';

$whIsBitcoin = '
<div class="card shadow animated fadeIn">
<div class="card-header">What is Bitcoin</div>
<div class="card-body">
Bitcoin is a worldwide cryptocurrency and digital payment system called the first decentralized digital currency, since the system works without a central repository or single administrator.
It was invented by an unknown programmer, or a group of programmers, under the name Satoshi Nakamoto and released as open-source software in 2009.</br></br> 
The system is peer-to-peer, and transactions take place between users directly, without an intermediary. These transactions are verified by network nodes and recorded in a public distributed ledger called a blockchain.
Besides being created as a reward for mining, bitcoin can be exchanged for other currencies, products, and services. 
As of February 2015, over 100,000 merchants and vendors accepted bitcoin as payment. Bitcoin can also be held as an investment. According to research produced by Cambridge University in 2017, there are 2.9 to 5.8 million unique users using a cryptocurrency wallet, most of them using bitcoin.
</div>
</div>
';

$links = '
<div class="card shadow animated fadeIn ">
<div class="card-header">Links exchange</div>
<div class="card-body">



</div>
</div>
';

$lastClaims = '
<div class="card margin-top-20 shadow animated ">
<div class="card-header">Last claims</div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in repre class="rounded"henderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
';

$lastWithdrawals = '
<div class="card shadow animated ">
<div class="card-header">Last withdrawals</div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in repre class="rounded"henderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
';

/*$price = '
<div class="col-md">
<div class="card shadow animated pulse">
<div class="card-header">Bitcoin</div>
<div class="card-body text-center">'.$priceBTC.'$</div>
</div>
</div>
<div class="col-md">
<div class="card shadow animated pulse">
<div class="card-header">Dogecoin</div>
<div class="card-body text-center">'.$priceDOGE.'$</div>
</div>
</div>
<div class="col-md">
<div class="card shadow animated pulse">
<div class="card-header">Litecoin</div>
<div class="card-body text-center">'.$priceLTC.'$</div>
</div>
</div>
<div class="col-md">
<div class="card shadow animated pulse">
<div class="card-header">Dashcoin</div>
<div class="card-body text-center">'.$priceDASH.'$</div>
</div>
</div>
<div class="col-md">
<div class="card shadow animated pulse">
<div class="card-header">Bitcoin Cash</div>
<div class="card-body text-center">'.$priceBCH.'$</div>
</div>
</div>
';*/

$footer = '
<footer class="container-fluid page-footer shadow">
<div class="row">
<div class="col-md-6 mt-md-0 mt-3">
<h5 class="text-uppercase">Footer Content</h5>
<p>Here you can use rows and columns here to organize your footer content.</p>
</div>
<hr class="clearfix w-100 d-md-none pb-3">
<div class="col-md-6 mb-md-0 mb-3">
<h5 class="text-uppercase">Links</h5>
<ul class="list-unstyled">
<li>
<a href="#!">Link 1</a>
</li>
<li>
<a href="#!">Link 2</a>
</li>
<li>
<a href="#!">Link 3</a>
</li>
<li>
<a href="#!">Link 4</a>
</li>
</ul>
</div>
</div>
<div class="row">
<div class="footer-copyright container-fluid text-center border-top border-light">© 2018 Copyright:
<a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
</div>
</div>
</footer>
'

?>