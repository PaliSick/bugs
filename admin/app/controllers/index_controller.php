<?php
class indexController extends BaseController {
 #cambio
	public function index() {
		if ($_SESSION['autorized'] != 1 && $this->checkCookie()==false) {
			header("Location: /admin/index/login");
			return true;
		}
		
		$this->tpl->assign('bread_section', 'Inicio');
		
		echo $this->renderAction("index");
	}

	public function login()
	{
		return $this->renderAction("login");
	}
	public function logout()
	{
		session_destroy();
		return $this->renderAction("login");
	}	
	public function login_submit()
	{
		$ini = parse_ini_file('./app/etc/mysql_database.ini', true);
		$domain = str_replace('www.', '', $_SERVER['SERVER_NAME']);
		$cfg = $ini[$domain];

		if (strcmp($_POST['usuario'],  $cfg['usuario']) == 0 && strcmp(sha1($_POST['password']), $cfg['password']) == 0) {
			
			$_SESSION['autorized'] = 1;
			if($_POST['remember']==1){
				setcookie("C_marca_cookie", 'Admin' , time()+(60*60*24*365),  '/');	
				setcookie("C_id_usuario", 'Javier' , time()+(60*60*24*365),  '/');				
			}
			header("Location: /admin");
			echo 'Espere por favor...';
		} else {
			header("Location: /admin/index/login/error");
		}
	}

	public function checkCookie()
	{
		session_start();
		if (isset($_COOKIE["C_id_usuario"]) && $_COOKIE["C_id_usuario"]=='Javier'  && isset($_COOKIE["C_marca_cookie"]) && $_COOKIE["C_marca_cookie"]=='Admin'){
			$sql="SELECT p.id, p.nombre, p.tipo FROM pacientes p WHERE p.id=%d AND p.cookie='%s'";
			$sql=$this->db->prepare($sql, array($_COOKIE["C_id_usuario"], $_COOKIE["C_marca_cookie"]));
			
			$q = $this->db->query($sql);
			if(mysql_num_rows($q)>0){

				

				
				return true;
			}return false;

		}else return false;
	}	

}