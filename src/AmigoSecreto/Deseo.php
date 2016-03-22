<?php

namespace AmigoSecreto\Deseo;

class Deseo
{
	private $deseo;

	function __construct($_deseo)
	{
		$this->deseo = $_deseo;
	}

	public function getDeseo()
	{
		return $this->deseo;
	}
}