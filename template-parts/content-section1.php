<?php
$s1_title = get_sub_field('section_1_title');
$s1_content = get_sub_field('section_1_content');
$s1_img = get_sub_field('section_1_img');
$s1_link = get_sub_field('section_1_link');
?>

<section class="hero is-white is-medium slant white top right">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div data-aos="fade-left" class="column is-full-mobile is-half-tablet is-half-desktop">
                    <div class="column-is-centered content circle-list">
                        <?php if (isset($s1_title)): ?>
                            <h3 class="title fancy is-3 is-size-4-mobile is-uppercase">
                                <?php echo $s1_title ?>
                            </h3>
                        <?php endif;?>

                        <?php if (isset($s1_content)): ?>
                            <p>
                                <?php echo $s1_content ?>
                            </p>
                        <?php endif;?>
                        <?php if (isset($s1_link)): ?>
                        <div class="intro-buttons">
                            <a href="<?php echo $s1_link ?>" class="button is-danger is-outlined is-rounded is-medium is-uppercase">
                                call us</span></a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
                
                <div data-aos="fade-down" class="column is-full-mobile is-half-tablet is-half-desktop">
                    <div class="img-column-is-centered">
                        <?php if (isset($s1_img)): ?>
                            <img src="<?php echo $s1_img['url'] ?>" alt="<?php echo $s1_img['title'] ?>" width="<?php echo $s1_img['width'] ?>" height="<?php echo $s1_img['height'] ?>">
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>