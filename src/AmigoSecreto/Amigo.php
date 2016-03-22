<?php

namespace AmigoSecreto;

use AmigoSecreto\IAmigo;

class Amigo implements IAmigo
{
	private $nombre;

	function __construct($_nombre)
	{
		$this->nombre = $_nombre;
	}

	public function giveName()
	{
		return $this->nombre;
	}

	public function isValid()
	{
		return true;
	}
}