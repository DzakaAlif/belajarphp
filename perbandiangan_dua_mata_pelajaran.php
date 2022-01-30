<form method="post" action="perbandiangan_dua_mata_pelajaran.php">
    MTK <input type="text" name ="a"><br/>
    B. Indo <input type="text" name ="b"><br/>
    B. Inggris <input type="text" name ="c"><br/>
    <input type="submit" value ="Hasil">
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

if($a >= 75 && $b >=75 || $a >= 75 && $c >= 75 || $b >= 75 && $c >= 75 ){
    echo "Kompeten";
    echo "<br/>";
}else{
    echo "Tidak Kompeten";
    echo "<br/>";
}