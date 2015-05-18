$(document).ready(function() {
    var content_search = $('input[name="listToolbarSearch[term]"]');
    var menu_search = $('#settings-search-input');

    if (content_search.length == 1) {
        content_search.focus();
    }

    else if (menu_search.length == 1) {
        menu_search.focus();
    }
});