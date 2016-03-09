<?php
print "Bem vindo ao sistema !";
print "\nDigite o sexo do cliente: ";
$sexo = trim ( fgets ( STDIN ) );
if ($sexo != "h" && $sexo != "H" && $sexo != "f" && $sexo != "F") {
	print "TENTE NOVAMENTE !";
	exit ;
}
print "\nDigite o numero de cervejas consumidas: ";
$cerveja = trim ( fgets ( STDIN ) );
print "\nDigite o numero de refrigerantes consumidos: ";
$refri = trim ( fgets ( STDIN ) );
print "\nDigite o numero de espetinhos consumidos: ";
$espetinho = trim ( fgets ( STDIN ) );

if ($sexo == "H" || $sexo == "h") {
	$valorsexo = 10;
} else {
	$valorsexo = 8;
} // Valor básico por sexo
if ($cerveja >= 1) {
	$valorcerv = 2.5 * $cerveja;
} // valor total de cerveja
if ($refri >= 1) {
	$valorrefri = 2 * $refri;
} // valor total de refri
if ($espetinho >= 1) {
	$valoresp = 4 * $espetinho;
} // valor total de espetinho
$cantor = $valorcerv + $valoresp + $valorrefri; // formula soma para calcular se precisará pagar cantor
$c = 3; // variavel atribuida ao valor de cantor
if ($cantor > 15) {
	$subtotal = $cantor + $valorsexo;
} else {
	$subtotal = $cantor + $valorsexo + $c;
}
print "\nO valor básico é : R$ " . $valorsexo;
print "\nO valor de cervejas consumidas é : R$ " . $valorcerv;
print "\nO valor de refrigerantes consumidos é : R$ " . $valorrefri;
print "\nO valor de espetinhos consumidos é : R$ " . $valoresp;
if ($cantor < 15) {
	print "\nO valor de cantor foi de : R$ " . $c;
}
print "\nO subtotal (sem 10%) é  : R$ " . $subtotal;
print "\n----------------------------------------------------------------------";

$t = $subtotal * (10 / 100);
$total = $subtotal + $t;
print "\nO total consumido foi de : R$ " . $total;
?>

