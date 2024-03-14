<?php get_header(); ?>
    <h1>SINGLE</h1>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                        $titre = get_the_title();
                        ?>

                        <div class="carte">
                            <div class="info-carte">
                                <h3><?php the_title(); ?></h3> 
                            </div>
                            <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>        
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
<?php get_footer(); ?>