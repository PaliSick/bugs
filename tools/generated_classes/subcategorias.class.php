<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Subcategorias
* GENERATION DATE:  16.09.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Subcategorias.class.php
* FOR MYSQL TABLE:  Subcategorias
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Subcategorias extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Id_categoria;
	protected $Subcategoria;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Subcategorias() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getId_categoria() {
		return $this->Id_categoria;
	}

	public function getSubcategoria() {
		return $this->Subcategoria;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setId_categoria($val) {
		$this->Id_categoria =  $val;
	}

	public function setSubcategoria($val) {
		$this->Subcategoria =  $val;
	}


}