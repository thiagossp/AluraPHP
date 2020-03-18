<?php 

namespace Alura\Banco\Modelo;

trait AcessoPropriedades {
	function __get(string $nomeAtributo) {
		$metodo = 'recupera' . ucfirst($nomeAtributo);
		return $this->$metodo();
	}
}

?>