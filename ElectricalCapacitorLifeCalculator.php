<?php

// give L1 - Load Life Rating
$loadLifeRating = readline('Enter Load Life Rating:  ');
// Vr - Maximum voltage rating of capacitor
$maximumVoltageRatingCapacitor = readline('Enter Maximum voltage rating of capacitor:  ');

if ($maximumVoltageRatingCapacitor > 2) {
	while( $maximumVoltageRatingCapacitor > 2) {
		echo "|------------------------------------------------------------------------| \n";
		echo("|   Maximum voltage rating of capacitor should be less or equal to 2     |" . "\n");
		echo "|------------------------------------------------------------------------| \n";
		$maximumVoltageRatingCapacitor = readline('Enter Maximum voltage rating of capacitor:  ');
	}
}
// Vo - Operating voltage of application
$operatingVoltageApplication = readline('Enter Operating voltage of application:  ');

// Tm - Maximum temp rating of capacitor
$maximumTempratingCapacitor = readline('Enter Maximum temp rating of capacitor:  ');
// TA - Ambient Temperature
$ambientTemperature =readline('Enter Ambient Temperature:  ');

// @TODO check later
//$DealtaT = ($ambientTemperature - $maximumTempratingCapacitor);

$x = ($maximumTempratingCapacitor - $ambientTemperature) / 10;

$sum = $loadLifeRating * ($maximumVoltageRatingCapacitor / $operatingVoltageApplication ) * (2**$x);
echo "---------------------------------------";
echo sprintf("Projected Life at Operating Conditions (L2) Is: %d \n", $sum);
echo "---------------------------------------";


