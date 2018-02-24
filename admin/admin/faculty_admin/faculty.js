$(document).ready(function(){
	$("#currentLayout").hide();
	$("#selector").change(function(){
		
		var id = $("#selector").val();
		if(id == ""){
			$("#currentLayout").hide();
		}else{
			$("#currentLayout").show();
			$("#currentLayout").load("faculty1_load.php #load", { "variable": id }, function() {
				
			});

		}
	});
	
});