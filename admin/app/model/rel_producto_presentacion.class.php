<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Rel_Producto_Presentacion
* GENERATION DATE:  16.09.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Rel_Producto_Presentacion.class.php
* FOR MYSQL TABLE:  Rel_Producto_Presentacion
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Rel_Producto_Presentacion extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Id_producto;
	protected $Id_presentacion;
	protected $Contado;
	protected $Debito;
	protected $Credito;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Rel_Producto_Presentacion() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getId_producto() {
		return $this->Id_producto;
	}

	public function getId_presentacion() {
		return $this->Id_presentacion;
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

	public function setId_producto($val) {
		$this->Id_producto =  $val;
	}

	public function setId_presentacion($val) {
		$this->Id_presentacion =  $val;
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