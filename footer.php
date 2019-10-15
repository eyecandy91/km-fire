<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

// ez media theme option vars
$telephone = myprefix_get_theme_option('place1_phone');
$email = myprefix_get_theme_option('place1_email');
$address = myprefix_get_theme_option('place1_address');
$copyright = myprefix_get_theme_option('copyright');
$embed = myprefix_get_theme_option('embed');

?>
<!-- </section> -->

<!-- </div>.container -->

<footer class="footer hero is-dark has-text-weight-bold slant dark top left" itemscope="itemscope"
    itemtype="https://schema.org/SiteFooter">

    <div class="container">
        <div class="columns">
            <div class="column is-full-mobile is-one-third-tablet">
                <div class="content has-text-left">
                    <ul>
                        <li class="title is-4"><i class="fas fa-envelope has-text-danger"></i>Contact us</li>
                        <li>If you have any queries at all please don't hesitate to contact us on:</li>
                        <li><a href="tel:<?php echo $telephone; ?>"><i
                                    class="fas fa-phone has-text-danger"></i><?php echo $telephone; ?></a></li>
                        <li><a href="mailto:<?php echo $email; ?>?Subject=I'm%20interested" target="_blank"><i
                                    class="fas fa-envelope-open has-text-danger"></i><?php echo $email; ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="column is-full-mobile is-one-third-tablet">
                <div class="content has-text-left">
                    <ul>
                        <li class="title is-4"><i class="fas fa-phone has-text-danger"></i>Find us</li>
                        <li>You can find us at the following location:</li>
                        <li class="address"><i class="fas fa-map-marked-alt has-text-danger"></i><?php echo $address; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column is-full-mobile is-one-third-tablet">
                <div class="content has-text-left">
                    <ul>
                        <li class="title is-4"><i class="fas fa-map-marker-alt has-text-danger"></i>We are here</li>
                    </ul>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2358.4734015432246!2d-0.3191593841457967!3d53.763259280068574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4878be72250508a1%3A0xb55b42cde6e59f87!2s201%20James%20Reckitt%20Ave%2C%20Hull%20HU8%207TL%2C%20UK!5e0!3m2!1sen!2sth!4v1571064650853!5m2!1sen!2sth"
                            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
            <div class="column is-full">
                <div class="has-text-centered">
                    <img src="<?php echo get_theme_mod('logo_mobile'); ?>" alt="eZMedia" width="60" height="28">
                </div>
            </div>

        <small class="has-text-centered is-fullwidth is-block"><?php echo $copyright; ?></small>

    </div>

</footer>

<?php wp_footer();?>

<script>
AOS.init({
    duration: 2000, // values from 0 to 3000, with step 50ms
    once: true, // whether animation should happen only once - while scrolling down
    offset: 0, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
});
</script>

</body>

</html>