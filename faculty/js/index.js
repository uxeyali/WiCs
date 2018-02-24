$(document).ready(function(){
	$("#admin_add").load("../../../faculty/index.php #ajax", function(){
	unwrapImages();
	var message;
	var username;
	var content1;
	var content2;
	var content3;
	var content4;
	var content5;
	var content6;
	var personal_site;
	var id;
	$("#ad_add").html("**Click on a professor's picture to edit their information.**");
	$(".row").on('click', 'img', function(){
		$(".row img").css("opacity","0.6");
		$(".banner img").css("opacity","1");
		$("footer img").css("opacity","1");
		id = this.id;
		$("#"+id).css("opacity","1");
		field0 = id+"field0";
		field0 = id+"field0";
		field1 = id+"field1";
		field2 = id+"field2";
		field3 = id+"field3";
		field4 = id+"field4";
		field5 = id+"field5";
		field6 = id+"field6";
		field7 = id+"field7";
		username = $("#"+field0).text();
		content1 = $("#"+field1).text();
		content2 = $("#"+field2).text();
		content3 = $("#"+field3).attr("href");
		content4 = $("#"+field4).text();
		content5 = $("#"+field5).text();
		content6 = $("#"+field6).text();
		content7 = $("#"+field7).text();
		$("#username").val(username);
		$("#name").val(content1);
		$("#email").val(content2);
		$("#website").val(content3);
		$("#content1").val(content4);
		$("#content2").val(content5);
		$("#content3").val(content6);
		$("#personal_site").val(content7);
	});
	
	$("#fac img").hover(function(){
		$(this).css('cursor','pointer');
	});
	
	$("#header").attr('src', '../FacultyCustomization/img/winonalogo.png');
	$("#footer").attr('src', '../FacultyCustomization/img/footer.png');
	$("#link").attr('href', '../FacultyCustomization/index.php');
	$("#gerald").attr('src', '../FacultyCustomization/img/cichanowski.jpg');
	$("#link2").hide();	
	start();
	});
	function start(){
		$("#admin_add").contents().unwrap();
		$(".images").attr('src',function(i,v){
			return '../../'+v;
		});
	}
});
function unwrapImages(){
	$(".unwrapping").unwrap();
}