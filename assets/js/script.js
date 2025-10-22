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