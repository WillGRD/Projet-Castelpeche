const sup = document.getElementsByClassName("sup");
const req = new XMLHttpRequest();
let data = new FormData();
for (let e of sup) {
    e.addEventListener('click', function () {
        const id = this.dataset.id;     // Je récupére l'id du bouton
        if (confirm("Voulez vous vraiment suprimer cet article ?")) {
            data.append('article', id);
            req.open('POST', '../models/deleteArticle.php', true);
            req.send(data);
            alert('Article suprimer');
            window.location.reload();
        }
    })
}

