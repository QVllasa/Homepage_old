

//Isotope--------------------------------------

window.onload = function loadIsotope() {
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


};



//Isotope--------------------------------------

// Change background based on blog type -----------------

$('#triggerHalloWelt').click(function() {
  var clicks = $(this).data('clicks');
  if (clicks) {
    $('#header-container').css({'background-image':'none', 'background-color':'#474D5D'});
  } else {

    $('#header-container').css({'background-image': "url(https://picsum.photos/300/200/?random)" });

  }
  $(this).data("clicks", !clicks);
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