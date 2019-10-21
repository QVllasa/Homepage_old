
$(window).ready(function(){
  // setTimeout(showInfoBox, 10000);

  $("#infobox").hide().delay(7500).fadeIn(500);

});

$('#infoclose').click(function() {
  $("#infobox").fadeOut("fast");
});


//popover 'HEUTE'
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


//function showInfoBox(){
 // $('.infobox').css('opacity', '0.9', 'transition', '1s ease-in')
//}





//loading screen -----------------

$(window).on("load", function () {
  $(".loader-wrapper").fadeOut("slow");
});


//loading screen ---------------


//scroll to top
$(document).ready(function () {
  $(this).scrollTop(0);
});


// noinspection JSUnresolvedFunction


//observer

document.addEventListener("DOMContentLoaded", function () {
  var lazyloadImages;

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function (image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");

    function lazyload() {
      if (lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }

      lazyloadThrottleTimeout = setTimeout(function () {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function (img) {
          if (img.offsetTop < (window.innerHeight + scrollTop)) {
            img.src = img.dataset.src;
            img.classList.remove('lazy');
          }
        });
        if (lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
});


//resume blogs ---------------

function openNavLeft1() {
  document.getElementById("edu1").style.width = "100%";
  // document.getElementById("edu1close").className += " sticky-button";
  scrolltoresumetop()
}

function openNavLeft2() {
  document.getElementById("edu2").style.width = "100%";
  scrolltoresumetop()
}

function openNavLeft3() {
  document.getElementById("edu3").style.width = "100%";
  scrolltoresumetop()
}

function openNavRight1() {
  document.getElementById("work1").style.width = "100%";
  scrolltoresumetop()
}

function openNavRight2() {
  document.getElementById("work2").style.width = "100%";
  scrolltoresumetop()
}

function openNavRight3() {
  document.getElementById("work3").style.width = "100%";
  scrolltoresumetop()
}

function openNavRight4() {
  document.getElementById("work4").style.width = "100%";
  scrolltoresumetop()
}

function openNavRight5() {
  document.getElementById("work5").style.width = "100%";
  scrolltoresumetop()
}


function closeNavLeft() {
  $('.sidepanel-left').on('click').css({width: "0"});
  scrolltoresumetop()

}

function closeNavRight() {
  $('.sidepanel-right').on('click').css({width: "0"});
  scrolltoresumetop()
}


//resume blogs ---------------

//Navbar animation--------------------------------------------------------------------


$(document).ready(function () {
  var width = window.innerWidth;
  if ($('#header-container').length > 0) {
    var header = 1;
    console.log('header is there');
  }
  else {
    header = 0;
  }

  if (width >= 990 && header === 0) {
    $(window).scroll(function () {
      let s = 0.5 + ($(window).scrollTop() / 500);
      $('.navbar.fixed-top').css("background", 'rgba(0,0,0,' + (s) + ')');
      $('#logoQ').css("opacity", -0.5 + s);
      $('#logoV').css("opacity", -0.5 + s);
      console.log('bigger than 990px')
    });
  } else {
    $('.navbar.fixed-top').css("background", 'rgba(0,0,0, 1)');
    $(window).scroll(function () {
      let s = 0.5 + ($(window).scrollTop() / 500);
      $('#logoQ').css("opacity", -0.5 + s);
      $('#logoV').css("opacity", -0.5 + s);
      console.log('smaller than 990px')
    });
  }
});

//Navbar animation--------------------------------------------------------------------




$(document).ready(function () {

console.log("asdasd");
  if (window.location.hash) {

    let str = $(window.location.hash);
    $('html, body').stop().animate({
      'scrollTop': str.offset().top - 75
    }, 1000, 'swing',);
  }
});


//smooth scroll--------------------------------------------------------------------

$('a[href*="#my"]').on('click', function (e) {
  e.preventDefault();
  let url = window.location.pathname;


  if (url !== "/hobbys.php" ) {


    let $target = $(this.hash);
    let target = $(this.hash);
    console.log(target);


    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 75
    }, 1500, 'swing', function () {
      window.location.hash = $target;
    });
  } else {
    let target = this.hash;
    url = "/index.php" + target;
    console.log(target);
    window.location = url;
  }


});

$('a[href*="#project-description"]').on('click', function (e) {
  e.preventDefault();
  let target = this.hash;
  let $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 200
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
});

$('a[href*="#hobby-description"]').on('click', function (e) {
  e.preventDefault();
  let target = this.hash;
  let $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 200
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
});


$('a[href*="#portfolio-icon"]').on('click', function (e) {
  e.preventDefault();
  let target = this.hash;
  let $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 100
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
});


function scrolltoresumetop() {
  let target = $("#resume-lists");
  let $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 100
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
}


//smooth scroll--------------------------------------------------------------------


//show prev/next button on hover ----------------------------------
let hovering = $("#video-carousel-header");

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
//show prev/next button on hover ----------------------------------


//Parallax ------------------------------------------------
$(document).ready(function () {
  $(window).on('load scroll', function () {
    let scrolled = $(this).scrollTop();
    $('.carousel-item.video-carousel-item').css('transform', 'translate3d(0, ' + (scrolled * 0.25) + 'px, 0)');
    $('.carousel-caption').css('bottom', '' + (50 + scrolled) + 'px');
  });
});

//Parallax ------------------------------------------------

//Typewriter ------------------------------------------------

let TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  let i = this.loopNum % this.toRotate.length;
  let fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  let that = this;
  let delta = 200 - Math.random() * 100;

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

function typeWriter() {
  let elements = document.getElementsByClassName('typewrite');
  for (let i = 0; i < elements.length; i++) {
    let toRotate = elements[i].getAttribute('data-type');
    let period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  let css = document.createElement("style");
  // noinspection JSDeprecatedSymbols
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff; color: white; font-size: 300%;}";
  document.body.appendChild(css);
}

//Typewriter ------------------------------------------------


//multi item carousel--------------------------------------


function logoSlider() {
  // noinspection JSUnresolvedFunction
  $('.slider.company-logos').slick({
    autoplay: true,
    autoplaySpeed: 1200,
    arrows: false,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
      }
    }, {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
      }
    }, {
      breakpoint: 575,
      settings: "unslick"
    }]
  });
}


