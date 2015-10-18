<?php
	#session start
	session_start();


	require 'app/core/general_propouse.php';

	#Change Include path
	//ini_set('include_path', ini_get('include_path').':../../lib:');

	// Estos archivos se cargan estáticamente porque se 
	// encuentran en la carpeta lib/
	// todos los demás archivos que se incluyan dinámicamente 
	// en tiempo de ejecución serán cargados por el autoloader
	require 'app/core/autoloader.class.php';

	//Determina el directorio base
	//$baseDir = rtrim(array_shift(str_replace($_SERVER['DOCUMENT_ROOT'], '', pathinfo($_SERVER['SCRIPT_FILENAME']))), '/');
	DEFINE('BASE_DIR',  rtrim(array_shift(str_replace($_SERVER['DOCUMENT_ROOT'], '', pathinfo($_SERVER['SCRIPT_FILENAME']))), '/'));
	$a = pathinfo($_SERVER['SCRIPT_FILENAME']);
	$b = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
	$c = str_replace($b, '', $a['dirname']);





	$baseDir = $c;

	//Inicializa el Router
	$router = Router::getInstance();


	$router->addRule('/ventajas-de-yadecido', array('controller' => 'index', 'action' => 'ventajas_de_yadecido'));
	$router->addRule('/que-es-ya-decido', array('controller' => 'index', 'action' => 'que_es_ya_decido'));
	$router->addRule('/ayuda', array('controller' => 'index', 'action' => 'ayuda'));
	$router->addRule('/consultas', array('controller' => 'index', 'action' => 'consultas'));
	$router->addRule('/casos-reales', array('controller' => 'index', 'action' => 'casos_reales'));
	$router->addRule('/politica-de-privacidad', array('controller' => 'index', 'action' => 'politica'));
	$router->init($baseDir);
	
	//Determina e instancia el Controller
	$controller = $router->getController();
	
	$controllerFile = './app/controllers/'. $controller . '_controller.php';
	DEFINE('CURRENT_CONTROLLER', $controller);

	if ( $_SESSION['autorized'] != 1 && $_SERVER['REQUEST_URI']!='/admin/index/login') {
	
		header("Location: /admin/index/login");
	}

	//Verifica que el archivo del controller exista
	$error=0;
	if (!is_file($controllerFile)) {
		
		require_once 'app/controllers/error_controller.php';
		//$router->addRule('/error', array('controller' => 'error', 'action' => 'index'));
		$controllerClass = 'errorController';
		#Init the controller

		$controllerInstance = new $controllerClass($baseDir);

		#and call the action... if not action specified call index
		$controllerInstance->index();
		exit();
	}
	
	//Incluye dicho archivo
	require_once $controllerFile;
	$controllerClass = $controller.'Controller';
	
	//Verifica si se definió la clase del controller luego de la inclusión
	if (!class_exists($controllerClass)) {
		require_once 'app/controllers/error_controller.php';
		//$router->addRule('/error', array('controller' => 'error', 'action' => 'index'));
		$controllerClass = 'errorController';
		#Init the controller

		$controllerInstance = new $controllerClass($baseDir);

		#and call the action... if not action specified call index
		$controllerInstance->index();
		exit();
	}
	
	//Insancia el Controller
	try {
		$controllerInstance = new $controllerClass($baseDir);	
	} catch (Exception $e) {
		
		require_once 'app/controllers/error_controller.php';
		//$router->addRule('/error', array('controller' => 'error', 'action' => 'index'));
		$controllerClass = 'errorController';
		#Init the controller

		$controllerInstance = new $controllerClass($baseDir);

		#and call the action... if not action specified call index
		$controllerInstance->index(); 
		exit();
	}
	
	//Determina la Accion
	$action = $router->getAction();
	
	//Verifica que la accion exista
	if (!method_exists($controllerInstance, $action)) {
		
		require_once 'app/controllers/error_controller.php';
		//$router->addRule('/error', array('controller' => 'error', 'action' => 'index'));
		$controllerClass = 'errorController';
		#Init the controller

		$controllerInstance = new $controllerClass($baseDir);

		#and call the action... if not action specified call index
		$controllerInstance->index();
		exit();
	}
	
	//Ejecuta la accion
	try {
		$actionHtml = $controllerInstance->$action();
	} catch (Exception $e) {
		require_once 'app/controllers/error_controller.php';
		//$router->addRule('/error', array('controller' => 'error', 'action' => 'index'));
		$controllerClass = 'errorController';
		#Init the controller

		$controllerInstance = new $controllerClass($baseDir);

		#and call the action... if not action specified call index
		$controllerInstance->index();
		exit();
	}


	if($actionHtml === false) die();
	else echo $actionHtml;