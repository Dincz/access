function animateFrom(t, e) {
    var n = 100 * (e = e || 1);
    t.style.transform = "translate(0px, " + n + "px)", t.style.opacity = "0", gsap.fromTo(t, { x: 0, y: n, autoAlpha: 0 }, { duration: 3, x: 0, y: 0, autoAlpha: 1, ease: "expo", overwrite: "auto" })
}
function hide(t) { gsap.set(t, { autoAlpha: 0 }) }
document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger),
        gsap.utils.toArray(".scrollTrigger").forEach(function (t) {
            // hide(t)
            ScrollTrigger.create({
                trigger: t, onEnter: function () {
                    animateFrom(t)
                }, onEnterBack: function () {
                    animateFrom(t, -1)
                },
                onLeave: function () {
                    // hide(t)
                }
            })
        })
});