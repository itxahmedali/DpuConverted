// chk element visible on
function Utils() {}

Utils.prototype = {
  constructor: Utils,
  isElementInView: function (element, fullyInView) {
    var pageTop = $(window).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).height();

    if (fullyInView === true) {
      return pageTop < elementTop && pageBottom > elementBottom;
    } else {
      return elementTop <= pageBottom && elementBottom >= pageTop;
    }
  },
};
var Utils = new Utils();

// blob
const ball = document.querySelector(".cito.ball");
let mouseX = window.innerWidth / 2;
let mouseY = window.innerHeight / 2 + 40;
let ballX = 0;
let ballY = 0;
let speed = 0.08;
var mouseMove = true;
var citoWidth = 70;

function animate() {
  let distX = mouseX - ballX;
  let distY = mouseY - ballY;
  ballX = ballX + distX * speed;
  ballY = ballY + distY * speed;
  ball.style.left = ballX + "px";
  ball.style.top = ballY + "px";
  requestAnimationFrame(animate);
}
animate();

document.addEventListener("mousemove", function (event) {
  var coreServices = Utils.isElementInView($(".core-services"), false);
  var fourthSection = Utils.isElementInView($(".fourth-section"), false);
  var nomove1 = Utils.isElementInView($(".nomove1"), false);
  var nomove2 = Utils.isElementInView($(".nomove2"), false);
  var nomove3 = Utils.isElementInView($(".nomove3"), false);
  var nomove4 = Utils.isElementInView($(".nomove4"), false);
  var nomove5 = Utils.isElementInView($(".nomove5"), false);
  var nomove6 = Utils.isElementInView($(".nomove6"), false);

  if (mouseMove) {
    mouseX = event.pageX;
    mouseY = event.pageY;
  }
});

$.fn.isInViewport = function () {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};
// blob

$(document).ready(function () {

  // THE PART FROM THE scrollerProxy() PEN - https://codepen.io/GreenSock/pen/oNLqgBm
  gsap.registerPlugin(ScrollTrigger);
  // Setup
  const scroller = document.querySelector(".scrollbar-container");

  const bodyScrollBar = Scrollbar.init(scroller, {
    damping: 0.05,
    delegateTo: document,
    thumbMinSize: 15,
  });
  ScrollTrigger.scrollerProxy(".scrollbar-container", {
    scrollTop(value) {
      if (arguments.length) {
        bodyScrollBar.scrollTop = value;
      }
      return bodyScrollBar.scrollTop;
    },
  });
  bodyScrollBar.addListener(ScrollTrigger.update);
  ScrollTrigger.defaults({
    scroller: scroller,
  });
  gsap.utils.toArray(".parallax-background-section").forEach((section, i) => {
    section.bg = section.querySelector(".parallax-background-element");
    if (i) {
      section.bg.style.backgroundPosition = `50% ${innerHeight / 2}px`;
      gsap.to(section.bg, {
        backgroundPosition: `50% ${-innerHeight / 2}`,
        ease: "none",
        scrollTrigger: {
          trigger: section,
          scrub: true,
          onUpdate: function (self) {
            gsap.set(section.bg, {
              top: self.scroll() - section.bg.parentElement.offsetTop,
            });
          },
        },
      });
    } else {
      section.bg.style.backgroundPosition = "50% 0px";
      gsap.to(section.bg, {
        backgroundPosition: `50% ${-innerHeight / 2}px`,
        ease: "none",
        scrollTrigger: {
          trigger: section,
          start: "top top",
          scrub: true,
          onUpdate: function (self) {
            gsap.set(section.bg, {
              top: self.scroll() - section.bg.parentElement.offsetTop,
            });
          },
        },
      });
    }
  });

  bodyScrollBar.addListener(() => {
    let current = Date.now();
    let offset = bodyScrollBar.offset.y;

    var TestimonialH = Utils.isElementInView($(".nine-section"), false);
    var Testimonialp = Utils.isElementInView($("#feel-the-wave"), false);

    if (TestimonialH) {
      if (Testimonialp) {
        if (citoWidth > 0) {
          citoWidth -= 1.3;
        } else {
          citoWidth = 0;
        }
        $(".cito").css({ height: `${citoWidth}px`, width: `${citoWidth}px` });
      } else {
        if (citoWidth < 50) {
          citoWidth += 1.3;
        } else {
          citoWidth = 50;
        }
        $(".cito").css({ height: `${citoWidth}px`, width: `${citoWidth}px` });
      }
    } else {
      $(".cito").removeAttr("style");
      citoWidth = 50;
    }

    var coreServices = Utils.isElementInView($(".core-services"), false);
    var fourthSection = Utils.isElementInView(
      $(".swiper-slide-active .neon"),
      false
    );
    var backWhite = Utils.isElementInView($(".h-1.back-white"), false);
    var tag = Utils.isElementInView($(".tag"), false);
    var gooey = Utils.isElementInView($(".sendBtn"), false);
    var footer = Utils.isElementInView($(".footer"), false);
    var portofolio = Utils.isElementInView($(".portofolio"), false);

    var nomove1 = Utils.isElementInView($(".nomove1"), false);
    var nomove2 = Utils.isElementInView($(".nomove2"), false);
    var nomove3 = Utils.isElementInView($(".nomove3"), false);
    var nomove4 = Utils.isElementInView($(".nomove4"), false);
    var nomove5 = Utils.isElementInView($(".nomove5"), false);
    var nomove6 = Utils.isElementInView($(".nomove6"), false);

    if (coreServices && !fourthSection) {
      ball.classList.add("smaller");
      (mouseX = 70), (mouseY = window.innerHeight / 2);
    } else {
      ball.classList.remove("smaller");
    }
    if (footer) {
      $(".cito").css("display", "none");
    } else {
      $(".cito").css("display", "block");
    }
    if (fourthSection && !backWhite) {
      let p = positioner(".swiper-slide-active .neon");
      if (window.innerWidth == 414 || window.innerWidth < 414) {
        mouseX = p.x;
        mouseY = p.y;
      }
      mouseX = p.x + 200;
      mouseY = p.y + 200;
    }
    if (tag) {
      if (window.innerWidth == 414 || window.innerWidth < 414) {
        setTimeout(() => {
          $(".tag1").css("font-size", "60px");
        }, 2000);
        setTimeout(() => {
          $(".tag2").css("font-size", "60px");
        }, 3000);
        setTimeout(() => {
          $(".tag3").css("font-size", "60px");
        }, 4000);
      } else {
        setTimeout(() => {
          $(".tag1").css("font-size", "100px");
        }, 2000);
        setTimeout(() => {
          $(".tag2").css("font-size", "100px");
        }, 3000);
        setTimeout(() => {
          $(".tag3").css("font-size", "100px");
        }, 4000);
      }
    }
    if (
      backWhite ||
      nomove1 ||
      nomove2 ||
      nomove3 ||
      nomove4 ||
      nomove5 ||
      nomove6
    ) {
      ball.classList.add("smaller");
      (mouseX = window.innerWidth - 100), (mouseY = window.innerHeight / 1.8);
      mouseMove = false;
    }
    if (
      !coreServices &&
      !fourthSection &&
      !backWhite &&
      !nomove1 &&
      !nomove2 &&
      !nomove3 &&
      !nomove4 &&
      !nomove5 &&
      !nomove6
    ) {
      mouseMove = true;
    } else {
      mouseMove = false;
    }
  });
});

