<?php
    $nilai = $_POST['nilai'];

    if($nilai % 2 == 0){
        echo "$nilai adalah genap";
    }else{
        echo "$nilai adalah ganjil";
    }

?>