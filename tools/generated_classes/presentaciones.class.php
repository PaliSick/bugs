<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Presentaciones
* GENERATION DATE:  30.11.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Presentaciones.class.php
* FOR MYSQL TABLE:  Presentaciones
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Presentaciones extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Presentacion;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Presentaciones() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getPresentacion() {
		return $this->Presentacion;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setPresentacion($val) {
		$this->Presentacion =  $val;
	}


}