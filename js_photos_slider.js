var w, a, wdth;
function photo_slider(arg) {
    wdth = arg * 200;
    $("#slides").width(wdth);
    a = -(wdth - $("#slider").width()) / 2;
    $("#slides").css({left: a});
    w = $(".slide").width();
    wdth -= 3 * w;
}


function photo_slide_right() {
    a -= w;
    if (a < (-wdth + w)) {
        a = 0;
    }
    $("#temp").html(a);
    $("#slides").animate({left: a});
}

function photo_slide_left() {
    a += w;
    if (a > 0) {
        a = -wdth + w;
    }
    $("#temp").html(a);
    $("#slides").animate({left: a});
}