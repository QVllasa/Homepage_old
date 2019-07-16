//Navbar animation--------------------------------------------------------------------
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
    $('.carousel-caption.properties').css('transform', 'translate3d(0, ' + (scrolled * (-0.5)) + 'px, 0)');// parallax (25% scroll rate)
    $('.carousel-caption.name-caption').css('transform', 'translate3d(0, ' + (scrolled * (-0.5)) + 'px, 0)');// parallax (25% scroll rate)
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
  createBar(bar1, 0.9);
  createBar(bar2, 0.8);
  createBar(bar3, 0.7);
  createBar(bar4, 0.6);
  createBar(bar5, 0.5);
  createBar(bar6, 0.4);
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
      bar.setText(value + '%');
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
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '12pt';
  bar.text.style.fontWeight = 'bold';
  bar.text.style.color = '#FFFFFF';
  bar.text.style.left = '10%';
  bar.text.style.padding = '10%';
  bar.animate(percentage);
}


function createAllnormal() {
  createNormalBars(nbar1, 0.9);
  createNormalBars(nbar2, 0.9);
  createNormalBars(nbar3, 0.9);
  createNormalBars(nbar4, 0.9);
  createNormalBars(nbar5, 0.9);
  createNormalBars(nbar6, 0.9);
}

//progressbar js ------------------------------------------------


//Isotope--------------------------------------
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
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
$('#filters').on('click', '.link-element', function () {
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

//Isotope--------------------------------------


//AOS--------------------------------------
AOS.init({
  once: true,
  offset: 10,
});
//AOS--------------------------------------

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
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
      }
    }, {
      breakpoint: 475,
      settings: "unslick"


    }]
  });
}

function onloadAllFunc() {
  logoSlider();
  typeWriter();
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

  var myWork = new ScrollMagic.Scene({
    triggerElement: '#portfolio-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .on('start', function () {
      addPortfolioContent();

    })
    .setClassToggle('#portfolio-icon', 'animate-icon-section')
    .addTo(controller);

  var myWork = new ScrollMagic.Scene({
    triggerElement: '#skills-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#skills-icon', 'animate-icon-section')
    .addTo(controller);

  var myWork = new ScrollMagic.Scene({
    triggerElement: '#resume-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#resume-icon', 'animate-icon-section')
    .addTo(controller);

  var myWork = new ScrollMagic.Scene({
    triggerElement: '#company-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#company-icon', 'animate-icon-section')
    .addTo(controller);

  var myWork = new ScrollMagic.Scene({
    triggerElement: '#contact-icon',
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle('#contact-icon', 'animate-icon-section')
    .addTo(controller);


  var circleProg = new ScrollMagic.Scene({
    triggerElement: '#circle-progressbars',
    triggerHook: 0.9,
    reverse: false,

  })
    .on('start', function () {
      createAllBar();
      console.log('circle');
    })

    .addTo(controller);


  var normalProg = new ScrollMagic.Scene({
    triggerElement: '#normal-progressbars',
    triggerHook: 0.9,
    reverse: false,
  })
    .on('start', function () {
      createAllnormal();
      console.log('normal');
    })

    .addTo(controller);

});


//Init scroll Magic--------------------------------------


//add Content on scroll with ScrollMagic---------------

function addPortfolioContent() {
  $('#portfolio-content').append("<div class=\"grid\">\n" +
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
    "      </div>")
}


//add Portfolio on scroll with ScrollMagic---------------
