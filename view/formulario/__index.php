<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "formulario/gerenciar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	
	if (!empty($_GET['itemGerenciar'])) {
		if ($_GET['itemGerenciar'] == 'gerenciar') {
			require 'gerenciar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemNovo'])) {
		if ($_GET['itemNovo'] == 'novo') {
			require 'novo.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemContato'])) {
		if ($_GET['itemContato'] == 'contato') {
			require 'contatos.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	require $caminhoFisico . '/includes/footer.php';
?>    