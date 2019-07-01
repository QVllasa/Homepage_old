//Navbar animation
window.onscroll = function () {
  scrollFunctionResize()
};


function scrollFunctionResize() {
  if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
    document.getElementById("paddingNav").style.paddingTop = "0px";
    document.getElementById("paddingNav").style.paddingBottom = "0px";


  } else {
    document.getElementById("paddingNav").style.paddingTop = "20px";
    document.getElementById("paddingNav").style.paddingBottom = "20px";


  }
}

$(document).ready(function () {
  $(window).scroll(function () {
    var s = 0.5 + ($(window).scrollTop() / 500);
    $('#background-dark').css("background", 'rgba(0,0,0,' + (s) + ')');
    $('#logoQ').css("opacity", -0.5 + s);
    $('#logoV').css("opacity", -0.5 + s);
    console.log(s)
  })
});

/*

function scrollFunctionOpacity () {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("background-dark").style.background = "rgba(0,0,0 , 1)";


    }
    else {
        document.getElementById("background-dark").style.background = "rgba(0,0,0 , 0.5)";


    }
}
*/


//smooth scroll

$('a[href*="#"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 1500, 'swing', function () {
    window.location.hash = target;
  });
});


//show prev/next button on hover
var hovering = $("#video-carousel-header");

hovering.mouseenter(
  function () {
    $(this).append($("  <a class=\"carousel-control-prev\" href=\"#video-carousel-example\" role=\"button\" data-slide=\"prev\">\n" +
      "    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\n" +
      "    <span class=\"sr-only\">Previous</span>\n" +
      "  </a>\n" +
      "  <a class=\"carousel-control-next\" href=\"#video-carousel-example\" role=\"button\" data-slide=\"next\">\n" +
      "    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\n" +
      "    <span class=\"sr-only\">Next</span>\n" +
      "  </a>"));
  },
);

hovering.mouseleave(
  function () {
    $(this).children("a").remove();
  }
);


//Parallax
$(document).ready(function () {
  $(window).on('load scroll', function () {
    var scrolled = $(this).scrollTop();
    $('.carousel-item.video-carousel-item').css('transform', 'translate3d(0, ' + (scrolled * 0.25) + 'px, 0)');
    $('.carousel-caption.properties').css('transform', 'translate3d(0, ' + (scrolled * (-0.5)) + 'px, 0)');// parallax (25% scroll rate)
    $('.carousel-caption.name-caption').css('transform', 'translate3d(0, ' + (scrolled * (-0.5)) + 'px, 0)');// parallax (25% scroll rate)
  });

});

//typewrite

var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName('typewrite');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff; color: white; font-size: 300%;}";
  document.body.appendChild(css);
};

//carousel-links
var btns = document.getElementsByClassName('link-element');
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("link-element active");
    console.log(current);
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";

  });
}


$("#latest-projects-link").click(function () {
  $('.portfolio-slideshow').carousel(0);
});

$("#upcoming-projects-link").click(function () {
  $('.portfolio-slideshow').carousel(1);
});

$("#archived-projects-link").click(function () {
  $('.portfolio-slideshow').carousel(2);
});


//progress bar
var bar = new ProgressBar.Circle(container, {
  color: '#595858',
  trailColor: '#FFFFFF',
  trailWidth: 6,
  duration: 1400,
  easing: 'bounce',
  strokeWidth: 6,

  from: {color: '#595858', a: 0},
  to: {color: '#595858', a: 1},

  // Set default step function for all animate calls
  step: function (state, circle) {
    circle.path.setAttribute('stroke', state.color);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value + '%');
    }
  }
});

bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '3rem';
bar.text.style.color = '#595858';

bar.animate(.7);  // Number from 0.0 to 1.0