(function () {
  var word = [
    "Marketing",
    "Media",
    "Solutions",
    "Transformation",
    "Revolution",
    "Technologies",
    "Growth",
    "Services",
    "Journey",
    "Lifestyle",
    "Multimedia",
    "Network",
  ];
  var element = document.getElementsByClassName("Powerhouse")[0];
  var wordIndex = 1;

  var resetAnimation = function () {
    element.classList.remove("flip");
  };

  setInterval(function () {
    switch (wordIndex) {
      case 0:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 1;
        setTimeout(resetAnimation, 1000);
        break;

      case 1:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 2;
        setTimeout(resetAnimation, 1000);
        break;

      case 2:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 3;
        setTimeout(resetAnimation, 1000);
        break;

      case 3:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 4;
        setTimeout(resetAnimation, 1000);
        break;
      case 4:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 5;
        setTimeout(resetAnimation, 1000);
        break;
      case 5:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 6;
        setTimeout(resetAnimation, 1000);
        break;
      case 6:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 7;
        setTimeout(resetAnimation, 1000);
        break;
      case 7:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 8;
        setTimeout(resetAnimation, 1000);
        break;
      case 8:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 9;
        setTimeout(resetAnimation, 1000);
        break;
      case 9:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 10;
        setTimeout(resetAnimation, 1000);
        break;
      case 10:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 11;
        setTimeout(resetAnimation, 1000);
        break;
      case 11:
        element.classList.add("flip");
        element.textContent = word[wordIndex];
        wordIndex = 0;
        setTimeout(resetAnimation, 1000);
        break;
    }
  }, 2000);
})();

function positioner(el) {
  var y =
    window.scrollY + document.querySelector(el).getBoundingClientRect().top; // Y

  var x =
    window.scrollX + document.querySelector(el).getBoundingClientRect().left; // X

  return { y, x };
}
