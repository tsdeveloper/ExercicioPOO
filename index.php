<?php
use Source\Dono;
require_once 'Source\Dono.php';
require_once 'Source\Animal.php';


echo "=========PET SHOP BOLADÃO=========";

$dono = new Dono("Thiago", "Ribeiro", "thiagor21@gmail.com");
$bixo = new Animal("Marie", "Pequeno","Felino");

echo '<pre>'; print_r($dono); echo '</pre>';
echo '<pre>'; print_r($bixo); echo '</pre>';
