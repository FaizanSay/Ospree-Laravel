"use strict";

jQuery(document).ready(function ($) {
  $('.newsOuterSlider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    infinite: false,
    arrows: true,
    appendArrows: '.btnArrowWrapper',
    autoplay: false,
    autoplayspeed: 3000,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  $('.csrSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    infinite: false,
    arrows: false,
    // appendArrows: '.csrSliderBtns',
    autoplay: false,
    autoplayspeed: 3000,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  $('.investorsSlider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    infinite: false,
    arrows: true,
    appendArrows: '.investorsBtnArrowWrapper',
    autoplay: false,
    autoplayspeed: 3000,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  $('.bpSlider1').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    centerMode: true,
    centerPadding: '12%',
    responsive: [{
      breakpoint: 992,
      settings: {
        centerPadding: '18%',
        slidesToShow: 2
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        centerMode: false
      }
    }]
  });
  $('.bpSlider2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    }]
  });
  $('.aboutSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    infinite: false,
    arrows: false,
    autoplay: false
  });
  var elementsslick = document.getElementsByClassName("lightgallery-slick");
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = elementsslick[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var item = _step.value;
      lightGallery(item, {
        // selector: "a",
        selector: '.slick-slide:not(.slick-cloned) .light_atag',
        showZoomInOutIcons: true,
        actualSize: false,
        download: false,
        subHtmlSelectorRelative: true
      });
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator["return"] != null) {
        _iterator["return"]();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  var elements = document.getElementsByClassName("lightgallery-universal");
  var _iteratorNormalCompletion2 = true;
  var _didIteratorError2 = false;
  var _iteratorError2 = undefined;

  try {
    for (var _iterator2 = elements[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
      var _item = _step2.value;
      lightGallery(_item, {
        selector: "a",
        showZoomInOutIcons: true,
        actualSize: false,
        download: false,
        subHtmlSelectorRelative: true
      });
    }
  } catch (err) {
    _didIteratorError2 = true;
    _iteratorError2 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion2 && _iterator2["return"] != null) {
        _iterator2["return"]();
      }
    } finally {
      if (_didIteratorError2) {
        throw _iteratorError2;
      }
    }
  }

  $("header .rightOuter .media-center ul li.menu-item-has-children").on('click', function () {
    $(this).toggleClass('showMenu');
  });
  $(document).on("click", ".main-header .mainMenu ul li.menu-item-has-children > a", function () {
    $(this).siblings('.sub-menu').toggleClass('show-sub-menu');
    $(this).siblings('.sub-menu-toggle').toggleClass('show-sub-menu');
  });
  $(".storeLocationsSection .storeLocationsWrapper").on('click', '.btnStoreViewMore', function () {
    var newbtntext = $(this).data('btntext');
    var oldbtntext = $(this).text();
    $(this).data('btntext', oldbtntext);
    $(this).text(newbtntext);
    $('.storeLocationsWrapper .extraStoreCards').each(function () {
      $(this).toggleClass('d-none');
    });
  });
  $('.milestonesSection [data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
    $('.milestonesSection .yearSelected').text($(this).text().trim());
  });
  $('.newMember .singleItem .memberDesc .reviewInner').on('click', '.cursorPointer', function () {
    if ($(this).data('text') == 'more') {
      $(this).text('Read less');
      $(this).data('text', 'less');
      $(this).parents('.reviewInner').find('.reviewWrapperFull').removeClass('d-none');
      $(this).parents('.reviewInner').find('.reviewWrapperhalf').addClass('d-none');
    } else {
      $(this).text('Read more');
      $(this).data('text', 'more');
      $(this).parents('.reviewInner').find('.reviewWrapperFull').addClass('d-none');
      $(this).parents('.reviewInner').find('.reviewWrapperhalf').removeClass('d-none');
    }
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      $("header").addClass("fixed_top");
      $(".scrolltotop").removeClass("hide");
    } else {
      $("header").removeClass("fixed_top");
      $(".scrolltotop").addClass("hide");
    }
  }); // theMap();
  // $(window).resize(function () {
  //   theMap();
  // });
}); // function theMap() {
//   if ($('.csrIMG').length) {
//     if ($(window).width() > 992) {
//       var mapOffset = $('.csrIMG').offset();
//       var customWidth = $(window).width() - mapOffset.left;
//       $('.csrIMG').find('img').width(customWidth);
//     }
//   }
// }