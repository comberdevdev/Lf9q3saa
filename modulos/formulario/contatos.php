<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-comment"></span>&nbsp;Lista de contatos</h1>
            <h4 class="sub-title">Todos os contatos salvos.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Contatos</h3>
                </div>
                <div class="box-content">
                	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            	<tr>
                                    <th>Email</th>
                                    <th>Assunto</th>
                                    <th>Detalhes</th>
                                    <th><center>Arquivo</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>paulo@comberweb.com.br</td>
                                    <td>Assunto teste 01</td>
                                    <td>&nbsp;</td>
                                    <td>
                                    	<center>
                                    		<button type="button" class="btn btn-default btn-arquivo"  data-toggle="modal" data-target="#modalImagem"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Visualizar arquivo</button>
                                        </center>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>nicolas@comberweb.com.br</td>
                                    <td>Assunto teste 02</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td>teste@teste</td>
                                    <td>Assunto teste 03</td>
                                    <td>&nbsp;</td>
                                    <td>
                                    	<center>
                                    		<button type="button" class="btn btn-default btn-arquivo" data-toggle="modal" data-target="#modalArquivo"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Visualizar arquivo</button>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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

<div class="modal fade" id="modalArquivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>