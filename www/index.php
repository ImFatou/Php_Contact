<?php include 'T:\UwAmp\www\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!--alert messages start-->
    <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/Moi.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                     Salut !
                    <span>Je suis Théo</span>
                    Etudiant en GBS3 et Créateur de contenu
                </h1>
                <p>
                    Je suis actuellement à la recherche d'une structure pouvant travailler avec moi.
                    L'objectif serait pour moi de pouvoir me développer et gagner en expérience 
                    au côté d'une équipe ambitieuse. 
                </p>
                <div class="btn-con">
                <a download="CV - BERNADY Théo" href="Assets/CV - BERNADY Théo.pdf" target="_blank" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>A propos de <span>moi</span><span class="bg-text">Aproposdemoi</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Plus d'informations</h4>
                    <p>
                        Créateur de contenu depuis maintenant presque 3 ans. 
                        Joueur Multigaming depuis 1 an :
                        Top 3 GamePass Challenge 2021
                        Top 5 ZLAN 2022 <br /> <br /> Etudiant au Gaming Campus Lyon 
                        en 3ème année de Bachelor Marketing & Business option jeu vidéo et esport. 
                    </p>
                    <div class="btn-con">
                    <a download="CV - BERNADY Théo" href="Assets/CV - BERNADY Théo.pdf" target="_blank" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">40+</p>
                            <p class="small-text">Projets <br /> Réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">4+</p>
                            <p class="small-text">Années <br /> d'experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">30 000+</p>
                            <p class="small-text">Réseaux sociaux <br /> Followers</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2+</p>
                            <p class="small-text">Lan <br /> Multigaming</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html/CSS/JAVASCRIPT</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Photoshop</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Montage vidéo</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Gérer/Animer un stream</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Marketing/Communication</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Teamplay/Lead</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon Parcours</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - 2017</p>
                    <h5>Stage à l'armée<span> - 1er RCP</span></h5>
                    <p>
                        Stage de 1 mois durant lequel j'ai été formé et éduqué au mode de vie des soldats durants.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - 2020</p>
                    <h5>Lycée<span> - Lycée Pyrène</span></h5>
                    <p>
                        Baccalauréat Scientifique option SVT mention Bien
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021</p>
                    <h5>GPC<span> - Gamepass Challenge</span></h5>
                    <p>
                        Lan multigaming en duo organisée par le streamer Zerator, première expérience pour moi.
                        Top 3 Demi-Finale 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - Present</p>
                    <h5>MCES<span> - Monclub Esport</span></h5>
                    <p>
                        Créateur de contenu et joueur multigaming au sein de la structure MCES.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022</p>
                    <h5>ZLAN<span> - ZLAN ZERATOR</span></h5>
                    <p>
                        Lan multigaming la plus prestigieuse en France organisée par le streamer Zerator.
                        Top 5 Quart de Finale
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - present</p>
                    <h5>GBS<span> - Gaming School</span></h5>
                    <p>
                        Etudiant en troisème année à la Gaming Business School option jeu vidéo et esport à Lyon
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mon <span>Portfolio</span><span class="bg-text">MonPortfolio</span></h2>
            </div>
            <p class="port-text">
                Voici plusieurs de mes projets que j'ai réalisé ces dernières années.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Montage.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Montage vidéo</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Photoshop.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Photoshop</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Streaming</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Marketing.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Marketing</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Communication.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Communication</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Esport.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Joueur Esport</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/imfatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>Projets</span><span class="bg-text">Projets</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/GPC.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Développer ma chaine Twitch 
                            </h4>
                            <p>
                                Augmenter la qualité et la quantité de contenu que je suis capable de créer sur la plateforme. 
                                Afin de continuer de me développer et découvrir de nouvelles choses.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/ZLAN.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Gagner une Lan Multigaming 
                            </h4>
                            <p>
                                J'ai participé au GamePass Challenge 2021 ainsi qu'à la ZLAN 2022 en faisant de bonnes performances.
                                Mais je n'ai toujours pas ramené la coupe à la maison... 
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/Structure.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Trouver une structure esport
                            </h4>
                            <p>
                                Je suis un passionné d'esport en général et je pense ça passe par une structure si je souhaite être plainement épanoui.
                                L'amour du maillot est pour moi très important. Anciennement MCES
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contactez <span>Moi</span><span class="bg-text">Contactez</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contactez moi ici</h4>
                        <p>
                            Si vous avez des questions ou vous souhaitez simplement rentrer en contact avec moi. 
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Domicile</span>
                                </div>
                                <p>
                                    : Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: tbernady@gaming.bs</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Etude Sup</span>
                                </div>
                                <p>
                                    <span>: Gaming Campus</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                    <span>Numéro de téléphone</span>
                                </div>
                                <p>
                                    <span>: 0672129403</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langages</span>
                                </div>
                                <p>
                                    <span>: Français, Anglais, Espagnol</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://fr.linkedin.com/in/th%C3%A9o-bernady-35a542201?original_referer=https%3A%2F%2Fwww.google.com%2F" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://twitter.com/imfatou" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.twitch.tv/imfatou" target="_blank">
                                    <i class="fab fa-twitch"></i>
                                </a>
                                <a href="https://www.youtube.com/c/FatouTheo" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    } </script>
</body>
</html>