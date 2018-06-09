<?php
$jsonBTC = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1/');
$jsonDOGE = file_get_contents('https://api.coinmarketcap.com/v2/ticker/74/');
$jsonLTC = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2/');
$jsonDASH = file_get_contents('https://api.coinmarketcap.com/v2/ticker/131/');
$jsonBCH = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1831/');


$jsonBTC = json_decode($jsonBTC);
$jsonDOGE = json_decode($jsonDOGE);
$jsonLTC = json_decode($jsonLTC);
$jsonDASH = json_decode($jsonDASH);
$jsonBCH = json_decode($jsonBCH);


$priceBTC = $jsonBTC->{'data'}->{'quotes'}->{'USD'}->{'price'};
$priceDOGE = $jsonDOGE->{'data'}->{'quotes'}->{'USD'}->{'price'};
$priceLTC = $jsonLTC->{'data'}->{'quotes'}->{'USD'}->{'price'};
$priceDASH = $jsonDASH->{'data'}->{'quotes'}->{'USD'}->{'price'};
$priceBCH = $jsonBCH->{'data'}->{'quotes'}->{'USD'}->{'price'};
?>