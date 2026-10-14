<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    
    if ($nilaiAkhir >= 70) {
        echo "Status: Lulus";
    } else {
        echo "Status: Tidak Lulus";
    }
}

hitungNilaiAkhir(90, 80, 80); 
?>
