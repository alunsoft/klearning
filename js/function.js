
// Iniciar session [Ashby]
function fn_iniciarSession(formId) {
	serialForm = $("#" + formId).serialize();
	$.ajax({
		type:"POST",
		url:"phps/iniciar.php",
		data:serialForm,
		success:function(res){
			if(res == "1"){
				window.location.href = "index.php";
			}else{
				fn_errorLogin("alert_error","Error al iniciar...");
			}
		},
		error: function(res){
			fn_errorLogin("alert_error","Error al iniciar...");
		}
	});
}

var timerErrorLogin;
// alert error message iniciar session
function fn_errorLogin(idMessage,message){
	window.clearTimeout(timerErrorLogin);
	$("#"+idMessage).addClass("in");
	$("#"+idMessage).html(message);
	window.setTimeout(function() {$("#"+idMessage).removeClass("in")}, 3600);
}

// funcion Menu
function fn_menu(titulo, urlPage){
	$("#x_panel_titulo").html(titulo);
	$("#x_panel_princiapl").html('<center><div align=center class="loader" style="width: 30px;height: 30px;"></div></center>');
	$.ajax({
		type:"POST",
		url:urlPage,
		success:function(res){
			$("#x_panel_princiapl").html(res);
		}
	});
}

// load
function fn_loadContent(idContent, urlContent, dataContent) {
	$("#x_panel_titulo").html("");
	$("#"+idContent).html('<center><div align=center class="loader" style="width: 35px;height: 35px;"></div></center>');
	$.ajax({
		type:"POST",
		data:dataContent,
		url:urlContent,
		success:function(res){
			$("#"+idContent).html(res);
		}
	});
}

// cargar preguntas seccion
function fn_loadQuestion(idContent, urlContent, dataContent){
	$(".kl-btn-select").hide("fast");
	$("#kl-content-question").addClass("fadeInUp");
	$("#kl-content-question").addClass("animated");
	fn_loadContent(idContent, urlContent, dataContent);
}

function fn_openModal(titulo, formId, urlLoad, urlContent){
	$("#myModalTitle").html(titulo);
	$("#saveInputModal").attr("data-form", formId);
	$("#saveInputModal").attr("data-url", urlLoad);
	$("#globalModal").modal();
	fn_loadContent('bodyModal', urlContent, '');
}

function fn_saveModal(){
	idForm = $("#saveInputModal").attr("data-form");
	urlLoad = $("#saveInputModal").attr("data-url");
	serialData = $("#"+idForm).serialize();
	$(".btn-globalModal").hide('fast');
	$("#loaderGlobalModal").show('fast');
	$.ajax({
		type:"POST",
		data:serialData,
		url:urlLoad,
		success:function(){
			$("#globalModal").modal('toggle');
			$(".btn-globalModal").show('fast');
			$("#loaderGlobalModal").hide('fast');
		},
		error:function(res){
			console.log("Error al cargar: " + res);
			$("#globalModal").modal('toggle');
			$(".btn-globalModal").show('fast');
			$("#loaderGlobalModal").hide('fast');
		}
	});
}