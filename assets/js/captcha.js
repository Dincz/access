document.addEventListener("DOMContentLoaded", function () {
    const siteKey = CAPCTHA_SITE_KEY;


    grecaptcha.ready(function () {
        grecaptcha.execute(siteKey, { action: "submit" }).then(function (token) {
            document.querySelectorAll(".recaptcha-response").forEach(function (input) {
                input.value = token;
            });
        });
    });
});
