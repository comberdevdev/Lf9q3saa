<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "google/gerenciar";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	
	if (!empty($_GET['itemAnalytics'])) {
		if ($_GET['itemAnalytics'] == 'analytics') {
			require 'analytics.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemCaptcha'])) {
		if ($_GET['itemCaptcha'] == 'captcha') {
			require 'captcha.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemSeo'])) {
		if ($_GET['itemSeo'] == 'seo') {
			require 'seo.php';
		} else {
			require 'conteudo.php';
		}
	}
	require $caminhoFisico . '/includes/footer.php';
?>    