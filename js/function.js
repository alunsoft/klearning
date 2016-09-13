
// Iniciar session [Ashby]
function fn_iniciarSession(formId) {
	serialForm = $("#" + formId).serialize();
	$.ajax({
		type:"POST",
		url:"phps/iniciar.php",
		data:serialForm,
		success:function(res){
			window.location.href = "index.php";
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