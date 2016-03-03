<?php
print "Entre com o rendimento bancario: ";
$banco = trim ( fgets ( STDIN ) );
print "Entre com  o rendimeto de salario ou serviço: ";
$salario = trim ( fgets ( STDIN ) );
print "Entre com outros rendimentos : ";
$outros = trim ( fgets ( STDIN ) );
print "Entre com o valor gasto em Serviços medicos : ";
$servmed = trim ( fgets ( STDIN ) );
print "Entre com o valor gasto em Educação: ";
$seredu = trim ( fgets ( STDIN ) );

$b1 = (20 / 100) * $banco;

if ($salario <= 8000) {
	$sal1 = 0;
} else if ($salario <= 24000) {
	$sal1 = (15 / 100) * $salario;
} else {
	$sal1 = (20/100) * $salario;
}

$outros1 = (10/100) * $outros;

$total1 = $outros1 + $sal1 + $b1;

print "\n$sal1";
print "\n$b1";
print "\n$outros1";
print "\nO valor total é :$total1";

print "\nMaximo a ser abatido : " . $maximo = (30 / 100) * $total1;

print "\nTotal de valores possiveis de abater ";
print "\n Valores  medicos :$servmed";
print "\nValores educacionais: $seredu";
print "\n Total é igual a : " . $total2 = $seredu + $servmed;

if ($total2 > $maximo) {
	
	$totalabatido1= $maximo;
} else {
	
	$totalabatido1 =$total2;
}

$totalabatido= $total1-$totalabatido1;

$abatimento=$totalabatido1;

print "\nIMPOSTO TOTAL: ";
print "\nImposto Bruto : " . $total1;
print "\nAbatimentos: " . $abatimento;
print "\n TOTAL COM ABATIMENTO: ". $totalabatido;

?>

