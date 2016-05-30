<?php
	require '../includes/config.php';
	require $caminhoFisico . '../includes/head.php';
	require $caminhoFisico . '../includes/header.php';
	require $caminhoFisico.'../includes/footer.php';
?>

<div class="col-md-9 pull-right conteudo">
	<div class="fluid galeria-imagens">
    	<!-- NAVBAR -->
        <section>
            <h1><span class="glyphicon glyphicon-picture"></span>&nbsp;reCAPTCHA</h1>
            <h4 class="sub-title">Adicionando reCAPTCHA para o seu site.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;CAPTCHA</h3>
                </div>
                <div class="box-content">
                	<form>
                        <!-- reCAPTCHA -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Site Key</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Secret Key</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
        </section>
        
        <section>
        	<footer>
            	<center><p class="footer-text">2016 &copy; ComberWeb CMS</p></center>
            </footer>
        </section>
    </div>
</div>