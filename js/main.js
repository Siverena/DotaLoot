window.onload = function(e) {
    var links = document.querySelectorAll(".nav-header .nav__link");
    var pageCurrent = document.location.pathname.substr(10);
    for (i = 0; i < links.length; i++) {
        if (links[i].getAttribute("href") == pageCurrent) {
            links[i].classList.add("nav--active");


        }
    }



    var links = document.querySelectorAll(".nav-footer .nav__link");
    var pageCurrent = document.location.pathname.substr(10);
    for (i = 0; i < links.length; i++) {
        if (links[i].getAttribute("href") == pageCurrent) {
            links[i].classList.add("nav--active--foo");

        }
    }


}