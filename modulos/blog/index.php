<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "blog/adicionar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	if (!empty($_GET['pagina'])) {
		if ($_GET['pagina'] == 'adicionar') {
			require 'adicionar.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    