<?php
$angka = range(1, 20);

foreach ($angka as $val) {
    if ($val % 3 == 0) {
        echo $val . "<br>";
    }
}
?>
