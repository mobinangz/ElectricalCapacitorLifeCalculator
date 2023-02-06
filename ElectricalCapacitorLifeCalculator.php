<?php
$L1=readline('Enter L1' . "\n");
echo "\n";
$VR=readline('Enter VR' . "\n");
$V0=readline('Enter V0' . "\n");
$Tm=readline('Enter Tm' . "\n");
$TA=readline('Enter TA' . "\n");
//$DealtaT=($TA-$Tm);
$x=($Tm-($TA))/10;

$sum=$L1*($VR/$V0)*2**$x;
echo $sum;


