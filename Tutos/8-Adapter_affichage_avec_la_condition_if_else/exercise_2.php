<?php 
$Montan=3000;
$remise;
$montant_final;
if ($Montan<500){
 $montant_final=$Montan;
}

elseif($Montan>=500 && $Montan<1000){
$remise=$Montan*0.05;
$montant_final=$Montan-$remise;
}
elseif($Montan>=1000 && $Montan<2000){
$remise=$Montan*0.1;
$montant_final=$Montan-$remise;
}
else {
$remise=$Montan*0.15;
$montant_final=$Montan-$remise;
}

echo "le montant de la remise est :" .$remise ."<br>";
echo "le montant final à payer :".$montant_final;