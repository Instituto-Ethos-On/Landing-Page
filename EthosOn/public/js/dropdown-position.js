if ('IntersectionObserver' in window) {
    document.addEventListener("DOMContentLoaded", function() {
      function handleIntersection(entries) {
        entries.map((entry) => {
          if (entry.isIntersecting) {
            // Item has crossed our observation
            // threshold - load src from data-src
            entry.target.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('"+entry.target.dataset.bgimage+"')";
            // Job done for this item - no need to watch it!
            observer.unobserve(entry.target);
          }
        });
      }
  
      const headers = document.querySelectorAll('.header-container');
      const observer = new IntersectionObserver(
        handleIntersection,
        { rootMargin: "100px" }
      );
      headers.forEach(header => observer.observe(header));
    });
  } else {
    // No interaction support? Load all background images automatically
    const headers = document.querySelectorAll('.header-container');
    headers.forEach(header => {
      header.style.backgroundImage = "url('"+header.dataset.bgimage+"')";
    });
  }