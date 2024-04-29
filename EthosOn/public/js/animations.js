class UI {
    scrollLeft() {
        const scroll_left = document.querySelectorAll(".trigger_scroll_left");
        window.addEventListener("scroll", function () {
            scroll_left.forEach(function (element) {
                var position = element.getBoundingClientRect().top;

                // Adjust the triggerPosition based on the position of the element
                var triggerPosition = window.innerHeight - position - 300;

                if (triggerPosition > 0) {
                    element.classList.add("ativo");
                    element.classList.remove("scroll-left");
                } else {
                    element.classList.remove("ativo");
                    element.classList.add("scroll-left");
                }
            });
        });
    }

    scrollRight() {
        const scroll_right = document.querySelectorAll(".trigger_scroll_right");
        window.addEventListener("scroll", function () {
            scroll_right.forEach(function (element) {
                var position = element.getBoundingClientRect().top;

                // Adjust the triggerPosition based on the position of the element
                var triggerPosition = window.innerHeight - position - 300;

                if (triggerPosition > 0) {
                    element.classList.add("ativo");
                    element.classList.remove("scroll-right");
                } else {
                    element.classList.remove("ativo");
                    element.classList.add("scroll-right");
                }
            });
        });
    }
}

class BurgerMenu {
    menu() {
        // open 
        const burger = document.querySelectorAll(".navbar-burger");
        const menu = document.querySelectorAll(".navbar-menu");

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener("click", function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle("hidden");
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll(".navbar-close");
        const backdrop = document.querySelectorAll(".navbar-backdrop");

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener("click", function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle("hidden");
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener("click", function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle("hidden");
                    }
                });
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const mobile = new BurgerMenu();
    const ui = new UI();
    mobile.menu();
    ui.scrollLeft();
    ui.scrollRight();
});
