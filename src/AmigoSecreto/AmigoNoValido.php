<?php

namespace AmigoSecreto\AmigoNoValido;

use AmigoSecreto\IAmigo as IAmigo;

class AmigoNoValido implements IAmigo
{
	private $nombre;

	function __construct()
	{
		$this->nombre = 'No soy válido, no soy tu amigo';
	}

	public function giveName()
	{
		return $this->nombre;
	}

	public function isValid()
	{
		return false;
	}
}
