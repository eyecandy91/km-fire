<?php
$s2_title = get_sub_field('section_2_title');
$s2_content = get_sub_field('section_2_content');
$s2_img = get_sub_field('section_2_img');
$s2_link = get_sub_field('section_2_link');
?>
<section class="hero is-light dotted is-medium slant grey top left">
    <div class="hero-body">
        <div class="container">
            <div class="columns reverse-mobile">
                <div data-aos="fade-down" class="column is-full-mobile is-half-tablet is-half-desktop">
                    <div class="img-column-is-centered">
                        <?php if (isset($s2_img)): ?>
                        <img src="<?php echo $s2_img['url'] ?>" alt="<?php echo $s2_img['title'] ?>" width="<?php echo $s2_img['width'] ?>" height="<?php echo $s2_img['height'] ?>">

                        <?php endif;?>
                    </div>
                </div>
                <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                    <div class="column-is-centered content circle-list">
                        <?php if (isset($s2_title)): ?>
                            <h3 class="title fancy is-3 is-size-4-mobile is-uppercase">
                                <?php echo $s2_title ?>
                            </h3>
                        <?php endif;?>

                        <?php if (isset($s2_content)): ?>
                            <p>
                                <?php echo $s2_content ?>
                            </p>
                        <?php endif;?>
                        <?php if (isset($s2_link)): ?>
                        <div class="intro-buttons">
                            <a href="<?php echo $s2_link ?>" class="button is-link is-outlined is-rounded is-medium is-uppercase">
                                get in touch</span></a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>