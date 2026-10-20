<?php
$i = 1; 
    while ($i < 6) { 
        echo $i;
        $i = $i + 1; //ini sama dengan $i++ 
}
      

echo "<br>";
// inisialisasi, kondisi, increment
    for ($b = 1; $b <= 5; $b++) {
        echo $b."<br>";
}
 

$colors = array("red", "green", "blue", "yellow");
// foreach menguraikan data
foreach ($colors as $value) {
    echo "$value <br>";
}

// mengguraikan data array menggunakan index
for ($i=0; $i<=3; $i++){
    echo $colors[$i]."<br";
}
?>