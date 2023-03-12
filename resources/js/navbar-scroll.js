window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    var logBtn = document.querySelector('.log-btn');
    
    if (window.scrollY > 50) {
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-white');
      logBtn.classList.add('btn-outline-dark');
      navbar.classList.remove('navbar-cs');
      navbar.classList.add('navbar-light');
      navbar.classList.remove('navbar-dark');
      navbar.style.transition = "all 0.5s";
      navLinks.forEach(function(link) {
        link.classList.add('text-black');
      });
    } else {
        navbar.classList.add('navbar-cs');
        logBtn.classList.remove('btn-outline-dark');
    navbar.classList.add('navbar-dark');
      navbar.classList.remove('bg-white');
      navLinks.forEach(function(link) {
        link.classList.remove('text-black');
      });
    }
  });

