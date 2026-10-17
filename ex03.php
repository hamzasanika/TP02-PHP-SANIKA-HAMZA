<?php
//Q1
$TAUX_TVA = 20;
$DEVISE = "MAD";
//Q2
$PRIX = 60;
$QUANTITE = 3;
//Q3
$HT = $PRIX * $QUANTITE;
$TVA = $HT * 20/100;
$TTC = $HT + $TVA;
//Q4
$TTC+=15;
//Q5
defined($TAUX_TVA);
echo "le totale HT = ".$HT."<br>"." le montant de TVA = ".$TVA ."<br>"."le total TTC = ".$TTC;


?>