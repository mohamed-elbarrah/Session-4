<?php
$montant = 500;
$tauxRemise=0;

if($montant >= 2000){
$tauxRemise=0.15;
}elseif($montant >= 1000){
        $tauxRemise=0.1;
}elseif($montant >= 500){
        $tauxRemise = 0.05;
}else{
        $tauxRemise = 0;
}

$remise = $montant*$tauxRemise;
$montantFinal = $montant-$remise;

echo "le montant final a payee est: {$montantFinal} DHs, le montant de remise est {$remise}";