<?php

$baju = true;

if($baju){
	echo "Variable baju bernilai true"; 
    echo "<br>";
}
?>

<?php 

$nilai = 50;

if ($nilai > 70) {
  echo "Selamat, anda lulus!";
} else {
  echo "Mohon maaf, anda harus mengulang";
}

echo "<br>";
?>

<?php

$nilai = 50;

echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
echo "<br>"

?>

<?php 
    $nilai = 20;
    echo "Variable tersebut bernilai : {$nilai} <br>";

    if ($nilai >= 50){
      echo "GOOD JOB !";
      echo "<br>";
    }elseif($nilai <= 50){
      echo "Jangan Menyerah !";
      echo "<br>";
    }else{
      echo "Coba Lagi !";
      echo "<br>";
    }

   ?>

   <?php
    $nilai = 75;

    if ($nilai >= 90){
        echo "A";
        echo "<br>";
    }

    if ($nilai >= 80){
        echo "B";
        echo "<br>";
    }

    if ($nilai >= 70){
        echo "C";
        echo "<br>";
    }

    if ($nilai < 70){
        echo "D";
        echo "<br>";
    }
    ?>