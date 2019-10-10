
<?php
require('carro.php');

$carro = new carro;

$carro->setMarca('- fosquivagem -');
$carro->setCor('- Amarelo -');
$carro->setAno('- 1998 -');
$carro->setModelo('- Fusca -');
$carro->setCombustivel('- Gasosa -');


$carro->getMarca();
$carro->getCor();
$carro->getAno();
$carro->getModelo();
$carro->getCombustivel();    

?>
