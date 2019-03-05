window.onload = function() {
    if (window.matchMedia("(max-width: 1024px)").matches) {
        document.querySelector(".menuButton").addEventListener("click", (e) => {
            document.querySelector(".menuButton").classList.toggle("change");
            document.querySelector("header").classList.toggle("nav-visible");
            document.querySelector("section").classList.toggle("nav-visible");
        });
    }
}
