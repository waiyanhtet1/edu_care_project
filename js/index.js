const main_tl = gsap.timeline();
  main_tl.to('.animation',{
    position: 'absolute',
    height: '50px',
    width: '60px',
    scale: .5,
    duration: 1,
    delaly: 3,
  });
  main_tl.to('.wrapper',{
    opacity:1,
    // duration:1,
    // stagger:.25
  });

var swiper1 = new Swiper('.swiper-1', {
    // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: "fade",
        spaceBetween: 3,

        pagination: {
          el: '.swiper-pagination-1',
          clickable: true,
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

  var swiper2 = new Swiper(".swiper-2", {
    spaceBetween: 20,
    mousewheel: true,
    pagination: {
          el: '.swiper-pagination-2',
          clickable: true,
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 3,
            spaceBetween: 40
          },
          900: {
            slidesPerView: 5,
            spaceBetween: 40
          }
        }
  });

  var swiper3 = new Swiper(".swiper-3", {
    effect: "cards",
    grabCursor: true,
  });

  // contact page swiper
  var swiper = new Swiper(".swiper-4", {
    effect: "flip",
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
   });
  
  // countdown
  const daysEl = document.querySelector("#days");
  const hoursEl = document.querySelector("#hours");
  const minusEl = document.querySelector("#mins");
  const secondsEl = document.querySelector("#seconds");
  const newYear = "6 June 2022";

  function countdown() {
    const newYearDate = new Date(newYear);
    const currentDate = new Date();
    
    const totalSeconds = (newYearDate - currentDate) / 1000;
    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds / 3600) % 24;
    const minutes = Math.floor(totalSeconds / 60) % 60;
    const seconds = Math.floor(totalSeconds) % 60;

    daysEl.innerHTML = days;
    hoursEl.innerHTML = formatTime(hours);
    minusEl.innerHTML = formatTime(minutes);
    secondsEl.innerHTML = formatTime(seconds);
}

function formatTime(time) {
    return time < 10 ?(`0${time}`) : time;
}
countdown();
setInterval(countdown ,1000);
  
// ekko lightbox
$(function () {
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox({
    alwaysShowClose: true
  });
});

$('.filter-container').filterizr({gutterPixels: 3});
$('.btn[data-filter]').on('click', function() {
  $('.btn[data-filter]').removeClass('active');
  $(this).addClass('active');
});
});


// button effect
const see_how_button = document.querySelector("#see_how_button");

see_how_button.addEventListener("click", () => {
    window.scrollTo({
        top: 3900,
        behavior: 'smooth'
    });
});


// gsap 
gsap.registerPlugin(ScrollTrigger);

var seeHow_timeline = gsap.timeline({
  defaults: {
    opacity: 0,
    ease: 'back',
    duration: 0.5
  },
  scrollTrigger: {
    trigger: '.how-we-work',
    markers: false,
    start: 'top 75%',
    toggleActions: 'play none none reset' 
  }
});

seeHow_timeline.from('.how-we-work .content-img img', {y:30})
                .from('.how-we-work .content', {x:-30},0);

      
  var join_activity_timeline = gsap.timeline({
    defaults: {
      opacity: 0,
      ease: 'back',
      duration: 0.5
    },
    scrollTrigger: {
      trigger: '.join-activity',
      markers: false,
      start: 'top 70%',
      toggleActions: 'play none none reset' 
    }
  });
  
  join_activity_timeline.from('.join-activity .text', {x:-30, scale:0.5 ,duration:1})
                        .from('.join-activity .text a', {x:30})
                        .from('.join-activity .countdown-container', {y:30},0);
  

var about_timeline = gsap.timeline({
  defaults: {
    opacity: 0,
    ease: 'back',
    duration: 0.5
  },
  scrollTrigger : {
    trigger: '.about',
    markers: false,
    start: 'top 70%',
    toggleActions: 'play none none reset' 
  }
});

about_timeline.from('.about .about-img', {x:-30})
              .from('.about .about-content .about-heading', {y:-50})
              .from('.about .about-content p', {x:30})
              .from('.about .about-content a', {});


var about_1_timeline = gsap.timeline({
  defaults: {
    opacity: 0,
    ease: 'back',
    duration: 0.5
  },
  scrollTrigger : {
    trigger: '.about-1',
    markers: false,
    start: 'top 70%',
    toggleActions: 'play none none reset' 
  }
});

about_1_timeline.from('.about-1 .about-img-1', {x:-30})
              .from('.about-1 .about-content-1 .about-heading', {x:-50})
              .from('.about-1 .about-content-1 p', {x:30})
              .from('.about-1 .about-content-1 a', {});




//form validation
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})() 