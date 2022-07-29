window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbarHeader").classList.add('color');

  } else {
    document.getElementById("navbarHeader").classList.remove('color');

  }
}

// =================== MOBILE SCREEN SIDE NAV =============== //
var sidebarBox = document.querySelector('#box');
var sidebarBtn = document.querySelector('#btn');
var pageWrapper = document.querySelector('#main-content');

sidebarBtn.addEventListener('click', function (event) {

  if (this.classList.contains('active')) {
    this.classList.remove('active');
    sidebarBox.classList.remove('active');
  } else {
    this.classList.add('active');
    sidebarBox.classList.add('active');
  }
});

pageWrapper.addEventListener('click', function (event) {

  if (sidebarBox.classList.contains('active')) {
    sidebarBtn.classList.remove('active');
    sidebarBox.classList.remove('active');
  }
});

window.addEventListener('keydown', function (event) {

  if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
    sidebarBtn.classList.remove('active');
    sidebarBox.classList.remove('active');
  }
});
// =============== SIDE NAV ENDS HERE ===================== //


// <!--======== Initialize Swiper ===============-->
var swiper = new Swiper(".s1", {
  slidesPerView: 3,
  spaceBetween: 10,
  loop: true,
  autoplay: false,
  autoplaySpeed: 1000,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    414: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    360: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 8
    }
  },
});
// ======== Process Flow Slider ============ //


function openCity(evt, cityName) {
  $("#firstActive").removeClass("activeTab")
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}

var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
var visibleDivId = null;

function toggleVisibility(divId) {
  if (visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}

function hideNonVisibleDivs() {
  var i, divId, div;
  for (i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if (visibleDivId === divId) {
      div.style.display = "block";
      $(div.parentNode).find('.tablinks').addClass('active')
    } else {
      div.style.display = "none";
      $(div.parentNode).find('.tablinks').removeClass('active')
    }
  }
}

var selector = '.tab button';

$(selector).on('click', function () {
  $(selector).removeClass('active');
  $(this).addClass('active');
});

var figure = $(".video-box").hover(hoverVideo, hideVideo);

function hoverVideo(e) {
  $('video', this).get(0).play();
}

function hideVideo(e) {
  $('video', this).get(0).pause();
}

// ================= PORTFOLIO DATA FILTERS ==============//
// ================ FILTER GALLERY ======================//
$(document).ready(function () {

  $(".filter-button").click(function () {
    var value = $(this).attr('data-filter');

    if (value == "all") {
      //$('.filter').removeClass('hidden');
      $('.filter').show('1000');
    }
    else {
      $(".filter").not('.' + value).hide('3000');
      $('.filter').filter('.' + value).show('3000');

    }
  });

  if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
  }
  $(this).addClass("active");

});
// ============ CHANGE IMAGE ON HOVER (CORE SERVICES SECTION)=================== //
$(".service1 .h-3").hover(function () {
  $("#pic").removeClass().addClass($(this).attr('rel'));
});
// ============ CHANGE Main Heading ON HOVER (CORE SERVICES SECTION)=================== //

function hover(description) {
  // console.log(description);
  document.getElementById('main-head').innerHTML = description;
}

// ==================== WOW JS ============================= //
// new WOW().init();

// ==================== ANIMATE SALES/REVENUE TEXT ============== //
$('.sales').on("scroll", function () {
  var pageTop = $(document).scrollTop();
  var pageBottom = pageTop + $(window).height();
  var tags = $(".tag");

  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];

    if ($(tag).position().top < pageBottom) {
      $(tag).addClass("visible");
    } else {
      $(tag).removeClass("visible");
    }
  }
});

