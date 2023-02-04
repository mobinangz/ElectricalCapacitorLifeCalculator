<?php
$L1=1000;
$VR=2;
$V0=10;
$Tm=6;
$TA=3;
//$DealtaT=($TA-$Tm);
$x=($Tm-($TA))/10;

$sum=$L1*($VR/$V0)*2**$x;
echo $sum;


