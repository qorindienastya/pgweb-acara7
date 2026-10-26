<?php
    /* Variabel diawali $ sebagai wadah untuk menyimpan data 
    selama program berjalan*/
    // Menampilkan teks
    $pesan = "Selamat Sore";

    /*PHP case-sensitive terhadap besar kecil huruf. echo 
    tidak sama dengan ECHO?*/
    /* Menggabungkan string dengan variabel menggunakan 
    tanda titik (.)*/
    echo "Selamat Datang" . "<br>" . $pesan . "<br>"; 

    /* Array untuk menyimpan banyak data dalam bentuk indeks 
    (dimulai dari 0)*/
    $matchaTi = array("MixBerry", "BananaBerry", "MilkTea");
    echo $matchaTi[1] . "<br>"; // Output: BananaBerry

    // Operasi penjumlahan matematika
    $x = 3;
    $w = 5;
    $x = $x + $w; // $x menjadi 8
    echo $x . "<br>"; 

    // Penjumlahan singkat (Assignment Operator)
    $x += $w; // $x menjadi 8 + 5 = 13
    echo $x . "<br>";

    // Menggabungkan angka menjadi teks (String Concatenation)
    $x = $x . $w; // $x berubah jadi string "135"
    echo $x . "<br>";

    // Menggabungkan teks secara singkat
    $x .= $w; // $x menjadi "1355"
    echo $x . "<br>"; 
?>

