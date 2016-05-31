<script>tinymce.init({    selector: "textarea#inputConteudo",    theme: "modern",    width: 830,    height: 300,    plugins: [         
	"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",         "save table contextmenu directionality emoticons template paste textcolor"   ],   content_css: "../plugins/tinymce/content.min.css",   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",    style_formats: [        {title: 'Bold text', inline: 'b'},        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},        {title: 'Example 1', inline: 'span', classes: 'example1'},        {title: 'Example 2', inline: 'span', classes: 'example2'},        {title: 'Table styles'},        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}    ] }); </script>

<div class="col-md-9 pull-right conteudo">
	<div class="fluid galeria-imagens">
    	<!-- NAVBAR -->
        <section>
            <h1><span class="glyphicon glyphicon-picture"></span>&nbsp;Novo Banner</h1>
            <h4 class="sub-title">Adicione um novo Banner na página inicial.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;Informações do Banner</h3>
                </div>
                <div class="box-content">
                	<form>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-9">
                            	<input type="text" class="form-control">
                            </div>
                            <div class="col-sm-1">
                            	<input type="color" class="form-control">
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto Superior</label>
                            <div class="col-sm-10">
                            	<textarea name="inputConteudo" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto Inferior</label>
                            <div class="col-sm-10">
                            	<textarea name="inputConteudo" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link de Destino</label>
                            <div class="col-sm-4">
                            	<input type="text" class="form-control">
                            </div>
                            
                            <label class="col-sm-2 control-label" align="right">Local</label>
                            <div class="col-sm-4">
                            	<select class="form-control">
                                	<option selected value="">Selecione o local</option>
                                    <option value="_blank">Nova página</option>
                                    <option value="_parent">Nova aba</option>
                                    <option value="_self">Mesma aba</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Upload de Arquivo</label>
                            <div class="col-sm-10">
                            	<input type="file">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Gerenciar Categoria</h3>
                </div>
                <div class="box-content">
                	<form>
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Categoria</label>
                            <div class="col-sm-10">
                            	<select class="form-control">
                                	<option selected value="">Selecione a categoria</option>
                                    <option value="">Categoria Teste 01</option>
                                    <option value="">Categoria Teste 02</option>
                                    <option value="">Categoria Teste 03</option>
                                    <option value="">Categoria Teste 04</option>
                                </select>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Imagem do Banner</h3>
                </div>
                <div class="box-content">
                	<form action="#" class="dropzone" id="my-awesome-dropzone" multifile></form>
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