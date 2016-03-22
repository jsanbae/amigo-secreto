<?php

require 'autoload.php';
/*
$anita = new AmigoSecreto\Amigo('Anita');
$vale = new AmigoSecreto\Amigo('Vale');
$emy = new AmigoSecreto\Amigo('Emy');
$daimo = new AmigoSecreto\Amigo('Daimo');
*/

$dario = new AmigoSecreto\Amigo('Dario Perez');
$daniel = new AmigoSecreto\Amigo('Daniel Araya');
$javier = new AmigoSecreto\Amigo('Javier Sánchez');

$juego = new AmigoSecreto\AmigoSecreto();
$juego->addPlayer($dario);
$juego->addPlayer($daniel);
$juego->addPlayer($javier);
/*
$juego->addPlayer($anita);
$juego->addPlayer($vale);
$juego->addPlayer($emy);
$juego->addPlayer($daimo);
*/
$result = $juego->letsPlay();

foreach ($result as $secret) {
	echo $secret->Confess().'<br />';
}