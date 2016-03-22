<?php

namespace AmigoSecreto\ListadeDeseos;

class ListadeDeseos
{
	private $amigo;
	private $lista_deseos = array();

	function __construct(Amigo $_amigo)
	{
		$this->amigo = $_amigo;
	}

	public function addDeseo($_deseo)
	{
		array_push($this->lista_deseos, array($this->amigo => $_deseo));
	}

	public function getDeseosByAmigo($_amigo)
	{
		foreach ($this->lista_deseos as $deseos) {
			foreach ($deseos as $amigo => $deseo) {
				if ($amigo->giveName() === $_amigo->giveName()) {
					array_push($this->lista_deseos, $deseo);					
				}
			}
		}

		return $this->lista_deseos;
	}
}