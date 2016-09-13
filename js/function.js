
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
	$.ajax({
		type:"POST",
		url:urlPage,
		success:function(res){
			$("#x_panel_princiapl").html(res);
		}
	});
}