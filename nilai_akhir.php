<form method="post" action="nilai_akhir.php">
    Nilai Akhir <input type="text" name="nilai">
    <input type="submit" value="Hasil">
</form>

<?php
$nilai=$_POST['nilai'];

if($nilai >= 90){
    echo "Nilai : A+";
    echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif($nilai >= 80){
    echo "Nilai : A";
    echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif($nilai >= 70){
    echo "Nilai : B";
    Echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif($nilai >= 60){
    echo "Nilai : C";
    echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}else{
    echo "Nilai : D";
    echo "<br/>";
    echo "Keterangan : Tidak lulus";
    echo "<br/>";
}