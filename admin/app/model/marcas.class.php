<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Marcas
* GENERATION DATE:  30.11.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Marcas.class.php
* FOR MYSQL TABLE:  Marcas
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Marcas extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Marca;
	protected $Descripcion;
	protected $Fotos;
	protected $Estado;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Marcas() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getMarca() {
		return $this->Marca;
	}

	public function getDescripcion() {
		return $this->Descripcion;
	}

	public function getFotos() {
		return $this->Fotos;
	}

	public function getEstado() {
		return $this->Estado;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setMarca($val) {
		$this->Marca =  $val;
	}

	public function setDescripcion($val) {
		$this->Descripcion =  $val;
	}

	public function setFotos($val) {
		$this->Fotos =  $val;
	}

	public function setEstado($val) {
		$this->Estado =  $val;
	}


}