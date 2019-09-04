
//observer

const observer = lozad();
observer.observe();

//loading screen -----------------

$(window).on("load",function(){
  $(".loader-wrapper").fadeOut("slow");
});


//loading screen ---------------

//resume blogs ---------------

function openNavLeft1() {
  document.getElementById("edu1").style.width = "100%";
}
function openNavLeft2() {
  document.getElementById("edu2").style.width = "100%";
}
function openNavLeft3() {
  document.getElementById("edu3").style.width = "100%";
}

function openNavRight1() {
  document.getElementById("work1").style.width = "100%";
}
function openNavRight2() {
  document.getElementById("work2").style.width = "100%";
}
function openNavRight3() {
  document.getElementById("work3").style.width = "100%";
}
function openNavRight4() {
  document.getElementById("work4").style.width = "100%";
}
function openNavRight5() {
  document.getElementById("work5").style.width = "100%";
}


function closeNavLeft() {
  $('.sidepanel-left').on('click').css({width:"0"})
}

function closeNavRight() {
  $('.sidepanel-right').on('click').css({width:"0"})
}




//resume blogs ---------------

//Navbar animation--------------------------------------------------------------------



$(document).ready(function () {
  $(window).scroll(function () {
    var s = 0.5 + ($(window).scrollTop() / 500);
    $('.navbar.fixed-top').css("background", 'rgba(0,0,0,' + (s) + ')');
    $('#logoQ').css("opacity", -0.5 + s);
    $('#logoV').css("opacity", -0.5 + s);

  })
});

//Navbar animation--------------------------------------------------------------------

//smooth scroll--------------------------------------------------------------------
$('a[href*="#my"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 75
  }, 1500, 'swing', function () {
    window.location.hash = $target;
  });
});

$('a[href*="#project-description"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 200
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
});

$('a[href*="#portfolio-icon"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top - 100
  }, 400, 'swing', function () {
    window.location.hash = $target;
  });
});


//smooth scroll--------------------------------------------------------------------


//show prev/next button on hover ----------------------------------
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
//show prev/next button on hover ----------------------------------


//Parallax ------------------------------------------------
$(document).ready(function () {
  $(window).on('load scroll', function () {
    var scrolled = $(this).scrollTop();
    $('.carousel-item.video-carousel-item').css('transform', 'translate3d(0, ' + (scrolled * 0.25) + 'px, 0)');
    $('.carousel-caption').css('bottom', ''+(50+scrolled)+'px' );
  });
});

//Parallax ------------------------------------------------

//Typewriter ------------------------------------------------

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

function typeWriter() {
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
}

//Typewriter ------------------------------------------------


//progressbar js ------------------------------------------------

var settings = {
  color: '#838590',
  trailColor: '#FFFFFF',
  trailWidth: 10,
  duration: 1500,
  easing: 'bounce',
  strokeWidth: 10,


  from: {color: '#838590', a: 0},
  to: {color: '#838590', a: 1},

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
};


var bar1 = new ProgressBar.Circle('#prog1', settings);
var bar2 = new ProgressBar.Circle('#prog2', settings);
var bar3 = new ProgressBar.Circle('#prog3', settings);
var bar4 = new ProgressBar.Circle('#prog4', settings);
var bar5 = new ProgressBar.Circle('#prog5', settings);
var bar6 = new ProgressBar.Circle('#prog6', settings);


function createBar(bar, percentage) {
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '130%';
  bar.text.style.color = '#838590';
  bar.path.style.strokeLinecap = 'round';
  bar.animate(percentage);
}


function createAllBar() {
  createBar(bar1, 0.85);
  createBar(bar2, 0.65);
  createBar(bar3, 0.85);
  createBar(bar4, 0.8);
  createBar(bar5, 0.4);
  createBar(bar6, 0.9);
}

//normal progress bar
var normalbarsettings = {
  strokeWidth: 7,
  easing: 'bounce',
  duration: 2500,
  color: '#474D5D',
  trailColor: '#e0e0e0',
  trailWidth: 7,
  svgStyle: {width: '100%', height: '100%'},

  from: {color: '#FFEA82'},
  to: {color: '#ED6A5A'},
  step: (state, bar) => {
    var value = Math.round(bar.value() * 100);
    if (value === 0) {
      bar.setText('');
    } else {
      bar.setText('');
    }
  }
};



var nbar1 = new ProgressBar.Line('#npb1', normalbarsettings);
var nbar2 = new ProgressBar.Line('#npb2', normalbarsettings);
var nbar3 = new ProgressBar.Line('#npb3', normalbarsettings);
var nbar4 = new ProgressBar.Line('#npb4', normalbarsettings);
var nbar5 = new ProgressBar.Line('#npb5', normalbarsettings);
var nbar6 = new ProgressBar.Line('#npb6', normalbarsettings);


function createNormalBars(bar, percentage) {
  bar.animate(percentage);
}


