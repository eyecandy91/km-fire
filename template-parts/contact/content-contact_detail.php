<?php
// ez media theme option vars
// $value              = myprefix_get_theme_option( 'input_example' );
$telephone = myprefix_get_theme_option('place1_phone');
$address = myprefix_get_theme_option('place1_address_small');
$email = myprefix_get_theme_option('place1_email');
?>


<div class="columns is-tablet contact-phone" itemscope itemtype="http://schema.org/LocalBusiness">
    <h1 class="is-hidden-touch is-hidden-desktop" itemprop="name">MK fire and safety</h1>
    <div class="column is-full-mobile is-half-tablet is-half-desktop" itemprop="telephone">
        <a href="tel:<?php echo $telephone; ?>">
            <div class="content has-text-centered">
                <div class="is-rounded has-background-link has-text-white">
                    <i class="fas fa-phone is-size-2"></i>
                </div>
                <p><?php echo $telephone; ?></p>
            </div>
        </a>
    </div>
    <div class="column is-full-mobile is-half-tablet is-half-desktop">
        <a href="mailto:<?php echo $email; ?>?Subject=I'm%20interested" target="_blank">
            <div class="content has-text-centered">
                <div class="is-rounded has-background-link has-text-white">
                    <i class="fas fa-envelope is-size-2"></i>
                </div>
                <p><?php echo $email; ?></p>
            </div>
        </a>
    </div>
</div>