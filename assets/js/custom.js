// header fixed on scroll script

$(document.body).trigger('wc_fragments_refreshed');




$(window).scroll(function(){
  if ($(this).scrollTop() > 50) {
     $('.fixed_hedaer').addClass('fixed');
  } else {
     $('.fixed_hedaer').removeClass('fixed');
  }
});

// header fixed on scroll script end

// banner slider script

var swiper = new Swiper(".banner_slider", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

// banner slider script end


// category slider script
var swiper = new Swiper(".category_tab_slider", {
  slidesPerView: 4.4,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.3,
      },
      481: {
        slidesPerView: 1.8,
      },
      575: {
        slidesPerView: 2.2,
      },
      767: {
        slidesPerView: 3.1,
      },
      991: {
        slidesPerView: 2.3,
      },
      1200: {
        slidesPerView: 2.5,
      },
      1400: {
        slidesPerView: 4.4,
      },
    },
});

// category slider script end


// Feature category slider script

var swiper = new Swiper(".feature_collection_slider", {
  slidesPerView: 4.4,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      481: {
        slidesPerView: 1.5,
      },
      575: {
        slidesPerView: 2.2,
      },
      767: {
        slidesPerView: 2.8,
      },
      1024: {
        slidesPerView: 4.4,
      },
    },
});

// Feature category slider script end


// Trending accessories slider script

var swiper = new Swiper(".trending_accessories_slider", {
  slidesPerView: 4.4,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      481: {
        slidesPerView: 1.5,
      },
      575: {
        slidesPerView: 2.2,
      },
      767: {
        slidesPerView: 2.8,
      },
      1024: {
        slidesPerView: 4.4,
      },
    },
});

// Trending accessories slider script end

// instagram slider script

var swiper = new Swiper(".instagram_slider", {
  slidesPerView: 5,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      481: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 3,
      },
      767: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
    },
});

// instagram slider script end


// jewellery_slider slider script

var swiper = new Swiper(".jewellery_slider", {
  slidesPerView: 2,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      481: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
    },
});

// jewellery_slider slider script end



// collection slider script

var swiper = new Swiper(".collection_slider", {
  slidesPerView: 4,
  grid: {
    rows: 2,
  },
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 10,
      grid: {
        rows: 1,
      },
    },
    481: {
      slidesPerView: 1.5,
      spaceBetween: 10,
      grid: {
        rows: 1,
      },
    },
    575: {
      slidesPerView: 2.2,
      spaceBetween: 10,
      grid: {
        rows: 1,
      },
    },
    767: {
      slidesPerView: 2.8,
      grid: {
        rows: 1,
      },
      spaceBetween: 15,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

// collection slider script end



// testimonial slider script
var swiper = new Swiper(".testimonial_slider", {
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});

// testimonial slider script end



// team slider script

var swiper = new Swiper(".team_slider", {
  slidesPerView: 4,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.3,
      },
      481: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 2.5,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
});


// team slider script end


// product detail slider script

var swiper = new Swiper(".product_detail_thumb_slider", {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    0: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    575: {
      slidesPerView: 4,
    },
    767: {
      slidesPerView: 4,
    },
    991: {
      slidesPerView: 3,
    },
    1280: {
      slidesPerView: 4,
    },
  },
});
var swiper2 = new Swiper(".product_detail_slider", {
  loop: true,
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

// product detail slider script end



// related blog slider script

var swiper = new Swiper(".related_blog_slider", {
  slidesPerView: 3,
  spaceBetween: 12,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      650: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
});

// related blog slider script end


// category collection slider slider script

var swiper = new Swiper(".category_collection_slider", {
  slidesPerView: 2.5,
  spaceBetween: 50,
  centeredSlides: true,
  loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 1.5,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 1.5,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 2.5,
      },
    },
});

// category collection slider slider script end


// banner two slider script

var swiper = new Swiper(".banner_two_slider", {
  slidesPerView: 3,
  spaceBetween: 14,
  centeredSlides: true,
  loop:true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        pagination: {
          el: ".swiper-pagination",
        },
      },
      767: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    },
});

// banner two slider script end


// collection slider script

