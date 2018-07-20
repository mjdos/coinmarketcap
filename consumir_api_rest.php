<?php

#################################
##### PHP 7.2               #####
##### Marcelo Santos        #####
##### mjdos.2014@gmail.com  ##### 
#################################

$url = 'https://api.coinmarketcap.com/v2/listings/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$out = curl_exec($ch);
curl_close($ch);

$resultado  = json_decode($out);

foreach($resultado->data as $coins){

    echo 'ID = ' . $coins->id.'<br>';
    echo 'Name = ' . $coins->name.'<br>';
    echo 'Symbol = ' . $coins->symbol.'<br>';
    echo 'Website Slug = ' . $coins->website_slug.'<br>';
    echo '<br>';

}

?>