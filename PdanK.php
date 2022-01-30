<form method="post" action="PdanK.php">
    Nilai P <input type="text" name="p">
    Nilai K <input type="text" name="k">
    <input type="submit" value="Hasil">
</form>

<?php
$p=$_POST['p'];
$k=$_POST['k'];

if($p < 60 || $k < 60){
    echo "Nilai Tidak Kompeten";
    echo "<br/>";
}elseif(($p+$k) / 2 >= 90){
    echo "Nilai : A+";
    echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif(($p+$k) / 2 >= 80){
    echo "Nilai : A";
    echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif(($p+$k) / 2 >= 70){
    echo "Nilai : B";
    Echo "<br/>";
    echo "Keterangan : Lulus";
    echo "<br/>";
}elseif(($p+$k) / 2 >= 60){
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