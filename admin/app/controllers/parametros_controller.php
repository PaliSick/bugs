<?php
class parametrosController extends BaseController {


	public function categorias()
	{

		if (Router::getParam(0) == 'alert') {
			$msgType = Router::getParam(1);
			$msg = Router::getParam(2);
			if ($msgType && $msg) {
				$this->tpl->assign('msg', $msg);
				$this->tpl->assign('msgType', $msgType);
			}
		}		
		$this->tpl->assign('menu', array("3"=>' class="active"'));
		$this->tpl->assign('categorias',  DBManager::selectAll('Categorias', false));
		echo $this->renderAction("parametros/categorias");
	}

	public function getCategoria() {
		$error = '';
		$r = Router::getInstance();
		$id =$r->getParam(0);
		
		if ($id>0){
			$Categoria=DBManager::selectClassById('Categorias', $id, false);			
			echo str_replace('\\/', '/', json_encode($Categoria, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
		}else
			echo '{"status": "error", "info": "'.$error.'"}';
	}



	public function submit_categoria()
	{
		$update = isset($_POST['Id']) && (int)$_POST['Id'] != 0;

		
		if ($update) {

			$Categoria = DBManager::selectClassById('Categorias', (int)$_POST['Id'], true);
		} else {
			
			$Categoria = new Categorias();
		}

		$Categoria->setCategoria($_POST['Categoria']);

		try{			
			if ($update) {
				DBManager::Update($Categoria);
			}else{
				DBManager::Insert($Categoria);
			}
					
		} catch (Exception $e) {
			
			$r = array('status' => 'error','info'=> 'Error, al insertar la categoría'.$e->getMessage());
			echo json_encode($r);
			
		}
		$r = array('status' => 'ok','info'=> 'La categoría se dío de alta correctamente');
		echo json_encode($r);
	}



	public function deleteCategoria()
	{
		$router = Router::getInstance();
		$id = (int)$router->getParam(0);

		try {
			$Categoria = DBManager::selectClassById('Categorias', $id, true);

			DBManager::delete($Categoria);
			
		} catch (Exception $e) {
			$r = array('status' => 'error');
			echo json_encode($r);
			return false;
		}
		
		$r = array('status' => 'ok');
		echo json_encode($r);
		return false;		
	}	

	public function subcategorias()
	{

		if (Router::getParam(0) == 'alert') {
			$msgType = Router::getParam(1);
			$msg = Router::getParam(2);
			if ($msgType && $msg) {
				$this->tpl->assign('msg', $msg);
				$this->tpl->assign('msgType', $msgType);
			}
		}		
		$this->tpl->assign('menu', array("4"=>' class="active"'));
		$this->tpl->assign('categorias',  DBManager::selectAll('Categorias', false));
		$this->tpl->assign('Subcategorias',  DBManager::customQuery('Subcategorias', 'SELECT s.Id, s.Subcategoria, c.Categoria FROM Subcategorias s LEFT JOIN Categorias c ON c.id=s.Id_categoria  ORDER BY subcategoria ASC',array(), false)) ;
		echo $this->renderAction("parametros/subcategorias");
	}



	public function submit_subcategoria()
	{
		$update = isset($_POST['Id']) && (int)$_POST['Id'] != 0;

		
		if ($update) {

			$Subcategoria = DBManager::selectClassById('Subcategorias', (int)$_POST['Id'], true);
		} else {
			
			$Subcategoria = new Subcategorias();
		}

		$Subcategoria->setId_categoria($_POST['Id_categoria']);
		$Subcategoria->setSubcategoria($_POST['Subcategoria']);
		try{			
			if ($update) {
				DBManager::Update($Subcategoria);
			}else{
				DBManager::Insert($Subcategoria);
			}
					
		} catch (Exception $e) {
			
			$r = array('status' => 'error','info'=> 'Error, al insertar la subcategoría'.$e->getMessage());
			echo json_encode($r);
			
		}
		$r = array('status' => 'ok','info'=> 'La subcategoria se dío de alta correctamente');
		echo json_encode($r);
	}


	public function getSubcategoria() {
		$error = '';
		$r = Router::getInstance();
		$id =$r->getParam(0);
		
		if ($id>0){
			$Subcategoria=DBManager::selectClassById('Subcategorias', $id, false);			
			echo str_replace('\\/', '/', json_encode($Subcategoria, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
		}else
			echo '{"status": "error", "info": "'.$error.'"}';
	}


	public function deleteSubcategoria()
	{
		$router = Router::getInstance();
		$id = (int)$router->getParam(0);

		try {
			$Subcategoria = DBManager::selectClassById('Subcategorias', $id, true);

			DBManager::delete($Subcategoria);
			
		} catch (Exception $e) {
			$r = array('status' => 'error');
			echo json_encode($r);
			return false;
		}
		
		$r = array('status' => 'ok');
		echo json_encode($r);
		return false;		
	}



	public function marcas()
	{

		if (Router::getParam(0) == 'alert') {
			$msgType = Router::getParam(1);
			$msg = Router::getParam(2);
			if ($msgType && $msg) {
				$this->tpl->assign('msg', $msg);
				$this->tpl->assign('msgType', $msgType);
			}
		}		
		$this->tpl->assign('menu', array("5"=>' class="active"'));
		$this->tpl->assign('marcas',  DBManager::selectAll('Marcas', false));
		echo $this->renderAction("parametros/marcas");
	}

	public function getMarca() {
		$error = '';
		$r = Router::getInstance();
		$id =$r->getParam(0);
		
		if ($id>0){
			$Marca=DBManager::selectClassById('Marcas', $id, false);			
			echo str_replace('\\/', '/', json_encode($Marca, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
		}else
			echo '{"status": "error", "info": "'.$error.'"}';
	}



	public function submit_marca()
	{
		$update = isset($_POST['Id']) && (int)$_POST['Id'] != 0;

		
		if ($update) {

			$Marca = DBManager::selectClassById('Marcas', (int)$_POST['Id'], true);
		} else {
			
			$Marca = new Marcas();
		}

		$Marca->setMarca($_POST['Marca']);

		try{			
			if ($update) {
				DBManager::Update($Marca);
			}else{
				DBManager::Insert($Marca);
			}
					
		} catch (Exception $e) {
			
			$r = array('status' => 'error','info'=> 'Error, al insertar la marca'.$e->getMessage());
			echo json_encode($r);
			
		}
		$r = array('status' => 'ok','info'=> 'La marca se dío de alta correctamente');
		echo json_encode($r);
	}



	public function deleteMarca()
	{
		$router = Router::getInstance();
		$id = (int)$router->getParam(0);

		try {
			$Marca = DBManager::selectClassById('Marcas', $id, true);

			DBManager::delete($Marca);
			
		} catch (Exception $e) {
			$r = array('status' => 'error');
			echo json_encode($r);
			return false;
		}
		
		$r = array('status' => 'ok');
		echo json_encode($r);
		return false;		
	}



	public function presentaciones()
	{

		if (Router::getParam(0) == 'alert') {
			$msgType = Router::getParam(1);
			$msg = Router::getParam(2);
			if ($msgType && $msg) {
				$this->tpl->assign('msg', $msg);
				$this->tpl->assign('msgType', $msgType);
			}
		}		
		$this->tpl->assign('menu', array("6"=>' class="active"'));
		$this->tpl->assign('presentaciones',  DBManager::selectAll('Presentaciones', false));
		echo $this->renderAction("parametros/presentaciones");
	}

	public function getPrecentacion() {
		$error = '';
		$r = Router::getInstance();
		$id =$r->getParam(0);
		
		if ($id>0){
			$Presentacion=DBManager::selectClassById('Presentaciones', $id, false);			
			echo str_replace('\\/', '/', json_encode($Presentacion, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
		}else
			echo '{"status": "error", "info": "Error eliginedo la presentación"}';
	}



	public function submit_presentacion()
	{
		$update = isset($_POST['Id']) && (int)$_POST['Id'] != 0;

		
		if ($update) {

			$Presentacion = DBManager::selectClassById('Presentaciones', (int)$_POST['Id'], true);
		} else {
			
			$Presentacion = new Presentaciones();
		}

		$Presentacion->setPresentacion($_POST['Presentacion']);

		try{			
			if ($update) {
				DBManager::Update($Presentacion);
			}else{
				DBManager::Insert($Presentacion);
			}
					
		} catch (Exception $e) {
			
			$r = array('status' => 'error','info'=> 'Error, al insertar la presentación'.$e->getMessage());
			echo json_encode($r);
			
		}
		$r = array('status' => 'ok','info'=> 'La presentación se dío de alta correctamente');
		echo json_encode($r);
	}



	public function deletePresentacion()
	{
		$router = Router::getInstance();
		$id = (int)$router->getParam(0);

		try {
			$Presentacion = DBManager::selectClassById('Presentaciones', $id, true);

			DBManager::delete($Presentacion);
			
		} catch (Exception $e) {
			$r = array('status' => 'error');
			echo json_encode($r);
			return false;
		}
		
		$r = array('status' => 'ok');
		echo json_encode($r);
		return false;		
	}	

	//Tarigas
	public function tarifas()
	{

		if (Router::getParam(0) == 'alert') {
			$msgType = Router::getParam(1);
			$msg = Router::getParam(2);
			if ($msgType && $msg) {
				$this->tpl->assign('msg', $msg);
				$this->tpl->assign('msgType', $msgType);
			}
		}		
		$this->tpl->assign('menu', array("7"=>' class="active"'));
		$this->tpl->assign('tarifas',  DBManager::customQuery('Tarifas', "SELECT Id,Tarifa, Normal FROM Tarifas WHERE Deleted=0" , array(),false));
		
		echo $this->renderAction("parametros/tarifas");
	}


	public function getTarifa() {
		$error = '';
		$r = Router::getInstance();
		$id =$r->getParam(0);
		
		if ($id>0){
			$Tarifas=DBManager::selectClassById('Tarifas', $id, false);			
			echo str_replace('\\/', '/', json_encode($Tarifas, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
		}else
			echo '{"status": "error", "info": "'.$error.'"}';
	}

	public function submit_tarifa()
	{
		$update = isset($_POST['Id']) && (int)$_POST['Id'] != 0;

		
		if ($update) {

			$Tarifa = DBManager::selectClassById('Tarifas', (int)$_POST['Id'], true);
		} else {
			
			$Tarifa = new Tarifas();
		}

		$Tarifa->setTarifa($_POST['Tarifa']);
		$Tarifa->setNormal($_POST['Normal']);
		$Tarifa->setDeleted(0);
		try{			
			if ($update) {
				DBManager::Update($Tarifa);
			}else{
				DBManager::Insert($Tarifa);
			}
					
		} catch (Exception $e) {
			
			$r = array('status' => 'error','info'=> 'Error, al insertar la tarifa'.$e->getMessage());
			echo json_encode($r);
			
		}
		$r = array('status' => 'ok','info'=> 'La tarifa se dío de alta correctamente');
		echo json_encode($r);
	}



	public function deleteTarifa()
	{
		$router = Router::getInstance();
		$id = (int)$router->getParam(0);

		try {
			$Tarifas = DBManager::selectClassById('Tarifas', $id, true);

			DBManager::delete($Tarifas);
			
		} catch (Exception $e) {
			$r = array('status' => 'error');
			echo json_encode($r);
			return false;
		}
		
		$r = array('status' => 'ok');
		echo json_encode($r);
		return false;		
	}


}