$(window).scroll(function () {
  $(".tag").each(function () {
    var top_of_element = $(this).offset().top;
    var bottom_of_element = $(this).offset().top + $(this).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    var top_of_screen = $(window).scrollTop();

    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
      alert("hello")
    }
  });
});
// ========== SWIPER 2 ============== //
var swiper = new Swiper(".s2", {
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 18,
  // mousewheel: true,
  autoplay: false,
  loop:true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
});
// ========== SWIPER 3 ============== //
var swiper = new Swiper(".s3", {
  direction: "horizontal",
  slidesPerView: 2,
  spaceBetween: 10,
  // mousewheel: true,
  autoplay: false,
  loop:true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    414: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    375: {
      slidesPerView: 1,
      spaceBetween: 10
    },
  },
});
$(".cstmCard").hover(function(){
  $(this).toggleClass("cstCardProp")
});
$(document).ready(function () {
    $(".Create1").show();
    $(".Create2").hide();
    $(".Create3").hide();
    $(".Create4").hide();
    $("#firstActive").addClass("activeTab")
});
$("#activeHover").hover(function () {
    $("#firstActive").removeClass("activeTab")
})
$(document).ready(function () {
    $("body").on("click", ".btns", function () {
        $(".Create1").show();
    });
    $("body").on("click", ".btns2", function () {
        $(".Create2").show();
    });
    $("body").on("click", ".btns3", function () {
        $(".Create3").show();
    });
    $("body").on("click", ".btns4", function () {
        $(".Create4").show();
    });
});

$(function () {
    $(".video").click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC + "";
        $(theModal + ' source').attr('src', videoSRCauto);
        $(theModal + ' video').load();
        $(theModal + ' button.close').click(function () {
            $(theModal + ' source').attr('src', videoSRC);
        });
    });
});

document.addEventListener("DOMContentLoaded", function(){
  // if (window.innerWidth < 992) {
  //   document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
  //     everydropdown.addEventListener('hidden.bs.dropdown', function () {
  //         this.querySelectorAll('.submenu').forEach(function(everysubmenu){
  //           everysubmenu.style.display = 'none';
  //         });
  //     })
  //   });
  
    // document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    //   element.addEventListener('click', function (e) {
    //       let nextEl = this.nextElementSibling;
    //       if(nextEl && nextEl.classList.contains('submenu')) {	
    //         e.preventDefault();
    //         if(nextEl.style.display == 'block'){
    //           nextEl.style.display = 'none';
    //         } else {
    //           nextEl.style.display = 'block';
    //         }
  
    //       }
    //   });
    // })
  // }
  // end if innerWidth

  }); 
  // =========== SIDE NAV MULTILEVEL DROPDOWNS =============//
  $(".appDevBtn").on('click', ()=>{
    if($('.appDevBtn').hasClass('show')){
      $('.appDevBtn').removeClass('show')
      $(".addDevMenu").removeClass('show')
    }
    else{
      $('.appDevBtn').addClass('show')
      $(".addDevMenu").addClass('show')
    }
  });
  $(".appDevBtn2").on('click', ()=>{
      if($('.appDevBtn2').hasClass('show')){
        $('.appDevBtn2').removeClass('show')
        $(".addDevMenu2").removeClass('show')
      }
      else{
        $('.appDevBtn2').addClass('show')
        $(".addDevMenu2").addClass('show')
      }
    });

// =========== SIDE NAV MULTILEVEL DROPDOWNS =============//
  $(".dropbtn1").on('click',(e)=>{
    $(e.target.parentNode).find('.dropdown-content1').toggleClass('show')
  })
  $(".dropbtn2").on('click',(e)=>{
    $(e.target.parentNode).find('.dropdown-content2').toggleClass('show')
  })
  $(".dropbtn3").on('click',(e)=>{
    $(e.target.parentNode).find('.dropdown-content3').toggleClass('show')
  })
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content"); 
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  $('#box').on('mousewheel DOMMouseScroll', function(e) {
    var scrollTo = null;
  
    if(e.type === 'mousewheel') {
       scrollTo = (e.originalEvent.wheelDelta * -1);
    }
    else if(e.type === 'DOMMouseScroll') {
       scrollTo = 40 * e.originalEvent.detail;
    }
  
    if(scrollTo) {
       e.preventDefault();
       $(this).scrollTop(scrollTo + $(this).scrollTop());
    }
  });
  $('#items').on('mousewheel DOMMouseScroll', function(e) {
    var scrollTo = null;
  
    if(e.type === 'mousewheel') {
       scrollTo = (e.originalEvent.wheelDelta * -1);
    }
    else if(e.type === 'DOMMouseScroll') {
       scrollTo = 40 * e.originalEvent.detail;
    }
  
    if(scrollTo) {
       e.preventDefault();
       $(this).scrollTop(scrollTo + $(this).scrollTop());
    }
  });

