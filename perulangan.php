<?php
//Perulangan for
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}
?>

<?php

for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
}
?>

<?php
//Menampilkan Array  
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < count($list); $i++) {
    echo "{$list[$i]} <br>";
}

?>

<?php
//### Perintah Break dan Continue
# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
       continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
       break; # hentikan perulangan jika $i lebih dari 40
    }
}

?>

<?php
//## Perulangan while
$i = 0;

while ($i < 20) {
    echo "{$i} <br>";

    $i++;
}
?>

<?php
/*Perulangan tanpa batas dengan while
while (true) {
    echo "RPL Wajib Ngulik !! <br>";
}
*/
?>

<?php
#Perulangan do while    
while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);

?>

<?php
#Perulangan Foreach
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $l) {
    echo "Nama : {$l} <br>";
}

?>

<?php
#### Sintaks lengkap
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $kunci => $l) {
    echo "[{$kunci}] Nama : {$l} <br>";
}