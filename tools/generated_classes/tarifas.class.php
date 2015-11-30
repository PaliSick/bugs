<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Tarifas
* GENERATION DATE:  30.11.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Tarifas.class.php
* FOR MYSQL TABLE:  Tarifas
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Tarifas extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Tarifa;
	protected $Default;
	protected $Deleted;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Tarifas() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getTarifa() {
		return $this->Tarifa;
	}

	public function getDefault() {
		return $this->Default;
	}

	public function getDeleted() {
		return $this->Deleted;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setTarifa($val) {
		$this->Tarifa =  $val;
	}

	public function setDefault($val) {
		$this->Default =  $val;
	}

	public function setDeleted($val) {
		$this->Deleted =  $val;
	}


}