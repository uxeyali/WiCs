//This file is to make the News divs on the homepage clickable

$(document).ready(function() {
    $('#newsarticles').children().each(function() {
        $(this).hover(function() {
            $(':nth-child(1)', this).css('cursor', 'pointer');
        });
        $(this).click(function() {
            var link = $(':nth-child(2)', this).attr('href');
            window.location = link;
        });
    });
});