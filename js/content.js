/**
 * Author: julia
 * Date: 09.10.13
 */

/* Slidedown */
var searchvisible = 0;
$(function() {
    $('.dropdown').click(function(e){
        e.preventDefault();
        if (searchvisible === 0) {
            // Searchbox is currently hidden, show it:
            $('#search_mini_form').slideDown(200);
            searchvisible = 1;
        } else {
    // Searchbox is currently shown, hide it:
    $('#search_mini_form').slideUp(200);
    searchvisible = 0;
    }
});
});

$(document).ready(function() {
    $('.contact-item').each(function(idx, itm) {
        $(itm).find('.toggle').on('click', function() {
            $(itm).find('.content').toggle(200);
        });
    });
});