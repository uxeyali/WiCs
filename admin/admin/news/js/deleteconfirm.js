$(document).ready(function() {
    var headline = $("#articlename").text();
    headline = headline.replace(/ /g, "%20");
    
    $("#delete").click(function() {
        var path = "delete.php?headline=" + headline;
        
        $.ajax({url:path, 
                success:function(result){
                    $("#pagecontent").html(result);
                },
                error: function(xhr) {
                    alert("Error: " + xhr.status + " " + xhr.statusText);
                }});

    });
    
    $("#cancel").click(function() {
        window.location = "../news/deleteselector.php";
    });
});
