<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "chacara/chacara";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	if (!empty($_GET['gerItem'])) {
		if ($_GET['gerItem'] == 'gerenciar') {
			require 'gerenciar.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    