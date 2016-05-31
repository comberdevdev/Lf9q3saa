<body style="background-color:#d9d9d9">
	<div class="fluid">
    	<!-- NAVBAR -->
        <section>
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="fluid">
                    <div class="navbar-header navbar-cabecalho">
                    	<a href="index.php">
                        	<div class="logo">
                                <img src="<?= $caminhoSite ?>/images/logo/sprite.png" class="img-responsive pull-left logo-img">
                                <font class="logo-font">CMS</font>
                            </div>
                        </a>
                        
                        <button type="button" class="navbar-toggle first-button-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only" style="background-color:#FFFFFF;">Toggle navigation</span>
                            <span class="icon-bar" style="background-color:#FFFFFF;"></span>
                            <span class="icon-bar" style="background-color:#FFFFFF;"></span>
                            <span class="icon-bar" style="background-color:#FFFFFF;"></span>				
                        </button>
                        
                        <button type="button" class="navbar-toggle second-button-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <img src="<?= $caminhoSite ?>/images/logo/logo-toggle.png" style="height:35px;">
                            <span class="glyphicon glyphicon-triangle-bottom" style="color:#fff"></span>
                        </button>
                	</div>
                    
                    <div class="collapse navbar-collapse navbar-style" id="bs-example-navbar-collapse-2" align="center">
                        <ul class="nav navbar-nav">
                            <li><a href="brafer.php" style="padding-top:15px;"><strong>BRAFER</strong></a></li>
                            <li style="margin-top:-15px;"><a href="produtosservicos.php"><strong>PRODUTOS/SERVIÇOS</strong></a></li>
                            <li style="margin-top:-15px;"><a href="estruturasmetalicas.php"><strong>ESTRUTURAS METÁLICAS</strong></a></li>
                            <li style="margin-top:-15px;"><a href="contrato.php"><strong>TRABALHE CONOSCO</strong></a></li>
                            <li style="margin-top:-15px;"><a href="noticias.php"><strong>NOTÍCIAS</strong></a></li>
                            <li style="margin-top:-15px;"><a href="contato.php" style="padding-bottom:15px;"><strong>CONTATO</strong></a></li>
                        </ul>
                    </div>
            	</div>
            </nav>
            
            <nav class="navbar navbar-fixed-top collapse navbar-collapse" role="navigation">
                <div class="fluid">
                    <div class="navbar-header navbar-cabecalho">
                    	<a href="index.php">
                        	<div class="logo">
                                <img src="<?= $caminhoSite ?>/images/logo/sprite.png" class="img-responsive pull-left logo-img">
                                <p class="logo-font">CMS</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right" style="margin-right:-9px;">
                            <li>
                            	<a href="#" onClick="perfil()">
                                    <img src="<?= $caminhoSite ?>/images/logo/logo-toggle.png" style="height:35px;">
                                    <p class="logo-name">ComberWeb</p>
                                    <p class="triangle-button"><span class="glyphicon glyphicon-triangle-bottom"></span></p>
                                </a>
                            </li>
                        </ul>
                	</div>
            	</div>
            </nav>
        </section>
        
        <section>
        	<div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:#17181b">
                	<ul class="lista">
                    	<li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Página inicial
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side <?php if($_SESSION['paginaAtual'] == 'meus-alojamentos/adicionar') echo "menu-active-side menu-open-side" ?>"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Meus alojamentos
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side" id="config_page" name="config_page">
                            <li class="sub-item">
                                <a href="#">Gerenciar alojamentos</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/modulos/meus-alojamentos/index.php?pagina=adicionar">Adicionar novo alojamento</a>
                            </li>
                        </ul>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-leaf"></span>&nbsp;&nbsp;A Chácara
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Galeria
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side" id="config_galeria" name="config_galeria" >
                            <li class="sub-item">
                                <a href="#">Gerenciar categoria</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/galeria-imagens/adicionar.php">Galeria de imagens</a>
                            </li>
                        </ul>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side <?php if($_SESSION['paginaAtual'] == 'blog/adicionar') echo "menu-active-side menu-open-side" ?>"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Blog
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side" id="config_blog" name="config_blog">
                            <li class="sub-item">
                                <a href="#">Gerenciar posts</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/modulos/blog/index.php?pagina=adicionar">Adicionar novo post</a>
                            </li>
                        </ul>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Formulários
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side" id="config_form" name="config_form" >
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/formulario/gerenciar.php">Gerenciar formulários</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/formulario/novo.php">Novo formulário</a>
                            </li>
                            <li class="sub-item">
                                <a href="#">Contatos</a>
                            </li>
                        </ul>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Google
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side">
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/modulos/google/index.php?pagina=analytics">Analytics</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/modulos/google/index.php?pagina=captcha">reCAPTCHA</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= $caminhoSite ?>/modulos/google/index.php?pagina=seo">SEO</a>
                            </li>
                        </ul>
                        
                        <li class="item">
                        	<a href="#" class="menu-item-side"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens menu-close-side">
                            <li class="sub-item">
                                <a href="#">Configurações gerais</a>
                            </li>
                            <li class="sub-item">
                                <a href="#">Redes sociais</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                
                <div id="page-content-wrapper" name="page-content-wrapper">
                	<div id="perfil" name="perfil">
                    	<div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 menu-perfil pull-right">
                                    <p style="margin-top:20px; margin-left:20px;"><strong>Usuário</strong>: teste@teste.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 menu-perfil-itens pull-right">
                                    <li class="menu-perfil-item">
                                        <a href="#"><p class="perfil-item-primario"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configurações</p></a>
                                    </li>
                                    <li class="menu-perfil-item" style="margin-top:-10px;">
                                        <a href="#"><p class="perfil-item-primario"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Editar Perfil</p></a>
                                    </li>
                                    <hr class="menu-perfil-divisor">
                                    <li class="menu-perfil-item" style="margin-bottom:-10px; margin-top:15px;">
                                        <a href="#"><p class="perfil-item-primario"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Sair</p></a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>