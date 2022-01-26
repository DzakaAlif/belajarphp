
<form method="post" action="coba.php">
    input nomor 1 = <input type="text" name="a"><br/>
    input nomor 2 = <input type="text" name="b"><br/>
    input nomor 3 = <input type="text" name="c"><br/>
        <input type="submit" name="submit" value="Terbesar">
</form>

<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];

if($a > $b && $c){
    echo "Yang terbesar adalah " . $a;
    echo "<br/>";
}if($b > $c && $a){
    echo "Yang terbesar adalah " . $b;
    echo "<br/>";
}if($c > $a && $b){
    echo "Yang terbesar adalah " . $c;
    echo "<br/>";
}