<?php
	require '../includes/config.php';
	require $caminhoFisico . '/includes/head.php';
	require $caminhoFisico . '/includes/header.php';
	require $caminhoFisico.'/includes/footer.php';
?>

<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		 
		$('#example tbody')
			.on( 'mouseenter', 'td', function () {
				var colIdx = table.cell(this).index().column;
	 
				$( table.cells().nodes() ).removeClass( 'highlight' );
				$( table.column( colIdx ).nodes() ).addClass( 'highlight' );
			} );
	} );
</script>

<div class="col-md-9 pull-right conteudo">
	<div class="fluid galeria-imagens">
    	<section>
        	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <th>Formulário</th>
                        <th>Página</th>
                        <th><center>Editar</center></th>
                        <th><center>Apagar</center></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td>TESTE</td>
                            <td>TESTE</td>
                            <td>TESTE</td>
                            <td>TESTE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        
        <section>
        	<footer>
            	<center><p class="footer-text">2016 &copy; ComberWeb CMS</p></center>
            </footer>
        </section>
    </div>
</div>