<form method="post" action="banjir.php">
    Angka ketinggian<input type="text" name="banjir">
    <input type="submit" value="Hasil">
    <hr/>
</form>

<?php
$banjir=$_POST['banjir'];

if($banjir >= 10){
    echo "Banjir";
    echo "<br/>";
}elseif($banjir >=8){
    echo "Bahaya Banjir";
    echo "<br/>";
}elseif($banjir >=5){
    echo "Waspada";
    echo "<br/>";
}elseif($banjir >=3){
    echo "Siaga";
    echo "<br/>";
}elseif($banjir >= 2){
    echo "Rawan";
    echo "<br/>";
}else{
    echo "Aman";
    echo "<br/>";
}