<?php
require_once 'Zvire.php';
require_once 'ZOO.php';

$zoo = new ZOO();

$zvire1 = new Zvire("Zirafa");
$zvire2 = new Zvire("Lev");
$zvire3 = new Zvire("Slon");

$zoo->pridejZvire($zvire1);
$zoo->pridejZvire($zvire2);
$zoo->pridejZvire($zvire3);

echo 'Seznam zvirat v ZOO: ';
echo $zoo->vypisZOO($zoo);
echo '<br />';
echo 'Pocet zvirat v ZOO: ';
echo $zoo->vypisPocet();



