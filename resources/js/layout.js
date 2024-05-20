document.addEventListener("DOMContentLoaded", function() {
    // Add smooth scrolling to all links
    var links = document.querySelectorAll('a[href^="#"]');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Find the target element
                var targetElement = document.querySelector(hash);

                // Calculate the distance to scroll
                var targetOffset = targetElement.offsetTop;

                // Smooth scroll animation
                smoothScrollTo(targetOffset, 800);
            }
        });
    });

    // Function for smooth scrolling animation
    function smoothScrollTo(target, duration) {
        var start = window.pageYOffset;
        var startTime = null;

        function scroll(currentTime) {
            if (startTime === null) {
                startTime = currentTime;
            }

            var timeElapsed = currentTime - startTime;
            var progress = Math.min(timeElapsed / duration, 1);

            window.scrollTo(0, easeInOutQuad(start, target, progress));

            if (timeElapsed < duration) {
                requestAnimationFrame(scroll);
            }
        }

        function easeInOutQuad(start, target, progress) {
            progress /= 0.5;
            if (progress < 1) return 0.5 * progress * progress * (target - start) + start;
            progress--;
            return -0.5 * (progress * (progress - 2) - 1) * (target - start) + start;
        }

        requestAnimationFrame(scroll);
    }
});