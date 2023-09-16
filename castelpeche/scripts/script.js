//Début clik ça remonte //

let chevron = document.createElement("p");   //On créer l'élément chevron qui sera de type p
chevron.textContent = "<";                   // On lui ajoute du texte (<)
chevron.classList.add("hidden");             // On cache le chevron au demmarage
document.body.appendChild(chevron);          // On ajoute mon élément < à mon document
window.addEventListener("scroll", () => {    // On ajoute l'événement scroll à ma page
    if (window.scrollY > 1600) {             // Quand on scroll à + de 1600px alors le < apparait 
        chevron.classList.remove("hidden");    // On donne la classe "visible"
        chevron.classList.add("visible");    // On donne la classe "visible"
    }
    else {
        chevron.classList.remove("visible"); // Si on atteint pas les 1600px on lui retire la classe visible
    }
});
chevron.addEventListener("click", () => {    // On lui ajoute l'événement click pour remonter 
    document.body.scrollIntoView({           // fait défiler la page de manière à rendre l'élément visible
        behavior: "smooth"                   // Fait en sorte que le scroll soit fluide une fois que on a cliqué sur le <
    });
})

//Fin clik ça remonte //