<?php get_header(); ?>
    <div id="entete" class="global">
        <section class="entete_header hero">
            <h1><?= get_bloginfo("name"); ?></h1>
            <h2><?= get_bloginfo("description"); ?></h2>
            <h3>Tim - Collège de maisonneuve</h3>
            <button>Événement</button>
            


            <div class="categories">
                <?php
                foreach((get_categories()) as $category) :
                    $slug = $category->slug;
                    $nomCat = $category->name;
                    $description = $category->description;
                    $nbArticles = $category->count;
            ?>
            <div class="carte">
                <div class="info-carte">
                    <h3><?= $nomCat; ?></h3> 
                </div>          
                <p><?= wp_trim_words($description, 10); ?></p>
                <a href="/4w4emile/category/<?= $slug; ?>/">Suite</a>
                <p><?= $nbArticles; ?></p>
            </div>
            <?php endforeach?>
            </div>


        </section>
        <?php get_template_part('gabarits/vague') ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="destination">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                        $titre = get_the_title();
                        ?>
                        <div class="carte">
                            <div class="info-carte">
                                <h3><?php the_title() ?></h3> 
                            </div>
                            
                            <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                            <?php the_category(); ?>
                            <!-- Ajout d'un permalien -->
                            <a href="<?php the_permalink(); ?>">Suite</a>
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
<?php get_footer(); ?>