const slide = document.querySelectorAll(".imgslider"); // Sélectionne tous les éléments avec la classe "imgslider" et les stocke dans un tableau
let numero = 0; // Variable pour suivre l'index de l'image actuelle
function changeSlide(sens) {
    slide[numero].setAttribute("id", ""); // Supprime l'attribut "id" de l'image actuelle
    numero += sens; // Incrémente ou décrémente l'index de l'image selon le sens
    if (numero === -1) { // Si l'index devient -1, boucle à la dernière image du tableau
        numero = slide.length - 1;
    } else if (numero === slide.length) { // Si l'index devient égal à la longueur du tableau, boucle à la première image
        numero = 0;
    }
    slide[numero].setAttribute("id", "showing"); // Ajoute l'attribut "id" "showing" à l'image actuelle pour l'afficher
}
function autoChangeSlide() {
    changeSlide(1); // Appelle la fonction changeSlide avec un sens de 1 pour passer à l'image suivante
}
setInterval(autoChangeSlide, 5000); // Appelle la fonction autoChangeSlide toutes les 5 secondes (5000 millisecondes)