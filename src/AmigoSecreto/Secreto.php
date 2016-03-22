<?php

namespace AmigoSecreto;

class Secreto
{
	private $amigo;
	private $secreto;

	function __construct(Amigo $_amigo, Amigo $_secreto)
	{
		$this->amigo = $_amigo;
		$this->secreto = $_secreto;
	}

	public function Confess()
	{
		return "Yo soy ".$this->amigo->giveName()." y mi amigo secreto es ".$this->secreto->giveName();
	}
}