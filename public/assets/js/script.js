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
        slidesToScroll: 1,
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
        slidesToScroll: 1,
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
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
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
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        centerMode: false,
      }
    }
    ]
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
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
      }
    }
    ]
  });

  $('.aboutSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    infinite: false,
    arrows: false,
    autoplay: false,
  });
  
// $(document).ready(function () {
//   // Initialize the slick slider
//   $('.offerSlider').slick({
//     slidesToShow: 8,
//     slidesToScroll: 2,
//     dots: false,
//     infinite: true,
//     arrows: false,
//     autoplay: false,
//     responsive: [
//       {
//         breakpoint: 992,
//         settings: {
//           slidesToShow: 4,
//         }
//       },
//       {
//         breakpoint: 576,
//         settings: {
//           slidesToShow: 3,
//           centerMode: true,
//           centerPadding: '15px',
//         }
//       }
//     ]
//   });

  /*
  // Click event to activate clicked item and bring active item to the front
  $('.cat-item a').on('click', function (e) {
    e.preventDefault(); // Prevent default link behavior

    // Remove 'active' class from all items and add it to the clicked one
    $('.cat-item').removeClass('active'); // Remove active class from all
    $(this).closest('.cat-item').addClass('active'); // Add active class to clicked item

    // Find the active item
    var $activeItem = $('.cat-item.active');

    // Find the index of the active item
    var activeIndex = $activeItem.index();

    // Bring the active item to the front of the slider
    // $('.offerSlider').slick('slickGoTo', activeIndex);
    
    // Navigate to the clicked link (if needed)
    window.location.href = $(this).attr('href'); // Uncomment this if you want to navigate
  });
  */
});

  var elementsslick = document.getElementsByClassName("lightgallery-slick")
  for (let item of elementsslick) {
    lightGallery(item, {
      // selector: "a",
      selector: '.slick-slide:not(.slick-cloned) .light_atag',
      showZoomInOutIcons: true,
      actualSize: false,
      download: false,
      subHtmlSelectorRelative: true,
    })
  }

  var elements = document.getElementsByClassName("lightgallery-universal")
  for (let item of elements) {
    lightGallery(item, {
      selector: "a",
      showZoomInOutIcons: true,
      actualSize: false,
      download: false,
      subHtmlSelectorRelative: true,
    })
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

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash)
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]")
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault()
          if (window.innerWidth <= 991) {
            setTimeout(function () {
              $('.navbar-toggler[aria-expanded="true"]').click();
            }, 600);
          }
          $("html, body").animate(
            {
              scrollTop: target.offset().top - 137,
            },
            1000,
            function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target)
              $target.focus()
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false
              } else {
                $target.attr("tabindex", "-1") // Adding tabindex for elements not focusable
                $target.focus() // Set focus again
              }
            }
          )
        }
      }
    })

  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      $("header").addClass("fixed_top");
      $(".scrolltotop").removeClass("hide");
    } else {
      $("header").removeClass("fixed_top")
      $(".scrolltotop").addClass("hide")
    }
  });
  // theMap();

  // $(window).resize(function () {
  //   theMap();
  // });

  $('.fulldiscover_contentflow_img').on('click', function() {
    var videoUrl = $(this).data('videourl');
    if(videoUrl != null) {
      var videoHtml = "<video controls><source src='"+videoUrl+"' type='video/mp4'></video>"
      $('#videoModal .videoWrapper').html(videoHtml);
      var myModal = new bootstrap.Modal(
        document.getElementById("videoModal"), {}
      )
      myModal.show();
    }
  });

  $('#videoModal').on('hidden.bs.modal', function () {
    $('#videoModal .videoWrapper').html("");
  });

//});

// function theMap() {
//   if ($('.csrIMG').length) {
//     if ($(window).width() > 992) {
//       var mapOffset = $('.csrIMG').offset();
//       var customWidth = $(window).width() - mapOffset.left;
//       $('.csrIMG').find('img').width(customWidth);
//     }
//   }
// }