// toggle kelas active

const nav = document.querySelector(".navbarcustom-nav");

document.querySelector("#hamburger").onclick = () => {
    nav.classList.toggle("active");
};

const hamburger = document.querySelector("#hamburger");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
        nav.classList.remove("active");
    }
});



