<?php
$a=10;// a = "10"  srtring
$b="10";// b = 10 inteiro
echo "Igualdade = ".($a==$b)."<br>";//true
echo "Idêntico = ".($a===$b)."<br>";//true
echo "Não igual = ".($a!=$b)."<br>";//false
echo "Não Idêntico = ".($a!==$b)."<br>";//false
echo "<hr>";
$c=20;
$d=40;
$e=500;
$f=($c>$d);
var_dump($f);
echo "<hr>";
$g=($c<$e) && !($e>1000);//true
var_dump($g);
echo "<hr>";
$f=!($c<$e) || ($e>1000);//
var_dump($f);
echo "<hr>";
$a=50;
$b=150;
$c=200;
$d=($a<=$b) ? "OK" : "SO QUE NAO";
$e=($a>$c) ? "Blz" : "Zoado";
echo "d = $d<br>e = $e";
/*
=    atribuir/receber
==   igualdade
===  idêntico
*/
?>