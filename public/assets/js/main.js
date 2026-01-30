;(function ($) {

    $(document).ready(function () {

        /* ========== SIDEBAR / MOBILE MENU ========== */
        const hamburger = $(".hamburger_menu");
        const slideBar = $(".slide-bar");
        const bodyOverlay = $(".body-overlay");
        const closeMenu = $(".close-mobile-menu > a");

        if (hamburger.length && slideBar.length) {
            hamburger.on("click", function (e) {
                e.preventDefault();
                slideBar.toggleClass("show");
                $("body").toggleClass("on-side");
                bodyOverlay.addClass("active");
                $(this).addClass("active");
            });
        }

        if (closeMenu.length) {
            closeMenu.on("click", function (e) {
                e.preventDefault();
                slideBar.removeClass("show");
                $("body").removeClass("on-side");
                bodyOverlay.removeClass("active");
                hamburger.removeClass("active");
            });
        }

        /* ========== PAGE PROGRESS ========== */
        const progressPath = document.querySelector(".progress-wrap path");

        if (progressPath) {
            const pathLength = progressPath.getTotalLength();

            progressPath.style.transition = "none";
            progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = "stroke-dashoffset 10ms linear";

            const updateProgress = () => {
                const scroll = $(window).scrollTop();
                const height = $(document).height() - $(window).height();
                const progress = pathLength - (scroll * pathLength) / height;
                progressPath.style.strokeDashoffset = progress;
            };

            updateProgress();
            $(window).on("scroll", updateProgress);

            $(window).on("scroll", function () {
                if ($(this).scrollTop() > 50) {
                    $(".progress-wrap").addClass("active-progress");
                } else {
                    $(".progress-wrap").removeClass("active-progress");
                }
            });

            $(".progress-wrap").on("click", function (e) {
                e.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, 550);
            });
        }

        /* ========== VIDEO POPUP ========== */
        if ($(".popup-youtube").length) {
            $(".popup-youtube").magnificPopup({
                type: "iframe",
            });
        }

        /* ========== AOS ========== */
        if (typeof AOS !== "undefined") {
            AOS.init({ disable: "mobile" });
        }

        /* ========== NICE SELECT ========== */
        if ($.fn.niceSelect) {
            $("select").niceSelect();
        }
    });

    /* ========== COUNTER UP ========== */
    $(window).on("load", function () {
        if ($(".counter").length && $.fn.countUp) {
            $(".counter").countUp();
        }

        /* ========== PRELOADER ========== */
        const preloader = $("#preloader");
        if (preloader.length) {
            setTimeout(() => preloader.fadeOut(), 200);
        }
    });

    /* ========== POPUP MODAL ========== */
    if ($(".click-here").length) {
        $(".click-here").on("click", function () {
            $(".custom-model-main").addClass("model-open");
        });
    }

    $(".close-btn, .bg-overlay").on("click", function () {
        $(".custom-model-main").removeClass("model-open");
    });

})(jQuery);


/* ========== GSAP REVEAL ========== */
if (typeof gsap !== "undefined" && document.querySelector(".reveal")) {
    gsap.registerPlugin(ScrollTrigger);

    document.querySelectorAll(".reveal").forEach(container => {
        const image = container.querySelector("img");

        if (!image) return;

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: container,
                toggleActions: "play none none none"
            }
        });

        tl.set(container, { autoAlpha: 1 })
          .from(container, { xPercent: -100, duration: 1.5, ease: "power2.out" })
          .from(image, { xPercent: 100, scale: 1.3, duration: 1.5, ease: "power2.out" }, "-=1.5");
    });
}


/* ========== THEME TOGGLE (SAFE) ========== */
const toggleButton = document.getElementById("theme-toggle");

if (toggleButton) {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("light-mode");
        toggleButton.checked = true;
    }

    toggleButton.addEventListener("change", () => {
        document.body.classList.toggle("light-mode");

        localStorage.setItem(
            "theme",
            document.body.classList.contains("light-mode") ? "light" : "dark"
        );
    });
}


/* ========== CUSTOM CURSOR (SAFE) ========== */
const cursor = document.querySelector(".procus-cursor");
const cursorInner = document.querySelector(".procus-cursor2");
const links = document.querySelectorAll("a");

if (cursor && cursorInner) {
    document.addEventListener("mousemove", e => {
        cursor.style.transform = `translate3d(${e.clientX - 50}px, ${e.clientY - 50}px, 0)`;
        cursorInner.style.left = `${e.clientX}px`;
        cursorInner.style.top = `${e.clientY}px`;
    });

    document.addEventListener("mousedown", () => {
        cursor.classList.add("click");
        cursorInner.classList.add("cursorinnerhover");
    });

    document.addEventListener("mouseup", () => {
        cursor.classList.remove("click");
        cursorInner.classList.remove("cursorinnerhover");
    });

    links.forEach(link => {
        link.addEventListener("mouseenter", () => cursor.classList.add("hover"));
        link.addEventListener("mouseleave", () => cursor.classList.remove("hover"));
    });
}
