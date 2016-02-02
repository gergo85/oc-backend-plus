$(function() {
    var content_search = $('input[name="listToolbarSearch[term]"]');
    var template_search = $('input[name="templatesToolbarSearch[term]"]');
    var general_search = $('input[name="search"]');

    setTimeout(function() {
        if (content_search.length == 1) {
            content_search.focus();
        }

        else if (template_search.length == 1) {
            template_search.focus();
        }

        else if (general_search.length == 1) {
            general_search.focus();
        }
    }, 300);
});
