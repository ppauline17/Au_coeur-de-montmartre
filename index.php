<?php require_once("_header.php");?>
    <div class="bottom container flex">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>
    <div class="container">
        <div class="body flex">
            <section id="bienvenue">
                <h2>Bienvenue</h2>
                <h1>Appartement à louer à Montmartre</h1>
                <p>
                    Une situation panoramique dans Paris rêvée ! A 2 pas de la Basilique du Sacré Coeur de Montmartre et de la place du tertre !
                </p>
                <p>
                    Au coeur et sur la butte Montmartre avec vue imprenable sur Paris, beau 1/2 pièces meublé refait neuf par architecte designer, décoré avec goût et prestations haut de gamme.
                </p>
                <div class="carousel">
                    <ul class="slides">
                    <input type="radio" name="radio-buttons" id="img-1" checked />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img src="img/bedroom-6778193_960_720.jpg" alt="chambre"/>
                        </div>
                        <div class="carousel-controls">
                        <label for="img-3" class="prev-slide">
                            <span>&lsaquo;</span>
                        </label>
                        <label for="img-2" class="next-slide">
                            <span>&rsaquo;</span>
                        </label>
                        </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-2" />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img src="img/livingroom.jpg" alt="salon"/>
                        </div>
                        <div class="carousel-controls">
                        <label for="img-1" class="prev-slide">
                            <span>&lsaquo;</span>
                        </label>
                        <label for="img-3" class="next-slide">
                            <span>&rsaquo;</span>
                        </label>
                        </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-3" />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img src="img/kitchen.jpg" alt="cuisine"/>
                        </div>
                        <div class="carousel-controls">
                        <label for="img-2" class="prev-slide">
                            <span>&lsaquo;</span>
                        </label>
                        <label for="img-1" class="next-slide">
                            <span>&rsaquo;</span>
                        </label>
                        </div>
                    </li>
                    <div class="carousel-dots">
                        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
                    </div>
                    </ul>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <div class="pictures">
                        <a data-fancybox="gallery" href="img/background.jpg"><img src="img/background.jpg" alt="photo de montmartre 1"></a>
                        <a data-fancybox="gallery" href="img/montmartre-6510653_960_720.jpg"><img src="img/montmartre-6510653_960_720.jpg" alt="photo de montmartre 2"></a>
                        <a data-fancybox="gallery" href="img/paris-4546007_960_720.jpg"><img src="img/paris-4546007_960_720.jpg" alt="photo de montmartre 3"></a>
                </div>  
                <p>
                    Emplacement idéal avec de nombreux commerces, restaurants et transports à proximité Métro Lamarck-Caulaincourt ou Abbesses.
                </p>
            </section>
            <aside>
                <div class="actu">
                    <div class="article">
                        <div class="titre-article flex white">Actus</div>
                        <p>Plus que quelques dates disponibles pour les vacances de Noël</p>
                        <a href="actualites.php" title="actualites">Consultez les dates ici</a>
                    </div>
                </div>
                <div class="picture-side flex">
                    <a href="presentation.php" alt="Lien vers air bnb">Lien vers la page présentation</a>
                    <img src="img/bathroom-2094735_960_720.jpg" tile="salle de bain"/>
                </div>
                <div class="pub flex">
                    <a href="https://www.airbnb.fr/" title="Aller sur Airbnb" target="_blank">Réservez votre séjour</a>
                    <a href="https://www.airbnb.fr/" title="Aller sur Airbnb" target="_blank"><img src="img/0_I09pD975_KRExbNY.gif" alt="banière air bnb"/></a>
                </div>
            </aside>
        </div>
    </div>
    <?php require_once("_footer.php");?>