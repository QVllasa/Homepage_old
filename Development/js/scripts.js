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
/*
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
*/


//circle progress bar
var settings = {
  color: '#595858',
  trailColor: '#FFFFFF',
  trailWidth: 10,
  duration: 1400,
  easing: 'bounce',
  strokeWidth: 10,


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
};

var bar1 = new ProgressBar.Circle('#prog1', settings);
var bar2 = new ProgressBar.Circle('#prog2', settings);
var bar3 = new ProgressBar.Circle('#prog3', settings);
var bar4 = new ProgressBar.Circle('#prog4', settings);
var bar5 = new ProgressBar.Circle('#prog5', settings);
var bar6 = new ProgressBar.Circle('#prog6', settings);


function createBar(bar, percentage) {
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '2rem';
  bar.text.style.color = '#595858';
  bar.path.style.strokeLinecap = 'round';
  bar.animate(percentage);
}

createBar(bar1, 0.9);
createBar(bar2, 0.8);
createBar(bar3, 0.7);
createBar(bar4, 0.6);
createBar(bar5, 0.5);
createBar(bar6, 0.4);


//normal progress bar


var normalbarsettings = {
  strokeWidth: 7,
  easing: 'bounce',
  duration: 1400,
  color: '#595858',
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

createNormalBars(nbar1, 0.9);
createNormalBars(nbar2, 0.9);
createNormalBars(nbar3, 0.9);
createNormalBars(nbar4, 0.9);
createNormalBars(nbar5, 0.9);
createNormalBars(nbar6, 0.9);


// init Isotope
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

//AOS - animate on scroll
AOS.init({
  once: true
});


//multi item carousel
$(document).ready(function () {
  $('#logoSlideshow .slick').slick();
});

