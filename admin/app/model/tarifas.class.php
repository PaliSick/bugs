<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Tarifas
* GENERATION DATE:  16.09.2015
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
	protected $Lista;
	protected $Contado;
	protected $Debito;
	protected $Credito;

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

	public function getLista() {
		return $this->Lista;
	}

	public function getContado() {
		return $this->Contado;
	}

	public function getDebito() {
		return $this->Debito;
	}

	public function getCredito() {
		return $this->Credito;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setLista($val) {
		$this->Lista =  $val;
	}

	public function setContado($val) {
		$this->Contado =  $val;
	}

	public function setDebito($val) {
		$this->Debito =  $val;
	}

	public function setCredito($val) {
		$this->Credito =  $val;
	}


}