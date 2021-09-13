<?php

    $suhu=$_POST['suhu'];
    $konversi=$_POST['konversi'];

    echo "Suhu : $suhu <br>";
    
    if($konversi == "reamur") {
        $hasil=(4/5)*$suhu;
        echo " Hasil konversi ke Reamur: $hasil ";
    } elseif($konversi == "fahrenhait") {
       $hasil=(9/5)*$suhu+32;
       echo " Hasil konversi ke Fahrenhit: $hasil";
    } else if ($konversi=="kelvin"){
        $hasil=$suhu+273;
        echo "Hasil Konversi ke Kelvin: $hasil";
    } else {
        echo "Pilih dulu konversinya";
    }
?>