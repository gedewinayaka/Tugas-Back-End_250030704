<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$r = 7;
$hasilLuas = hitungLuasLingkaran($r);

echo "Luas lingkaran dengan jari-jari " . $r . " adalah " . $hasilLuas;
?>
