<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Productos
* GENERATION DATE:  16.09.2015
* CLASS FILE:       /home/palisick/domains/bugsalimentos.com/public_html/tools/generated_classes/Productos.class.php
* FOR MYSQL TABLE:  Productos
* FOR MYSQL DB:     palisick_bugs
* -------------------------------------------------------
*/

// **********************
// CLASS DECLARATION
// **********************

class Productos extends QueryBuilder {


	// **********************
	// ATTRIBUTE DECLARATION
	// **********************


	protected $Id;
	protected $Producto;
	protected $Descripcion;
	protected $Id_marca;
	protected $Id_categoria;
	protected $Id_subcategoria;
	protected $Estado;
	protected $Portada;
	protected $Gramos;
	protected $Stock;
	protected $Fotos;
	protected $Oferta;
	protected $Costo;
	protected $Precio;
	protected $Id_tarifa;

	// **********************
	// CONSTRUCTOR METHOD
	// **********************

	public function Productos() {}


	// **********************
	// GETTER METHODS
	// **********************


	public function getId() {
		return $this->Id;
	}

	public function getProducto() {
		return $this->Producto;
	}

	public function getDescripcion() {
		return $this->Descripcion;
	}

	public function getId_marca() {
		return $this->Id_marca;
	}

	public function getId_categoria() {
		return $this->Id_categoria;
	}

	public function getId_subcategoria() {
		return $this->Id_subcategoria;
	}

	public function getEstado() {
		return $this->Estado;
	}

	public function getPortada() {
		return $this->Portada;
	}

	public function getGramos() {
		return $this->Gramos;
	}

	public function getStock() {
		return $this->Stock;
	}

	public function getFotos() {
		return $this->Fotos;
	}

	public function getOferta() {
		return $this->Oferta;
	}

	public function getCosto() {
		return $this->Costo;
	}

	public function getPrecio() {
		return $this->Precio;
	}

	public function getId_tarifa() {
		return $this->Id_tarifa;
	}

	// **********************
	// SETTER METHODS
	// **********************


	public function setId($val) {
		$this->Id =  $val;
	}

	public function setProducto($val) {
		$this->Producto =  $val;
	}

	public function setDescripcion($val) {
		$this->Descripcion =  $val;
	}

	public function setId_marca($val) {
		$this->Id_marca =  $val;
	}

	public function setId_categoria($val) {
		$this->Id_categoria =  $val;
	}

	public function setId_subcategoria($val) {
		$this->Id_subcategoria =  $val;
	}

	public function setEstado($val) {
		$this->Estado =  $val;
	}

	public function setPortada($val) {
		$this->Portada =  $val;
	}

	public function setGramos($val) {
		$this->Gramos =  $val;
	}

	public function setStock($val) {
		$this->Stock =  $val;
	}

	public function setFotos($val) {
		$this->Fotos =  $val;
	}

	public function setOferta($val) {
		$this->Oferta =  $val;
	}

	public function setCosto($val) {
		$this->Costo =  $val;
	}

	public function setPrecio($val) {
		$this->Precio =  $val;
	}

	public function setId_tarifa($val) {
		$this->Id_tarifa =  $val;
	}


}