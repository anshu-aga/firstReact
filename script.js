

document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.transition-element');

    var options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.2 // Adjust as needed
    };

    var observer = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateX(0)';
          observer.unobserve(entry.target);
        }
      });
    }, options);

    elements.forEach(function (element) {
      observer.observe(element);
    });
  });

