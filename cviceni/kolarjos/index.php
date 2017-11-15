<!Doctype html>

<html lang="cs-cz">

<head>
    <meta charset="UTF-8">
    <title>ZOO</title>
</head>

<body>
<?php
//nacteni trid ZVIRE a ZOO
require_once('Zvire.php');
require_once('Zoo.php');

$zoo = new zoo();//vytvoreni instance tridy ZOO
$zoo->pridaniZvirete(new zvire('Orangutan', 'Emil'));//pridani instance tridy ZVIRE do ZOO v metode pridaniZvirete
//variantne
$pes = new zvire('Pes', 'Alik');//vytvoreni instance  tridy ZVIRE
$zoo->pridaniZvirete($pes);//a nasledné pridani do zoo metodou pridaniZvirete
echo ('seznam zvirat:'); echo ('<br>');//vypis seznamu zvirat
$zoo->seznamZvirat(); echo ('<br>');
$zoo->pocetZvirat(); echo ('<br>');//vypis poctu zvirat
$zoo->odebraniZvirete(); //odebrani zvirete metodou odebraniZvirete
//kontrolni vypis seznamu a poctu
$zoo->seznamZvirat();echo('<br>');
$zoo->pocetZvirat();











/*$pes = new zvire('Pes', 'Haryk');

$kocka = new zvire('Kocka', 'Micka');

$slon = new zvire('Slon', 'Bimbo');

$poleZvirat = array();
$poleZvirat[] = $pes;
$poleZvirat[] = $kocka;

print_r($poleZvirat);*/





//print_r($pes);






?>



</body>





</html>