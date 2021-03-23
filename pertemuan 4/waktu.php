<?php
// Raihan Anhar
// 203040113
// Untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
    echo time();
echo "<br>";

    echo date("l", time()+172800);
echo "<br>";

    echo date("l", time()+60*60*24*100);
echo "<br>";

    echo date("d M Y", time()-60*60*24*100);
echo "<br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
    echo mktime(0,0,0,02,12,2003);
echo "<br>";

    echo date("l", mktime(0,0,0,02,12,2003));
echo "<br>";

// strtotime
echo date("l", strtotime("12 feb 2003"));
?>