<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Precios
* GENERATION DATE:  30.11.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Precios.class.php
* FOR MYSQL TABLE:  Precios
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Precios extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Id_producto;
	protected $Id_tarifa;
	protected $Id_presentacion;
	protected $Precio;
	protected $Detalle;
	protected $Fecha;
	protected $Deleted;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Precios() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getId_producto() {
		return $this->Id_producto;
	}

	public function getId_tarifa() {
		return $this->Id_tarifa;
	}

	public function getId_presentacion() {
		return $this->Id_presentacion;
	}

	public function getPrecio() {
		return $this->Precio;
	}

	public function getDetalle() {
		return $this->Detalle;
	}

	public function getFecha() {
		return $this->Fecha;
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

	public function setId_producto($val) {
		$this->Id_producto =  $val;
	}

	public function setId_tarifa($val) {
		$this->Id_tarifa =  $val;
	}

	public function setId_presentacion($val) {
		$this->Id_presentacion =  $val;
	}

	public function setPrecio($val) {
		$this->Precio =  $val;
	}

	public function setDetalle($val) {
		$this->Detalle =  $val;
	}

	public function setFecha($val) {
		$this->Fecha =  $val;
	}

	public function setDeleted($val) {
		$this->Deleted =  $val;
	}


}