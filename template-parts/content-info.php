<section class="hero is-light has-text-centered slant grey top left extra-size">
    <div class="hero-body">
        <div class="container small content">
            <div data-aos="fade-down">

                <?php if (get_field('xtra_title')): ?>
                <h3 class="title fancy is-3 is-size-4-mobile is-uppercase">
                    <?php the_field('xtra_title');?>
                </h3>
                <?php endif;?>

                <?php if (get_field('xtra_content')): ?>
                <div class="content has-text-centered">
                    <?php the_field('xtra_content');?>
                </div>
                <?php endif;?>
                
                <?php if (get_field('xtra_button_name')): ?>
                <div class="intro-buttons">
                    <a href="<?php the_field('xtra_button_link');?>" class="button is-link is-outlined is-rounded is-medium">
                    <?php the_field('xtra_button_name');?></span></a>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>