<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "pagina-inicial/gerenciar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	
	if (!empty($_GET['itemGerenciar'])) {
		if ($_GET['itemGerenciar'] == 'gerenciar') {
			require 'gerenciar.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	require $caminhoFisico . '/includes/footer.php';
?>    