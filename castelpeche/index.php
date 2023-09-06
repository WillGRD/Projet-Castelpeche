<!-- Je part de la racine du serveur $_SERVER['DOCUMENT_ROOT']  -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/./php/header.php') ?>

<main>
    <section class="indexdesc">
        <img class=imgdesc src="./src/img/castel.jpg" alt="photo du magasin castel pêche">
        <div>
            <h1 id="h1">Bienvenue dans la boutique Castel Pêche</h1>
        </div>
        <div class=texthome>
            <p>
                Créé en 1994 pour les pêcheurs castelthéodoriciens, ce magasin vous offre un large choix d'articles
                de pêche. 30 ans d'expérience mise au service des pêcheurs !
                Situé à Essômes sur Marne près de Château-Thierry, Soissons, Charly sur Marne dans le sud de
                l‘Aisne (Pays de l'Omois), à proximité du 77 (Seine et Marne), La Ferté sous Jouarre et du 51
                (Marne), Dormans, votre magasin détaillant en articles de pêche vous conseillera sur les différentes
                techniques utilisées pour pêcher dans la rivière Marne et les étangs (y compris carpodrome) situés
                aux alentours.
            </p>
            <p>
                Plutôt orienté vers la pêche des carnassiers (sandre, brochet, perche, truite, …), vous pourrez
                toutefois y trouver des articles pour pêcher au coup, pour le feeder, la bolognèse, l'anglaise, pour la
                carpe, le silure.
            </p>
            <p>
                Grâce à des amorces maison, des farines et des appâts de grande qualité, vous pourrez vous
                adonner sans limite à votre passion sur tous types de poissons d'eau douce : gardons, brèmes,
                ablettes, goujons, tanches, barbeaux, hotus, brochets, sandres, anguilles, carpes, silures,
                chevesnes, … Tout au long de l'année, nous vous proposons des promotions sur des articles variés
                ainsi qu'une carte de fidélité. Une formidable quantité de leurres souples "montés maison", un
                superbe rayon de poissons nageurs, cuillers, spinner baits, lames vibrantes et autres jigs vous y
                attendent.
            </p>
            <p>
                Revendeur des produits : SAVAGE, QUICK, RAPALA, DYNAMITE BAITS, SEVEN BASS,
                DELALANDE, OKUMA, DRENNAN, AMIAUD, FUN FISHING, BERKLEY … et bien d'autres marques
                trés connues dans le monde de la pêche.
            </p>
        </div>
    </section>
    <div id="carou">
        <h2>Nos Montages Maison pour le Carnassier vendu dans notre Magasin !</h2>
        <div id="slider">
            <img id="showing" class="imgslider" src="./src/img/pêche4.webp" alt="">
            <img class="imgslider" src="./src/img/pêche6.webp" alt="">
            <img class="imgslider" src="./src/img/pêche8.webp" alt="">
            <div id="precedent" onclick="changeSlide(-1)">&lt;</div>
            <div id="suivant" onclick="changeSlide(1)">&gt;</div>
        </div>
    </div>
    <div class=desc>
        <div class="imghome">
            <article>
                <img src="./src/img/pêche7.webp" alt="">
                <div class="h3p">
                    <h3> <a href="./php/carnassier.php">Pêche aux Carnassiers</a></h3>
                    <p>Pour la pêche au carnassier, nous proposons un large choix de leurres,
                        tels que des leurres souples, des crankbaits, des spinnerbaits et des jerkbaits,
                        qui imitent les proies naturelles des carnassiers. Ces leurres sont disponibles dans différentes tailles,
                        couleurs et actions pour s'adapter aux conditions de pêche et aux préférences des poissons.</p>
                </div>
            </article>
            <article>
                <img src="./src/img/silure1.webp" alt="">
                <div class="h3p">
                    <h3><a href="./php/silure.php">Pêche aux Silures</a></h3>
                    <p>Nous proposons une gamme d'équipements spécialement conçus pour la pêche au silure.
                        Les cannes à pêche dédiées à cette pratique sont robustes et puissantes,
                        capables de résister aux combats intenses avec ces poissons massifs.
                        Elles offrent également une bonne sensibilité pour détecter les touches subtiles</p>
                </div>
            </article>
            <article>
                <img src="./src/img/carpe1.webp" alt="">
                <div class="h3p">
                    <h3><a href="./php/carpe.php">Pêche à la Carpe</a></h3>
                    <p>Nous proposons une vaste gamme d'équipements spécifiquement conçus pour la pêche à la carpe.
                        Les cannes à pêche pour la carpe sont généralement robustes et puissantes,
                        capables de lancer des montages lourds et de faire face à de longues distances.
                        Elles sont dotées d'une sensibilité suffisante pour détecter les touches délicates des carpes méfiantes.</p>
                </div>
            </article>
            <article>
                <img src="./src/img/pêche5.webp" alt="">
                <div class="h3p">
                    <h3><a href="./php/coup.php">Pêche au Coup</a></h3>
                    <p>Nous proposons une gamme complète d'équipements spécifiquement adaptés à la pêche au coup.
                        Les cannes à pêche au coup sont fines, légères et sensibles,
                        conçues pour être maniées avec précision et pour détecter les touches subtiles des poissons.</p>
                </div>
            </article>
            <article>
                <img src="./src/img/truite1.webp" alt="">
                <div class="h3p">
                    <h3><a href="./php/truite.php">Pêche à la Truite</a></h3>
                    <p>Nous proposons une gamme d'équipements spécialement conçus pour la pêche à la truite.
                        Les cannes à pêche pour la truite sont généralement légères,
                        sensibles et précises, permettant aux pêcheurs de lancer avec précision et de détecter les moindres touches des truites.</p>
                </div>
            </article>
            <article>
                <img src="./src/img/feeder1.webp" alt="">
                <div class="h3p">
                    <h3><a href="./php/feeder.php">Pêche au Feeder</a></h3>
                    <p>Nous proposons une gamme d'équipements spécialement conçus pour la pêche à la truite.
                        Les cannes à pêche pour la truite sont généralement légères,
                        sensibles et précises, permettant aux pêcheurs de lancer avec précision et de détecter les moindres touches des truites.</p>
                </div>
            </article>
        </div>
        <h2 id="h2">À bientôt dans notre magasin </h2>
    </div>

    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/./php/footer.php') ?>