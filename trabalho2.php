<?php
print "Entre com o rendimento bancario: ";
$banco = trim ( fgets ( STDIN ) );
print "Entre com  o rendimeto de salario ou servi�o: ";
$salario = trim ( fgets ( STDIN ) );
print "Entre com outros rendimentos : ";
$outros = trim ( fgets ( STDIN ) );
print "Entre com o valor gasto em Servi�os medicos : ";
$servmed = trim ( fgets ( STDIN ) );
print "Entre com o valor gasto em Educa��o: ";
$seredu = trim ( fgets ( STDIN ) );

$b1 = (20 / 100) * $banco; // 20% referente a lucro bancario

if ($salario <= 8000) {
	$sal1 = 0;
} else if ($salario <= 24000) {
	$sal1 = (15 / 100) * $salario;
} else {
	$sal1 = (20 / 100) * $salario;
} // porcentagem atribuida a impostos sobre sal�rio

$outros1 = (10 / 100) * $outros; // 10% referente a outros lucros

$total1 = $outros1 + $sal1 + $b1; // total de todos os impostos sobre os valores

print "\nSal�rio : R$$sal1";
print "\nRendimentos Banc�rios : R$$b1";
print "\nOutros Rendimentos : R$$outros1";
print "\n----------------------------------------------";
print "\nO valor total de rendimentos  � :R$ $total1";
print "\n----------------------------------------------";
print "\nMaximo a ser abatido : " . $maximo = (30 / 100) * $total1;

print "\nTotal de valores possiveis de abater : ";
print "\n Valores  medicos :R$ $servmed"; // variavel referente a servi�os medicos pagos
print "\nValores educacionais:R$ $seredu"; // variavel referente a servi�os educacionais pagos
print "\n----------------------------------------------";
print "\n Total � igual a : R$ " . $total2 = $seredu + $servmed;

print "\n----------------------------------------------";

if ($total2 > $maximo) {
	
	$totalabatido1 = $maximo;
} else {
	
	$totalabatido1 = $total2;
} // clausula referente a quantidade m�xima de abatimento de imposto

$totalabatido = $total1 - $totalabatido1;

$abatimento = $totalabatido1;

print "\nIMPOSTO TOTAL:  ";
print "\nImposto Bruto :R$ " . $total1;
print "\nAbatimentos: R$" . $abatimento;
print "\n TOTAL COM ABATIMENTO: R$ " . $totalabatido;

?>

