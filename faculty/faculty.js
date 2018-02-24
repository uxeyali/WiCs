$(document).ready(function(){
	var message;
	var username;
	var content1;
	var content2;
	var content3;
	var content4;
	var content5;
	var content6;
	

		var request = $.ajax({
			
			url: "faculty.php",
			type: "POST",
			data: {
				"content": $("#ajax").val()
			},
			dataType: "text"
		});
		request.done(function(msg){
			$("#admin_add").html(msg+"**Click on a professor's picture to edit their information.**");
			$("#geggharrison").css("opacity","1.0");
			$("#francioni").css("opacity","1.0");
			$("#gerald").css("opacity","1.0");
			$("#username").css("border", "2px solid #ccc");
			$("#username").css("background-color", "#f1f1f1");
			$("#username").css("text-align", "center");
			$("#gerald").hover(function(){
				$(this).css("cursor", "pointer");
			});
			$("#geggharrison").hover(function(){
				$(this).css("cursor", "pointer");
			});
			$("#francioni").hover(function(){
				$(this).css("cursor", "pointer");
			});
			$("#gerald").click(function(){
				$("#gerald").css("opacity","1.0");
				$("#geggharrison").css("opacity",".6");
				$("#francioni").css("opacity",".6");
				message = msg;
				username = $("#field0").text();
				content1 = $("#field1").text();
				content2 = $("#field2").text();
				content3 = $("#field3").attr("href");
				content4 = $("#field4").text();
				content5 = $("#field5").text();
				content6 = $("#field6").text();
				$("#username").val(username);
				$("#name").val(content1);
				$("#email").val(content2);
				$("#website").val(content3);
				$("#content1").val(content4);
				$("#content2").val(content5);
				$("#content3").val(content6);
			});
			
			$("#geggharrison").click(function(){
				$("#geggharrison").css("opacity","1.0");
				$("#francioni").css("opacity",".6");
				$("#gerald").css("opacity",".6");
				message = msg;
				username = $("#field01").text();
				content1 = $("#field7").text();
				content2 = $("#field8").text();
				content3 = $("#field9").attr("href");
				content4 = $("#field10").text();
				content5 = $("#field11").text();
				content6 = $("#field12").text();
				$("#username").val(username);
				$("#name").val(content1);
				$("#email").val(content2);
				$("#website").val(content3);
				$("#content1").val(content4);
				$("#content2").val(content5);
				$("#content3").val(content6);
			});
			
			$("#francioni").click(function(){
				$("#francioni").css("opacity","1.0");
				$("#geggharrison").css("opacity",".5");
				$("#gerald").css("opacity",".5");
				message = msg;
				username = $("#field02").text();
				content1 = $("#field13").text();
				content2 = $("#field14").text();
				content3 = $("#field15").attr("href");
				content4 = $("#field16").text();
				content5 = $("#field17").text();
				content6 = $("#field18").text();
				$("#username").val(username);
				$("#name").val(content1);
				$("#email").val(content2);
				$("#website").val(content3);
				$("#content1").val(content4);
				$("#content2").val(content5);
				$("#content3").val(content6);
			});
		
		
});			
});