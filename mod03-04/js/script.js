$(document).ready(function(){
	$("#regcpw").on('input', function(){
		if ($("#regpw").val() == $("#regcpw").val()){
			$("#regsubmit").removeAttr("disabled");
		}
		else {
			$("#regsubmit").attr("disabled", "disabled");
			
		};
	});
});

