<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Categorias
* GENERATION DATE:  16.09.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Categorias.class.php
* FOR MYSQL TABLE:  Categorias
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Categorias extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Categoria;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Categorias() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getCategoria() {
		return $this->Categoria;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setCategoria($val) {
		$this->Categoria =  $val;
	}


}