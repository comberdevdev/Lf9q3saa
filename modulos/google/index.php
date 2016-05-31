<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "google/adicionar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	if (!empty($_GET['pagina'])) {
		if ($_GET['pagina'] == 'analytics') {
			require 'analytics.php';
		} else {
			require 'conteudo.php';
		}
	}else if (!empty($_GET['pagina'])) {
		if ($_GET['pagina'] == 'captcha') {
			require 'captcha.php';
		} else {
			require 'conteudo.php';
		}
	}else if (!empty($_GET['pagina'])) {
		if ($_GET['pagina'] == 'seo') {
			require 'seo.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    