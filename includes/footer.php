</div>
	<script type="text/javascript" src="<?= $caminhoSite ?>/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?= $caminhoSite ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= $caminhoSite ?>/js/functions.js"></script>
    <script type="text/javascript" src="<?= $caminhoSite ?>/plugins/dropzone.js"></script>
</body>

<script type="text/javascript" src="<?= $caminhoSite ?>/plugins/DataTables-1.10.12/media/js/jquery.js"></script>
<script type="text/javascript" src="<?= $caminhoSite ?>/plugins/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?= $caminhoSite ?>/plugins/icheck/icheck.min.js"></script>

<script>
	$(document).ready(function(){
		$('input').iCheck({
			checkboxClass: 'icheckbox_square',
			radioClass: 'iradio_square',
			increaseArea: '20%' // optional
		});
		
		var table = $('#example').DataTable();
		 
		$('#example tbody')
		.on( 'mouseenter', 'td', function () {
			var colIdx = table.cell(this).index().column;
 
			$( table.cells().nodes() ).removeClass( 'highlight' );
			$( table.column( colIdx ).nodes() ).addClass( 'highlight' );
		} );
	});
</script>

</html>