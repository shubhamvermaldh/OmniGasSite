document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const nav = document.querySelector('.main-nav');
  
  mobileToggle.addEventListener('click', function() {
    nav.classList.toggle('active');
    document.body.classList.toggle('menu-open');
  });

  // Close menu when clicking outside (optional)
  document.addEventListener('click', function(e) {
    if (!nav.contains(e.target) && !mobileToggle.contains(e.target)) {
      nav.classList.remove('active');
      document.body.classList.remove('menu-open');
    }
  });
});

$(document).ready(function(){
  $(".testimonial-slider").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 800,
    dots: true,
    nav: false,
    responsive:{
      0:{ items:1 },
      768:{ items:2 },
      1024:{ items:3 }
    }
  });
});
