<?php
	require '../../includes/config.php';
	$_SESSION["paginaAtual"] = "configuracoes/geral";
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	
	if (!empty($_GET['itemGeral'])) {
		if ($_GET['itemGeral'] == 'geral') {
			require 'geral.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	if (!empty($_GET['itemSocial'])) {
		if ($_GET['itemSocial'] == 'social') {
			require 'social.php';
		} else {
			require 'conteudo.php';
		}
	}
	
	require $caminhoFisico . '/includes/footer.php';
?>    