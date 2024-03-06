<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thème du groupe 1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="menu" class="global">
        <header class="menu__header">
            <?php wp_nav_menu(array("container" => "nav")) ?>
        </header>
    </div>
    <div id="entete" class="global">
        <section class="entete_header hero">
            <h1>Thème du groupe 1 (h1)</h1>
            <h2>4W4-Conception d'interface et développement Web</h2>
            <h3>Tim - Collège de maisonneuve</h3>
            <button>Événement</button>
        </section>
        <div class="vague vague-entete">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
                <?php
                    // if (have_posts()) {
                    //     while(have_posts()){
                    //         the_post();
                    //         the_title('<h3>', '</h3>');
                    //         echo wp_trim_words(get_the_content(),30);
                    //     }
                    // }

                    if (have_posts()) :
                        while (have_posts()) : the_post();
                        $titre = get_the_title();
                        $sigle = substr($titre,0,7);

                        $positionDureeDebut = strpos($titre, '(');
                        $positionDureeFin = strpos($titre, ')');
                        $duree = substr($titre, $positionDureeDebut+1, -1);
                        $titreMontre = substr($titre, 7, $positionDureeDebut -7);
                        ?>

                        <div class="carte">
                            <div class="info-carte">
                                <h4><?= $sigle; ?></h4>
                                <h3><?= $titreMontre; ?></h3> 
                                <h5><?= $duree; ?></h5>
                            </div>
                            
                            <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
            
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ad dolorum, ex officia similique, illum laudantium reiciendis dolor numquam fugiat laboriosam, repudiandae ducimus ipsam inventore adipisci. Optio, veritatis! Atque, culpa.</p> -->
            <!-- <p class="boite1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ad dolorum, ex officia similique, illum laudantium reiciendis dolor numquam fugiat laboriosam, repudiandae ducimus ipsam inventore adipisci. Optio, veritatis! Atque, culpa.</p>
            <p class="boite2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ad dolorum, ex officia similique, illum laudantium reiciendis dolor numquam fugiat laboriosam, repudiandae.</p> -->
        
        </section>
    </div>
    <div id="evenement" class="global diagonale">
        <section>
            <h2>Événement (h2-tres grand)</h2>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum?(h3-grand)</h3>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum?(h4-moyen)</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum?(h5-petit)</h5>
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum?(h6-tres petit)</h6>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>

            <div class="liens">
                <a href="https://www.behance.net/milebcotte">
                    <img src="https://s2.svgbox.net/social.svg?ic=behance&color=08409b" width="32" height="32">
                </a>
                <a href="https://github.com/BecotteEmile">
                    <img src="https://s2.svgbox.net/social.svg?ic=github&color=08409b" width="32" height="32">
                </a>
                <a href="https://www.youtube.com/channel/UCl7Aq_HWeanhUJt_QSXIV1Q">
                    <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=08409b" width="32" height="32">
                </a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Testez votre chance</a>
            </div>

        </section>
    </div> 
    <div id="footer" class="global "><!-- diagonale -->
        <footer>
            <h2>Footer (h2)</h2>
        </footer>
        <div class="vague-footer">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
</body>
</html>