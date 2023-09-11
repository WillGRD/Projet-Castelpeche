const sup = document.getElementsByClassName("sup"); //On sélectionne tous les éléments avec la class CSS "sup"
const req = new XMLHttpRequest(); //On crée une instance de XMLHttpRequest pour gérer la requête HTTP
let data = new FormData(); //On crée un objet FormData pour stocker les données à envoyer au serveur
for (let e of sup) { // On itére sur chaque élément avec la classe "sup"
    e.addEventListener('click', function () { // On attache un écouteur d'événements au clic de chaque élément
        const id = this.dataset.id;             // Récupère l'ID de l'article à partir de l'attribut "data-id" de l'élément
        if (confirm("Voulez vous vraiment suprimer cet article ?")) { // Affiche une boîte de dialogue de confirmation à l'utilisateur
            data.append('article', id); // Ajoute l'ID de l'article aux données de la requête FormData
            req.open('POST', '../models/deleteArticle.php', true); // Configure une requête HTTP POST vers le script PHP de suppression
            req.send(data); // Envoie les données au serveur
            alert('Article suprimer'); // Affiche une alerte indiquant que l'article a été supprimé
            window.location.reload(); // Recharge la page pour refléter les changements (article supprimé)
        }
    })
}

