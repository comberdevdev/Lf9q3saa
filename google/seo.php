<?php
	require '../includes/config.php';
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	require $caminhoFisico.'/includes/footer.php';
?>

<div class="col-md-9 pull-right conteudo">
	<div class="fluid galeria-imagens">
    	<!-- NAVBAR -->
        <section>
            <h1><span class="glyphicon glyphicon-picture"></span>&nbsp;SEO</h1>
            <h4 class="sub-title">Gerencie as tags essenciais para cada página.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Meta-tags</h3>
                </div>
                <div class="box-content">
                	<form>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Página</label>
                            <div class="col-sm-10">
                            	<select class="form-control">
                                	<option selected value="">Selecione a página</option>
                                    <option value="">Página teste 01</option>
                                    <option value="">Página teste 01</option>
                                    <option value="">Página teste 01</option>
                                </select>
                            </div>
                        </div><br>
                        
                        <!-- META-TAG TITLE -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Title</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG DESCRIPTION -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Description</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG KEYWORDS -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Keywords</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG AUTHOR -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Author</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG COPYRIGHT -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Copyright</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG APPLICATION NAME -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Application name</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG CANONICAL -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Canonical</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" readonly>
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