function scrollspyWorkaround() {
  $('.navbar-collapse a').click(function () {
    if (window.innerWidth < 990) {
      $('.navbar-collapse').collapse('toggle');
    }
  });
}


function onloadAllFunc() {
  loadIsotope();
  logoSlider();
  typeWriter();
  scrollspyWorkaround();

}

window.onload = onloadAllFunc;

window.onresize = function () {
  if ($(".slick-initialized")[0]) {
    void (0);
    console.log("slick already running: void(0) does nothing")
  } else {
    logoSlider();
  }
};
//multi item carousel--------------------------------------


//Init scroll Magic--------------------------------------
$(document).ready(function () {

  // noinspection JSUnresolvedVariable,JSUnresolvedFunction
  let controller = new ScrollMagic.Controller();


  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let navbar = new ScrollMagic.Scene({
    triggerElement: '#my-about-me-section',
    triggerHook: 0.13,
    reverse: true,

  })
    .setClassToggle('#navbar-top', 'resize')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let bestIn = new ScrollMagic.Scene({
    triggerElement: '#my-best-in-section',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#my-best-in-section', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let portfolioIcon = new ScrollMagic.Scene({
    triggerElement: '#portfolio-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#portfolio-icon', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let portfolioLinks = new ScrollMagic.Scene({
    triggerElement: '#portfolio-section-links',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#portfolio-section-links', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let portfolioTiles = new ScrollMagic.Scene({
    triggerElement: '#portfolio-tiles',
    triggerHook: 0.95,
    reverse: false,
  })
  /*    .on('start', function () {
        addPortfolioContent(allImageLoaded);


      })*/
    .setClassToggle('#portfolio-tiles', 'animate-section')
    .addTo(controller);


  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let skillsIcon = new ScrollMagic.Scene({
    triggerElement: '#skills-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#skills-icon', 'animate-section')
    .addTo(controller);


  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction
  let circleProg = new ScrollMagic.Scene({
    triggerElement: '#circle-progressbars',
    triggerHook: 0.9,
    reverse: false,

  })
    .on('start', function () {
      createAllBar();
    })

    .addTo(controller);


  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction
  let normalProg = new ScrollMagic.Scene({
    triggerElement: '#normal-progressbars',
    triggerHook: 0.9,
    reverse: false,
  })
    .on('start', function () {
      createAllnormal();
    })

    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let resumeIcon = new ScrollMagic.Scene({
    triggerElement: '#resume-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#resume-icon', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction,JSUnresolvedFunction
  let actual = new ScrollMagic.Scene({
    triggerElement: '#actual',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#actual', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction
  let resumeItemsLeft1 = new ScrollMagic.Scene({
    triggerElement: '#left1',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left1', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsLeft2 = new ScrollMagic.Scene({
    triggerElement: '#left2',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left2', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsLeft3 = new ScrollMagic.Scene({
    triggerElement: '#left3',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left3', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsRight1 = new ScrollMagic.Scene({
    triggerElement: '#right1',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right1', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsRight2 = new ScrollMagic.Scene({
    triggerElement: '#right2',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right2', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsRight3 = new ScrollMagic.Scene({
    triggerElement: '#right3',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right3', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsRight4 = new ScrollMagic.Scene({
    triggerElement: '#right4',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right4', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let resumeItemsRight5 = new ScrollMagic.Scene({
    triggerElement: '#right5',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right5', 'animate-section-X')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let company = new ScrollMagic.Scene({
    triggerElement: '#company-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#company-icon', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let companyFeedback = new ScrollMagic.Scene({
    triggerElement: '#feedback-container',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#feedback-container', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let companyLogos = new ScrollMagic.Scene({
    triggerElement: '#logo-container',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#logo-container', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let contactIcon = new ScrollMagic.Scene({
    triggerElement: '#contact-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-icon', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let contactSocial = new ScrollMagic.Scene({
    triggerElement: '#contact-social-media',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-social-media', 'animate-section')
    .addTo(controller);

  // noinspection JSUnusedLocalSymbols,JSUnresolvedVariable,JSUnresolvedFunction
  let contactForm = new ScrollMagic.Scene({
    triggerElement: '#contact-form-section',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-form-section', 'animate-section')
    .addTo(controller);


});


//Init scroll Magic--------------------------------------


//add Content on scroll with ScrollMagic---------------

/*function allImageLoaded() {
  function imageLoaded() {
    loadIsotope();
  }

  $('.element-item img').each(function () {
    if (this.complete) {
      imageLoaded.call(this);
    } else {
      $(this).one('load', imageLoaded);
    }
  });
}*/


/*function addPortfolioContent(callback) {
  $('#portfolio-tiles').append("<div class=\"grid\">\n" +
    "        <div class=\"element-item transition metal\" data-category=\"transition\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/Chroma1.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "        <div class=\"element-item metalloid\" data-category=\"metalloid\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/AbstractShapes.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "        <div class=\"element-item post-transition metal \" data-category=\"post-transition\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/AbstractShapes.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "        <div class=\"element-item post-transition metal \" data-category=\"post-transition\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/AbstractShapes.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "        <div class=\"element-item transition metal \" data-category=\"transition\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/AbstractShapes.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "        <div class=\"element-item alkali metal\" data-category=\"alkali\">\n" +
    "          <div class=\"img-hover-zoom\">\n" +
    "            <img src=\"img/AbstractShapes.jpg\" class=\"img-fluid\">\n" +
    "            <div class=\"overlay \">\n" +
    "              <div class=\"text \">1</div>\n" +
    "            </div>\n" +
    "          </div>\n" +
    "        </div>\n" +
    "      </div>");
  callback();
}*/


//add Portfolio on scroll with ScrollMagic---------------

//Isotope--------------------------------------

function loadIsotope() {
  // noinspection JSUnresolvedFunction
  let $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'masonry',
    masonry: {
      columnWidth: 270,
      isFitWidth: true
    },
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function (itemElem) {
        let weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[]/g, ''));
      }
    }
  });


// filter functions
  let filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
      let number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
      let name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

// bind filter button click
  $('.filters').on('click', '.link-element', function () {
    let filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    // noinspection JSUnresolvedFunction
    $grid.isotope({filter: filterValue});
  });


// change is-checked class on buttons
  $('.button-group').each(function (i, buttonGroup) {
    let $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', '.link-element', function () {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });

}

//Isotope--------------------------------------

//fadein fadeout freelancer --------------


/*
$( ".icon-box" ).each(function(){
  let $element = $(this);
  function fadeInOut () {
    $element.fadeIn(100, function () {
      $element.fadeOut(100, function () {
        $element.fadeIn(100, function () {
          setTimeout(fadeInOut, 100);
        });
      });
    });
  }

  fadeInOut();

});
*/


//fadein fadeout freelancer --------------


//Uses Passive Event Listeners to Improve Scrolling Performance


if ('ontouchstart' in document.documentElement) {
  document.addEventListener('touchstart', onTouchStart, {passive: true});
}
