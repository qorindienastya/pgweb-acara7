<?php
$x = 3;
$y = 4;

/* 
== "sama nilai datanya"
=== "sama nilai dan tipe datanya"
!= "nilai beda"
!== "nilai dan tipe data beda"
*/

if ($x == 5 && $y == 5) {
    echo "Masuk blok 1 <br>";
} elseif ($x == 5){
    echo "Masuk blok 2 <br>";
} else {
    echo "Masuk selokan <br>";
}
echo "Program selesai"."<br>";

if ($x == 3 || $y == 5) {
    echo "Masuk blok 1 <br>";
} elseif ($x == 5){
    echo "Masuk blok 2 <br>";
} else {
    echo "Masuk selokan <br>";
}
echo "Program selesai";
?>

