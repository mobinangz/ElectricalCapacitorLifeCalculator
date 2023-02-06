<?php
$L1=10000;
$VR=2;
$V0=100;
$Tm=16;
$TA=23;
//$DealtaT=($TA-$Tm);
$x=($Tm-($TA))/10;

$sum=$L1*($VR/$V0)*2**$x;
echo $sum;


