<?php 

$A = "karrie";
$Z = "lesley";

$jumlah = strlen($Z);

$arayA = preg_split('//', $A);
$arayZ = preg_split('//', $Z);

for($i = 0; $i < $jumlah+1; $i++){
    echo $arayZ[$i] . $arayA[$i];
}
