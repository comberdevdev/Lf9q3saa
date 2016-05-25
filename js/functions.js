function page(){
	if($("#config_page").is(':visible')){
		$("#config_page").hide();
	}else{
		$("#config_page").show();
	}
}

function galeria(){
	if($("#config_galeria").is(':visible')){
		$("#config_galeria").hide();
	}else{
		$("#config_galeria").show();
	}
}

function blog(){
	if($("#config_blog").is(':visible')){
		$("#config_blog").hide();
	}else{
		$("#config_blog").show();
	}
}

function google(){
	if($("#config_google").is(':visible')){
		$("#config_google").hide();
	}else{
		$("#config_google").show();
	}
}

function form(){
	if($("#config_form").is(':visible')){
		$("#config_form").hide();
	}else{
		$("#config_form").show();
	}
}

function config(){
	if($("#config_all").is(':visible')){
		$("#config_all").hide();
	}else{
		$("#config_all").show();
	}
}

function perfil(){
	if($("#perfil").is(':visible')){
		$("#perfil").hide();
	}else{
		$("#perfil").show();
	}
}

$(document).ready(function(){
	$("#inputConteudo").focus();
});