var swiper = new Swiper(".sale_offer_slider", {
  slidesPerView: 1,
  spaceBetween: 0,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// collection slider script end


// header search bar script
$('.search-toggle').addClass('closed');

$('.search-toggle .search-icon').click(function(e) {
  if ($('.search-toggle').hasClass('closed')) {
    $('.search-toggle').removeClass('closed').addClass('opened');
    $('.search-toggle, .search-container').addClass('opened');
    $('#search-terms').focus();
  } else {
    $('.search-toggle').removeClass('opened').addClass('closed');
    $('.search-toggle, .search-container').removeClass('opened');
  }
});

// header search bar script end


// price range drag slider script

(function ($) {
  
  $('#price-range-submit').hide();

    $("#min_price,#max_price").on('change', function () {

      $('#price-range-submit').show();

      var min_price_range = parseInt($("#min_price").val());

      var max_price_range = parseInt($("#max_price").val());

      if (min_price_range > max_price_range) {
        $('#max_price').val(min_price_range);
      }

      $("#slider-range").slider({
        values: [min_price_range, max_price_range]
      });
      
    });


    $("#min_price,#max_price").on("paste keyup", function () {                                        

      $('#price-range-submit').show();

      var min_price_range = parseInt($("#min_price").val());

      var max_price_range = parseInt($("#max_price").val());
      
      if(min_price_range == max_price_range){

            max_price_range = min_price_range + 100;
            
            $("#min_price").val(min_price_range);       
            $("#max_price").val(max_price_range);
      }

      $("#slider-range").slider({
        values: [min_price_range, max_price_range]
      });

    });


    $(function () {
      $("#slider-range").slider({
        range: true,
        orientation: "horizontal",
        min: 0,
        max: 200,
        values: [0, 200],
        step: 10,

        slide: function (event, ui) {
          if (ui.values[0] == ui.values[1]) {
              return false;
          }
          
          $("#min_price").val(ui.values[0]);
          $("#max_price").val(ui.values[1]);
        }
      });

      $("#min_price").val($("#slider-range").slider("values", 0));
      $("#max_price").val($("#slider-range").slider("values", 1));

    });

    $("#slider-range,#price-range-submit").click(function () {

      var min_price = $('#min_price').val();
      var max_price = $('#max_price').val();

      $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
    });

  

})(jQuery);

// price range drag slider script end



// product detail page image zoom script

$.fn.magnifierRentgen = function() {

  return this.each(function() {

    var th        = $(this),
    dataImage     = th.data("image"),
    dataImageZoom = th.data("image-zoom"),
    dataSize      = th.data("size");

    th
    .addClass("magnifierRentgen")
    .resize(function() {
      th.find(".data-image, .magnifier-loupe img").css({
        "width" : th.width()
      })
    })
    .append("<img class='data-image' src='" + dataImage + "'><div class='magnifier-loupe'><img src='" + dataImageZoom + "'>")
      .hover(function() {
        th.find(".magnifier-loupe").stop().fadeIn()
      }, function() {
        th.find(".magnifier-loupe").stop().fadeOut()
      })
      .find(".data-image").css({
        "width" : th.width()
      }).parent().find(".magnifier-loupe").css({
          "width"  : dataSize,
          "height" : dataSize
        })
        .find("img").css({
          "position" : "absolute",
          "width"    : th.width()
        });

    th.mousemove(function(e) {

      var elemPos = {},
        offset  = th.offset();

      elemPos = {
        left : e.pageX - offset.left - dataSize/2,
        top  : e.pageY - offset.top - dataSize/2
      }

      th
      .find(".magnifier-loupe").css({
          "top"  : elemPos["top"],
          "left" : elemPos["left"]
        })
        .find("img").css({
          "top"   : -elemPos["top"],
          "left"  : -elemPos["left"],
          "width" : th.width()
        })

    });

    $(window).resize(function() {
      $(".magnifierRentgen").resize();
    });

  });

};

$(".zoom_wrap").magnifierRentgen();

// product detail page image zoom script end


// product plus minus script

$(document).ready(function() {
  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
});

// product plus minus script end



// category dropdown 

$(".down_arrow").click(function(){
  $(this).toggleClass("active");
  $(this).parent().next(".custom_checkbox").toggleClass("show");
});

// category dropdown end


// country state city select script

$(document).ready(function() {
  //-------------------------------SELECT CASCADING-------------------------//
  var selectedCountry = (selectedRegion = selectedCity = "");
  // This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
  var BATTUTA_KEY = "00000000000000000000000000000000";
  // Populate country select box from battuta API
  url =
    "https://battuta.medunes.net/api/country/all/?key=" +
    BATTUTA_KEY +
    "&callback=?";

  // EXTRACT JSON DATA.
  $.getJSON(url, function(data) {
    console.log(data);
    $.each(data, function(index, value) {
      // APPEND OR INSERT DATA TO SELECT ELEMENT.
      $("#country").append(
        '<option value="' + value.code + '">' + value.name + "</option>"
      );
    });
  });
  // Country selected --> update region list .
  $("#country").change(function() {
    selectedCountry = this.options[this.selectedIndex].text;
    countryCode = $("#country").val();
    // Populate country select box from battuta API
    url =
      "https://battuta.medunes.net/api/region/" +
      countryCode +
      "/all/?key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      $("#region option").remove();
      $('#region').append('<option value="">Please select your region</option>');
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#region").append(
          '<option value="' + value.region + '">' + value.region + "</option>"
        );
      });
    });
  });
  // Region selected --> updated city list
  $("#region").on("change", function() {
    selectedRegion = this.options[this.selectedIndex].text;
    // Populate country select box from battuta API
    countryCode = $("#country").val();
    region = $("#region").val();
    url =
      "https://battuta.medunes.net/api/city/" +
      countryCode +
      "/search/?region=" +
      region +
      "&key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      console.log(data);
      $("#city option").remove();
      $('#city').append('<option value="">Please select your city</option>');
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#city").append(
          '<option value="' + value.city + '">' + value.city + "</option>"
        );
      });
    });
  });
  // city selected --> update location string
  $("#city").on("change", function() {
    selectedCity = this.options[this.selectedIndex].text;
    $("#location").html(
      "Locatation: Country: " +
        selectedCountry +
        ", Region: " +
        selectedRegion +
        ", City: " +
        selectedCity
    );
  });
});


// country state city select script end



// product lightbox script

const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}

lightBoxContainer.addEventListener("click", closeLightBox);

// product lightbox script end