<?php
require_once __DIR__ .'/Product.php';
require_once __DIR__ .'/User.php';
require_once __DIR__ .'/RegisteredUser.php';
require_once __DIR__ .'/Toy.php';
require_once __DIR__ .'/Food.php';
require_once __DIR__ .'/Cuccia.php';

$carlo = new User('Carlo','Duminuco Del Monte');


$luca = new RegisteredUser('Luca', 'Rossi', 5675675765);


$palla = new Toy('palla', 'kikko', 15);

if($luca->valid){
echo "{$luca->getName()} ha selezionato {$palla->getName()} per un prezzo di {$palla->getPrice()} ed ha uno sconto del {$luca->getDiscount()}%";
} else {
  echo "aggiorna la carta";
}
?>