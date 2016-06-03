<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "perfil/gerenciar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	if (!empty($_GET['itemConfigurar'])) {
		if ($_GET['itemConfigurar'] == 'configurar') {
			require 'configurar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemEditar'])) {
		if ($_GET['itemEditar'] == 'editar') {
			require 'editar.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    