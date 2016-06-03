<?php
require 'Controller.php';
require caminhoFisico . '/model/Usuario.php';
require caminhoFisico . '/helper.php';

class UsuariosController extends Controller {
	public function login() {
		$this->renderViewUnique('login/index');
	}

	public function faz_login() {
    	$email = addslashes($this->requestParametrosPost['email']);
    	$senha = addslashes($this->requestParametrosPost['senha']);
    	$usuario = Usuarios::sql("SELECT * FROM :table WHERE email = '" . $email . "' and senha = '" . $senha . "'", SimpleOrm::FETCH_ONE); 

    	if (!empty($usuario)) {
    		unsetSession('erroLogin');
    		setSession('usuLogado', 'S');
    		setSession('usuNome', $usuario->nome);
    		setSession('usuEmail', $usuario->email);
    	} else {
    		setSession('erroLogin', 'S');
    		$this->redirect(caminhoSite . '/usuarios/login');
    	}
		// $this->redirect(caminhoSite . '/usuarios/login');
	}
}

?>