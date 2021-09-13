<?php
    $tahun = date("Y");
    $kabisat = $tahun%4 == 0 ? "ITU KABISAT" : "BUKAN KABISAT";

    echo "Tahun <b>$tahun</b> $kabisat";
?>