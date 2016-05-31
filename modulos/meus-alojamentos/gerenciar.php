<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Gerenciar Alojamentos</h1>
            <h4 class="sub-title">Gerenciar todos os alojamentos.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Alojamentos</h3>
                </div>
                <div class="box-content">
                	<table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>titulo</td>
                                <td>editar</td>
                                <td>excluir</td>
                            </tr>
                        </tbody>
                    </table>
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

<script src="../../plugins/DataTables-1.10.12/media/js/jquery.js" type="text/javascript"></script>
<script src="../../plugins/DataTables-1.10.12/media/js/jquery.dataTables.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready( function (){
		$('#table_id').DataTable();
	});
</script>