<?php 
$age = 18;
if ($age <= 18) {
echo "Vous êtes majeur" . "<br>"; }

else {
echo "Vous êtes mineur"; }
//1


$isEasy = true;
if ($isEasy) {
echo "C'est facile" . "<br>"; }
else {
echo "C'est difficile !"; }
//2

$age = 18;
$gender = "Homme";

if ($age >= 18 && $gender == "Homme"){
    echo "Vous êtes un homme et vous êtes majeur" . "<br>";}

else if($age < 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes mineur";}

else if ($age >= 18 && $gender == "Femme" ) {
    echo "Vous êtes une femme et vous êtes majeur";}

else if($age < 18 && $gender = "Femme") {
    echo "Vous êtes une femme et vous êtes mineur";}
//3

$magnitude = 8;
switch ($magnitude) {
case 1;
    echo "Micro-séisme impossible à ressentir";
break;

case 2;
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
break;

case 3;
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
break;

case 4;
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
break;

case 5;
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
break;

case 6;
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
break;

case 7;
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
break;

case 8;
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres." . "<br>";
break;

case 9;
    echo "Séisme capable de tout détruire sur une très vaste zone.";
break;
}
//4

$gender = "homme";
if ($gender == "homme") {
echo "C'est un développeur" . "<br>" ;}

else if ($gender == "femme") {
echo "C'est une développeuse";}
//5
 

$age = 18;
if ($age >= 18) {
    echo "Tu es majeur" . "<br>";}
else if ($age < 18) {
    echo "Tu n'es pas majeur";}
//6


$isOk = false;
if ($isOk == false) {
    echo "Ce n'est pas bon" . "<br>";}
else {
    echo "C'est ok";}
//7 


$isOk = 8;
if ($isOk) {
    echo "C'est Ok"; }
    else {
        echo "Ce n'est pas bon"; }
//8




