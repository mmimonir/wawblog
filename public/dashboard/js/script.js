$(".waw-dropdown-container").on("click", function () {
    let display = $(this).children(".waw-dropdown").css("display");
    if (display == "none") {
        $(this).children(".waw-dropdown").slideDown();
        $(this)
            .children("a")
            .children(".waw-menu-item-right-icon")
            .removeClass("fa-chevron-down")
            .addClass("fa-chevron-up");
        $(this)
            .siblings(".waw-dropdown-container")
            .children(".waw-dropdown")
            .slideUp();
        $(this)
            .siblings(".waw-dropdown-container")
            .children("a")
            .children(".waw-menu-item-right-icon")
            .removeClass("fa-chevron-up")
            .addClass("fa-chevron-down");
    } else {
        $(this).children(".waw-dropdown").slideUp();
        $(this)
            .children("a")
            .children(".waw-menu-item-right-icon")
            .removeClass("fa-chevron-up")
            .addClass("fa-chevron-down");
    }
});

// $(".waw-menu").children(".active").children(".waw-dropdown").slideToggle();
// $(".waw-menu")
//     .children(".active")
//     .children("a")
//     .children(".waw-menu-item-right-icon")
//     .toggleClass("fa-chevron-up fa-chevron-down");

$(".profile-section").on("click", function () {
    $(".profile-dropdown").slideToggle();
});
