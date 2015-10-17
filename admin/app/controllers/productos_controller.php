<?php
class productosController extends BaseController {



	public function nuevo()
	{
		$this->tpl->assign('menu', array("2"=>' class="active"'));
		$this->tpl->assign('marcas',  DBManager::selectAll('Marcas', false));
		$this->tpl->assign('categorias',  DBManager::selectAll('Categorias', false));

		$router = Router::getInstance();
		$id = (int)$router->getParam(0);
		$Presentaciones=DBManager::selectAll('Presentaciones',false);
		if($id>0){
			if(is_array($Presentaciones)){
				foreach ($Presentaciones as $key => $value) {
					$Rel_Producto_Presentacion=DBManager::selectClassByParam('Rel_Producto_Presentacion', array('Id_producto' => $id), false);
					if(is_array($Rel_Producto_Presentacion)){
						foreach ($Rel_Producto_Presentacion as $key2 => $value2) {
							$Presentaciones[$key]['Id_presentacion']=$value2;
						}
					}
				}
			}
			$Producto= DBManager::selectClassById('Productos', $id, false);
			$this->tpl->assign('subcategorias',  DBManager::customQuery('Subcategorias', 'SELECT * FROM Subcategorias WHERE Id_categoria=:Id_categoria', array('Id_categoria'=>$Producto['Id_categoria']), false));
			$this->tpl->assign($Producto);
		}
		$this->tpl->assign('presentaciones', $Presentaciones);




		echo $this->renderAction("productos/nuevo");
	}

	public function getSubcategorias()
	{
		$Subcategorias=DBManager::selectClassByParam('Subcategorias', array('Id_categoria' => $_POST['id']), false);
		echo str_replace('\\/', '/', json_encode($Subcategorias, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS));
	}
	


	//submit foto
	public function submit_picture() {
		session_start();
		$id=$_POST['num_foto'];

		if (!isset($_SESSION['tmp_picname'][$id]))
			$_SESSION['tmp_picname'][$id] = 'app/tmp/pic_'.time().'.tmp';

		if (move_uploaded_file($_FILES['picture']['tmp_name'], $_SESSION['tmp_picname'][$id])) {
			echo '<script type="text/javascript">window.parent.finishUploadingPicture("'.BASE_DIR. '/' .$_SESSION['tmp_picname'][$id].'",'.$id.');</script>';
		}
	}	

}