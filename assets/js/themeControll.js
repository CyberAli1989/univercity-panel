$(function () {
    let dark = false;
    $("button#theme").on("click", function (e) {
        e.preventDefault();
        if (!dark) {
            $(this).find("svg").removeClass("fa-moon").addClass("fa-sun");
            $("body").addClass("dark");
            $("nav").addClass("dark");
            dark = true;
        } else {
            $(this).find("svg").addClass("fa-moon").removeClass("fa-sun");
            $("body").removeClass("dark");
            $("nav").removeClass("dark");
            dark = false;
        }
    })
})