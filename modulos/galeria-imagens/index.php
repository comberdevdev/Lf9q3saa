<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "galeria-imagens/gerenciar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	
	if (!empty($_GET['itemGerenciar'])) {
		if ($_GET['itemGerenciar'] == 'gerenciar') {
			require 'gerenciar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemAdicionar'])) {
		if ($_GET['itemAdicionar'] == 'adicionar') {
			require 'adicionar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemGaleria'])) {
		if ($_GET['itemGaleria'] == 'galeria') {
			require 'galeria.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemGerenciarGaleria'])) {
		if ($_GET['itemGerenciarGaleria'] == 'gerenciarGaleria') {
			require 'gerGaleria.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	require $caminhoFisico . '/includes/footer.php';
?>    