<?php
$img        = get_field('di');
$url        = $img['url'];
?>

<section class="hero main is-medium has-text-centered">
    <div class="hero-body">
        <div class="fullscreen-bg home" style="background-image: url(<?php echo $url; ?>); background-size: cover; background-position: right bottom">
            <div></div>
        </div>
        <div id="main" class="container">
            <?php if( get_field('ht') ): ?>
            <h1 class="title is-1 is-size-2-mobile is-uppercase has-text-white fade-in main-title">
                <?php the_field('ht'); ?>
            </h1>
            <?php endif; ?>
            <?php if( get_field('htxt') ): ?>
            <h2 class="subtitle has-text-white fade-in sub-title">
                <?php the_field('htxt'); ?>
            </h2>
            <?php endif; ?>

            <?php if( get_field('btntxt') ): ?>
            <div class="field is-grouped is-grouped-centered">
                <p class="control">
                    <div class="intro-buttons">
                        <a href="<?php the_field('btnl'); ?>" class="button is-danger is-outlined is-rounded is-medium"><?php the_field('btntxt'); ?></span></a>
                    </div>
                </p>
            </div>
            <?php endif; ?>            
        </div>
    </div>
</section>