$(window).on("load", function () {
    $("#loading_widget").hide();
}),
    $(document).ready(function () {
        $("#testimonial").owlCarousel({
            center: !0,
            items: 2,
            loop: !0,
            margin: 10,
            autoplay: !0,
            autoplayTimeout: 2e3,
            autoplayHoverPause: !0,
            navText: ['<i class="fa-solid fa-arrow-left-long"></i>', '<i class="fa-solid fa-arrow-right-long"></i>'],
            responsive: { 0: { items: 1 }, 700: { items: 2 }, 1200: { items: 3 } },
        }),
            $("#certificate").owlCarousel({
                center: !0,
                items: 2,
                loop: !0,
                margin: 10,
                autoplay: !0,
                autoplayTimeout: 1e3,
                autoplayHoverPause: !0,
                responsive: { 0: { items: 2 }, 425: { items: 3 }, 500: { items: 4 }, 600: { items: 5 }, 1200: { items: 7 }, 1500: { items: 9 } },
            }),
            $("#archive_content").owlCarousel({
                center: !0,
                items: 2,
                loop: 0,
                margin: 10,               
                navText: [
  '<span class="visually-hidden">Previous slide</span><i class="fa-solid fa-arrow-left-long" aria-hidden="true"></i>',
  '<span class="visually-hidden">Next slide</span><i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>'
],
                autoplay: !0,
                autoplayTimeout: 3e3,
                autoplayHoverPause: !0,
                responsive: { 0: { items: 1 } },
            }),
            $("#smm_customer_review").owlCarousel({
                center: !1,
                items: 2,
                loop: 0,
                margin: 10,
                navText: ['<i class="fa-solid fa-arrow-left-long"></i>', '<i class="fa-solid fa-arrow-right-long"></i>'],
                dots: !1,
                nav: !1,
                autoplay: !0,
                autoplayTimeout: 3e3,
                autoplayHoverPause: !0,
                responsive: { 0: { items: 1 }, 992: { items: 2 } },
            }),
            $("#smm_partners_logo").owlCarousel({
                center: !1,
                items: 2,
                loop: !0,
                margin: 10,
                dots: !1,
                nav: !1,
                autoplay: !0,
                autoplayTimeout: 2e3,
                autoplayHoverPause: !0,
                responsive: { 0: { items: 2 }, 350: { items: 3 }, 600: { items: 4 }, 1200: { items: 6 } },
            });
    }),
    $(document).scroll(function () {
        $(this).scrollTop() > 50 ? $("header").addClass("active") : $("header").removeClass("active"), $(this).scrollTop() > 400 ? $("#scroll-top").show() : $("#scroll-top").hide();
    }),
    $("#scroll-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
    }),
    $(".callBookCalender").click(function () {
        console.log($("#book_slot_section").offset().top), $("html,body").animate({ scrollTop: $("#book_slot_section").offset().top - 86 }, "fast");
    });
$("#readMoreLess").click(function () {
    if ($(this).text() == "Read More") {
        $(this).text("Read Less");
    } else {
        $(this).text("Read More");
    }
    $("#themeSectionContentDetails .content .desc").toggleClass("active");
});
function changeTextSize(action) {
let html = document.documentElement; // Target <html> instead of <body>
let currentSize = parseFloat(window.getComputedStyle(html).fontSize); // Get root size
let newSize;

switch (action) {
    case 'increase':
        newSize = currentSize * 1.2; // Increase by 20%
        break;
    case 'decrease':
        newSize = currentSize * 0.8; // Decrease by 20%
        break;
    case 'reset':
        newSize = 16; // Reset to default (match your base size)
        break;
    default:
        return;
}

// Optional: Set min/max limits
if (newSize < 12) newSize = 12;
if (newSize > 32) newSize = 32;

// Apply the new size to the root
html.style.fontSize = newSize + 'px';

// Save preference
localStorage.setItem('fontSize', newSize);
}

// Apply saved size on load
window.onload = function() {
let savedSize = localStorage.getItem('fontSize');
if (savedSize) {
    document.documentElement.style.fontSize = savedSize + 'px';
}
};

const toggle = document.getElementById('menuToggle');
const offcanvas = document.getElementById('offcanvasExample');

offcanvas.addEventListener('show.bs.offcanvas', () => {
  toggle.setAttribute('aria-expanded', 'true');
});

offcanvas.addEventListener('hide.bs.offcanvas', () => {
  toggle.setAttribute('aria-expanded', 'false');
});

$(".owl-prev, .owl-next").removeAttr("role");