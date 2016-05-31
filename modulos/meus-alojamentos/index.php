<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "meus-alojamentos/alojamentos";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	if (!empty($_GET['novoItem'])) {
		if ($_GET['novoItem'] == 'adicionar') {
			require 'adicionar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['gerItem'])) {
		if ($_GET['gerItem'] == 'gerenciar') {
			require 'gerenciar.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    