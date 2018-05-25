/*
$(window).height();   // returns height of browser viewport
$(document).height(); // returns height of HTML document (same as pageHeight in screenshot)
$(window).width();   // returns width of browser viewport
$(document).width(); // returns width of HTML document (same as pageWidth in screenshot)
*/

let x = x_ = $(window).width()
let y = y_ = $(window).height()

function get_dimensions(){
    x = $(window).width()
    y = $(window).height()
    if( (x_ != x) || ( y_ != y) ){
        x = x_ = $(window).width()
        y = y_ = $(window).height()
        document.getElementsByTagName("body")[0].innerHTML = $(window).width() + " x " + $(window).height();
    }
}

setInterval( get_dimensions, 1 )