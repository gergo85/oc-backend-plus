$(function() {
    $('.mainmenu-nav li').each(function(index) {
        $(this).addClass('with-tooltip');
        $('a', this).attr('title', $('.nav-label', this).html());
    });
});
