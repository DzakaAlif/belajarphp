
<form method="post" action="coba.php">
    input nomor 1 = <input type="text" name="a"><br/>
    input nomor 2 = <input type="text" name="b"><br/>
    input nomor 3 = <input type="text" name="c"><br/>
    input nomor 4 = <input type="text" name="d"><br/>
        <input type="submit" value="Terbesar">
</form>

<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];

if($a > $b && $a > $c && $a > $d){
    echo "Yang terbesar adalah " . $a;
    echo "<br/>";
}elseif($b > $a && $b > $c && $b > $d){
    echo "Yang terbesar adalah " . $b;
    echo "<br/>";
}elseif($c > $a && $c > $b && $b > $d){
    echo "Yang terbesar adalah " . $c;
    echo "<br/>";
}elseif($d > $a && $d > $b && $d > $c){
    echo "Yang terbesar adalah " . $d;
    echo "<br/>";
}
?>