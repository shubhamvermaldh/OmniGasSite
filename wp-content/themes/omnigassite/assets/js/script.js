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

jQuery(document).ready(function($){
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


function initScrollCounter(sectionSelector, counterSelector) {
    jQuery(document).ready(function($) {
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        var animated = false;

        function startCounters() {
            if (!animated && isScrolledIntoView(sectionSelector)) {
                animated = true;

                $(counterSelector).each(function() {
                    var $this = $(this);
                    var target = parseFloat($this.data('target')) || 0;
                    var text = $this.text();
                    var isPercent = text.includes('%');
                    var isPlus = text.includes('+');
                    var duration = 2000;

                    $({ countNum: 0 }).animate({ countNum: target }, {
                        duration: duration,
                        easing: 'swing',
                        step: function() {
                            let value = Math.floor(this.countNum).toLocaleString();
                            $this.text(value + (isPercent ? '%' : (isPlus ? '+' : '')));
                        },
                        complete: function() {
                            $this.text(target.toLocaleString() + (isPercent ? '%' : (isPlus ? '+' : '')));
                        }
                    });
                });
            }
        }

        $(window).on('scroll resize', startCounters);
        startCounters();
    });
}
