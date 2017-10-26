<?php
/**
 * Created by PhpStorm.
 * User: Krakonos
 * Date: 15.10.2017
 * Time: 18:48
 */

require_once "zoo.class.php";
require_once "zvire.class.php";

$zoo = new Zoo;

$zvire1 = new Zvire("Kočka");
$zvire2 = new Zvire("Pes");

$zoo->pridej($zvire1);
$zoo->pridej($zvire2);

echo "Výpis všech zvířat: ";
echo $zoo->seznamZvirat($zoo->ziskejZvire());
echo "<br> ";
echo "Aktuální počet zvířat je: " . $zoo->vypisPocet();


echo "<br>______________________ <br>";
echo "Odstraní se z pole Pes <br>";
$zoo->odstran($zvire2);
echo "Výpis všech zvířat: ";
echo $zoo->seznamZvirat($zoo->ziskejZvire());


echo "Aktuální počet zvířat je: " . $zoo->vypisPocet();
echo "<br>______________________ <br>";


$zoo->destructor($zoo);
echo "<br>______________________ <br>";
echo "Aktuální počet zvířat je: " . $zoo->vypisPocet();