$(document).ready(function() {
    var mediaQueryList = window.matchMedia("print");
    mediaQueryList.addListener(function(mql) {
        if (mql.matches) {
            for(var i = 1; i < 14; i ++){
                if($("#content-image-print-"+i).length > 0){
                    var image = $("#content-image-print-"+i)[0].getAttribute("data-image");
                    $("#content-image-print-"+i).css("background-image", "url("+image+")");
                    $("#content-image-print-"+i).css("width", "100%");
                    $("#content-image-print-"+i).css("height", "40vh");
                    $("#content-image-print-"+i).css("background-repeat", "no-repeat");
                    $("#content-image-print-"+i).css("background-size", "cover");
                    $("#content-image-print-"+i).css("background-position", "center center");
                }
            }
        }
    });
});