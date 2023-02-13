<?php

include_once 'class_pais.php';

$oBrasil = new Pais('BRA', 'Brasil', 2);
$oBrasil->setPopulacao(2);
$oUruguai = new Pais('URU', 'Uruguai', 200);
$oChile = new Pais('CHL', 'Chile', 28119919);
$oChile->adicionaPaises($oUruguai);
$oBrasil->adicionaPaises($oChile);
$oUruguai->adicionaPaises($oChile);

echo $oBrasil->verificaPais($oChile);
echo "<br><br>";
echo "A densidade é de " . $oBrasil->densidade();
echo "<br><br>";
$oBrasil->paisesComuns($oUruguai);
echo "<br><br>";
echo $oBrasil->verificaFronteira($oUruguai);
echo "<br><br>";
?>

