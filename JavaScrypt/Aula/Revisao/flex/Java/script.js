document.addEventListener("DOMContentLoaded", function () {
    const btnExpandir = document.querySelector(".bnt-expandir");
    const menuLateral = document.querySelector(".menu-lateral");

    btnExpandir.addEventListener("click", () => {
        menuLateral.classList.toggle("expandido");
    });
});
