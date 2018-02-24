$(document).ready(function() {
    $('.newsarticle').each(function() {
        $(this).hover(function() {
            $(this).css('cursor', 'pointer');
        });
        $(this).click(function() {
            var link = $(this).find(".headline");
            link = $(':nth-child(1)', link).attr('href');
            window.location = link;
        });
    });
});