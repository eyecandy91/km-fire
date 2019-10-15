<?php
// ez media theme option vars
$telephone = myprefix_get_theme_option('place1_phone');
$address = myprefix_get_theme_option('place1_address_small');
$email = myprefix_get_theme_option('place1_email');
?>

<header class="is-uppercase has-text-weight-bold">
    <div class="nav-extra is-hidden-touch has-background-link has-text-white">
        <div class="container">
            <div class="social">
                call us on:
                <a class="has-text-white" href="<?php echo $telephone; ?>"><i class="fas fa-phone has-text-danger"></i><?php echo $telephone; ?></a>
            </div>
            <div class="social">
                <a class="has-text-white" href="<?php echo $address; ?>"><i class="fas fa-map-marker-alt has-text-danger"></i><?php echo $address; ?></a>
            </div>
            <div class="navbar-end ">
                <ul>
                    <li><span class="contact-span contact-email"><a class="has-text-white"
                                href="mailto:<?php echo $email; ?>?Subject=I'm%20interested" target="_blank"><i
                                    class="fas fa-envelope has-text-danger"></i>
                                <?php echo $email; ?></a></span></li>
                </ul>
            </div>
        </div>
    </div>
    <nav id="navbar" class="navbar is-spaced is-white" itemscope="itemscope"
        itemtype="https://schema.org/SiteHeader">
        <div class="container">
            <div class="navbar-brand">
                <div class="navbar-item logo">
                    <?php echo get_custom_logo(); ?>
                </div>
                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <?php
                //if ( wp_is_mobile() ) {
                //    if (is_user_logged_in()) {?>
                                <!-- <a class="button is-link mobile-logout" href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a> -->
                                <?php //}
                //}
                ?>
            </div>
            <div id="navMenuDocumentation" class="navbar-menu">
                <div class="navbar-end ">
                    <?php
                    $args = array(
                        'theme_location' => 'menu-1',
                        'container' => 'ul',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'navbar-nav has-text-weight-bold navbar-item',
                        'list_item_class' => 'nav-item',
                    );
                    wp_nav_menu($args);
                    //if ( !wp_is_mobile() ) {
                    //    if (is_user_logged_in()) {?>
                                        <!-- <a class="button is-link not-mobile-logout" href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a> -->
                                        <?php// }
                    //} ?>
                </div>
            </div>
        </div>
    </nav>
</header>