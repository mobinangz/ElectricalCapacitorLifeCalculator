<?php
$L1=readline('Enter L1  ');
$Vr=readline('Enter Vr  ');
if($Vr<=2){$Vr=$Vr;}
else if($Vr>2){
	while($Vr>2) {
	echo("Vr should be less or equal to 2 " . "\n");
	$Vr=readline('Enter Vr  ');
}}
$Vo=readline('Enter Vo  ');
$Tm=readline('Enter Tm  ');
$TA=readline('Enter TA  ');
//$DealtaT=($TA-$Tm);
$x=($Tm-($TA))/10;
$sum=$L1*($Vr/$Vo)*2**$x;
echo $sum;









