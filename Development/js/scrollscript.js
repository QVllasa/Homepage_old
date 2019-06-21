window.onscroll = function() {scrollFunctionResize(), scrollFunctionOpacity()};


function scrollFunctionResize() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        document.getElementById("paddingNav").style.paddingTop = "0px";
        document.getElementById("paddingNav").style.paddingBottom = "0px";



    } else {
        document.getElementById("paddingNav").style.paddingTop = "20px";
        document.getElementById("paddingNav").style.paddingBottom = "20px";



    }
}

function scrollFunctionOpacity () {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("background-dark").style.background = "rgba(0,0,0 , 1)";

    }
    else {
        document.getElementById("background-dark").style.background = "rgba(0,0,0 , 0.5)";

    }
}