function createAllnormal() {
  createNormalBars(nbar1, 0.9);
  createNormalBars(nbar2, 0.95);
  createNormalBars(nbar3, 0.9);
  createNormalBars(nbar4, 1);
  createNormalBars(nbar5, 0.85);
  createNormalBars(nbar6, 0.2);

}

//progressbar js ------------------------------------------------


//multi item carousel--------------------------------------


function logoSlider() {
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


function scrollspyWorkaround (){
  $('.navbar-collapse a').click(function (e) {
    if  (window.innerWidth < 768){
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

  var controller = new ScrollMagic.Controller();



  var navbar = new ScrollMagic.Scene({
    triggerElement: '#my-about-me-section',
    triggerHook: 0.13,
    reverse: true,

  })
      .setClassToggle('#navbar-top', 'resize')
      .addTo(controller);

  var bestIn = new ScrollMagic.Scene({
    triggerElement: '#my-best-in-section',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#my-best-in-section', 'animate-section')
    .addTo(controller);

  var portfolioIcon = new ScrollMagic.Scene({
    triggerElement: '#portfolio-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#portfolio-icon', 'animate-section')
    .addTo(controller);

  var portfolioLinks = new ScrollMagic.Scene({
    triggerElement: '#portfolio-section-links',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#portfolio-section-links', 'animate-section')
    .addTo(controller);

  var portfolioTiles = new ScrollMagic.Scene({
    triggerElement: '#portfolio-tiles',
    triggerHook: 0.95,
    reverse: false,
  })
/*    .on('start', function () {
      addPortfolioContent(allImageLoaded);


    })*/
    .setClassToggle('#portfolio-tiles', 'animate-section')
    .addTo(controller);

  var skillsIcon = new ScrollMagic.Scene({
    triggerElement: '#skills-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#skills-icon', 'animate-section')
    .addTo(controller);

  var circleProg = new ScrollMagic.Scene({
    triggerElement: '#circle-progressbars',
    triggerHook: 0.9,
    reverse: false,

  })
    .on('start', function () {
      createAllBar();
    })

    .addTo(controller);


  var normalProg = new ScrollMagic.Scene({
    triggerElement: '#normal-progressbars',
    triggerHook: 0.9,
    reverse: false,
  })
    .on('start', function () {
      createAllnormal();
    })

    .addTo(controller);

  var resumeIcon = new ScrollMagic.Scene({
    triggerElement: '#resume-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#resume-icon', 'animate-section')
    .addTo(controller);

  var actual = new ScrollMagic.Scene({
    triggerElement: '#actual',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#actual', 'animate-section')
    .addTo(controller);

  var resumeItemsLeft1 = new ScrollMagic.Scene({
    triggerElement: '#left1',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left1', 'animate-section-X')
    .addTo(controller);

  var resumeItemsLeft2 = new ScrollMagic.Scene({
    triggerElement: '#left2',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left2', 'animate-section-X')
    .addTo(controller);

  var resumeItemsLeft3 = new ScrollMagic.Scene({
    triggerElement: '#left3',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#left3', 'animate-section-X')
    .addTo(controller);

  var resumeItemsRight1 = new ScrollMagic.Scene({
    triggerElement: '#right1',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right1', 'animate-section-X')
    .addTo(controller);

  var resumeItemsRight2 = new ScrollMagic.Scene({
    triggerElement: '#right2',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right2', 'animate-section-X')
    .addTo(controller);

  var resumeItemsRight3 = new ScrollMagic.Scene({
    triggerElement: '#right3',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right3', 'animate-section-X')
    .addTo(controller);

  var resumeItemsRight4 = new ScrollMagic.Scene({
    triggerElement: '#right4',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right4', 'animate-section-X')
    .addTo(controller);

  var resumeItemsRight5 = new ScrollMagic.Scene({
    triggerElement: '#right5',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#right5', 'animate-section-X')
    .addTo(controller);

  var company = new ScrollMagic.Scene({
    triggerElement: '#company-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#company-icon', 'animate-section')
    .addTo(controller);

  var companyFeedback = new ScrollMagic.Scene({
    triggerElement: '#feedback-container',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#feedback-container', 'animate-section')
    .addTo(controller);

  var companyLogos = new ScrollMagic.Scene({
    triggerElement: '#logo-container',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#logo-container', 'animate-section')
    .addTo(controller);

  var contactIcon = new ScrollMagic.Scene({
    triggerElement: '#contact-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-icon', 'animate-section')
    .addTo(controller);

  var contactSocial = new ScrollMagic.Scene({
    triggerElement: '#contact-social-media',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-social-media', 'animate-section')
    .addTo(controller);

  var contactForm = new ScrollMagic.Scene({
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
  var $grid = $('.grid').isotope({
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
        var weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[\(\)]/g, ''));
      }
    }
  });


// filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
      var number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

// bind filter button click
  $('.filters').on('click', '.link-element', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({filter: filterValue});
  });


// change is-checked class on buttons
  $('.button-group').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
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
  var $element = $(this);
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