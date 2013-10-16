/**
 * Blendet angezeigte Elemente aus, bzw. versteckte Elemente ein.
 * @author Ellen
 */
function toggleDisplay(elementId) {
	var element = document.getElementById(elementId);
	var currentView = element.className;
	if ( currentView == "hidden") {
		element.className = "visible";
	} else {
		element.className = "hidden";
	}
}

/**
 * Blendet das Element zur zugehörigen Id aus.
 * @author Ellen
 */
function hideElement(elementId) {
	var element = document.getElementById(elementId);
	element.className = "hidden";
}

/**
 * Blendet das Element zur zugehörigen Id aus.
 * @author Ellen
 */
function showElement(elementId) {
	var element = document.getElementById(elementId);
	element.className = "visible";
}
/** Toggle 
 *	@author Julia 
 */

$(document).ready(function() {
    $('.toggle-item').each(function(idx, itm) {
        $(itm).find('.toggle').on('click', function() {
            $(itm).find('.content').toggle(200);
        });
    });
});

/** 
 * Toggle auf zweiter Stufe 
 * @author Ellen
 */
$(document).ready(function() {
    $('.further-toggle-item').each(function(idx, itm) {
        $(itm).find('.further-toggle').on('click', function() {
            $(itm).find('.further-toggle-content').toggle(200);
        });
    });
});
