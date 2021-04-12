<?php
$xml1 = file_get_contents('https://playerbros.com/kategori/espor/feed');
file_put_contents('./xml/espor.xml', $xml1);

$xml2 = file_get_contents('https://playerbros.com/kategori/valorant/feed');
file_put_contents('./xml/valorant.xml', $xml2);

$xml3 = file_get_contents('https://playerbros.com/kategori/csgo/feed');
file_put_contents('./xml/csgo.xml', $xml3);

$xml4 = file_get_contents('https://playerbros.com/kategori/guncel/feed');
file_put_contents('./xml/guncel.xml', $xml4);
 ?>
