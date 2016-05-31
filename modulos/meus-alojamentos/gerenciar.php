<link type="text/css" rel="stylesheet" media="screen" href="../../plugins/data-table/jquery.dataTables.min.css">

<script type="text/javascript" src="../../plugins/data-table/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../../plugins/data-table/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		var eventFired = function ( type ) {
			var n = $('#demo_info')[0];
			n.innerHTML += '<div>'+type+' event - '+new Date().getTime()+'</div>';
			n.scrollTop = n.scrollHeight;      
		}
		//
		//	$('#example')
		//		.on( 'order.dt',  function () { eventFired( 'Order' ); } )
		//		.on( 'search.dt', function () { eventFired( 'Search' ); } )
		//		.on( 'page.dt',   function () { eventFired( 'Page' ); } )
		//		.DataTable();
			$('#example').DataTable({                              
				 "oLanguage": {
					"sProcessing": "Aguarde enquanto os dados são carregados ...",
					"sLengthMenu": "Mostrar _MENU_ registros por página",
					"sZeroRecords": "Nenhum alojamento foi inserido.",
					"sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
					"sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
					"sInfoFiltered": "",
					"sSearch": "Procurar",
					"oPaginate": {
					   "sFirst":    "Primeiro",
					   "sPrevious": "Anterior",
					   "sNext":     "Próximo",
					   "sLast":     "Último"
					}
				 }                              
			});
		}
	);
</script>

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
                	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
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
            </div>
        </section>
        
        <section>
        	<footer>
            	<center><p class="footer-text">2016 &copy; ComberWeb CMS</p></center>
            </footer>
        </section>
    </div>
</div>