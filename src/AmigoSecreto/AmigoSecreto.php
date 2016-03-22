<?php

namespace AmigoSecreto;

use AmigoSecreto\Secreto as Secreto;

class AmigoSecreto
{
	private $secrets = array();
	private $players = array();
	private $gameOpen;

	function __construct() {
		$this->gameOpen = true;
	}

	public function addPlayer(Amigo $_amigo)
	{
		if ($this->gameOpen) {
			array_push($this->players, $_amigo);
		} else {
			throw new Exception("Lo sentimos pero no se admiten mas participantes, el juego ya está cerrado");			
		}
	}

	public function getPlayers()
	{
		return $this->players;
	}

	public function letsPlay()
	{
		shuffle($this->players);
			
		for ($i = 0; $i < count($this->players)-1; $i++) {
			array_push($this->secrets, new Secreto($this->players[$i], $this->players[$i+1]));
		}

		array_push($this->secrets, new Secreto($this->players[count($this->players)-1], $this->players[0]));

		$this->gameOpen = false;

		return $this->secrets;
	}

}
