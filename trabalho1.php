<?php
print "Bem vindo ao sistema !";
print "\nDigite o sexo do cliente: ";
$sexo = trim ( fgets ( STDIN ) );
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
}
if ($cerveja >= 1) {
	$valorcerv = 2.5 * $cerveja;
}
if ($refri >= 1) {
	$valorrefri = 2 * $refri;
}
if ($espetinho >= 1) {
	$valoresp = 4 * $espetinho;
}
$cantor = $valorcerv + $valoresp + $valorrefri;
$c = 3;
if ($cantor > 15) {
	$subtotal = $cantor + $valorsexo;
} else {
	$subtotal = $cantor + $valorsexo + $c;
}
print "O valor básico é : " . $valorsexo;
print "\nO valor de cervejas consumidas é : " . $valorcerv;
print "\nO valor de refrigerantes consumidos é : " . $valorrefri;
print "\nO valor de espetinhos consumidos é : " . $valoresp;
if ($cantor < 15) {
	print "\nO valor de cantor foi de : " . $c;
}
print "\nO subtotal (sem 10%) é  : " . $subtotal;

$t = $subtotal * (10 / 100);
$total = $subtotal + $t;
print "\nO total consumido foi de : " . $total;
?>

