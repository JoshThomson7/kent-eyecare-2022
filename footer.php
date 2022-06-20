    <footer role="contentinfo">
            
        <div class="footer__menus">
            <div class="max__width">

                <?php while(have_rows('footer_menus', 'options')) : the_row();

                        $footer_menu = get_sub_field('footer_menu');
                        ?>
                        <article class="footer__menu">
                            <h5><?php echo $footer_menu->name; ?> <span class="ion-ios-plus-empty"></span></h5>

                            <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'walker' => new clean_walker)); ?>
                        </article>

                <?php endwhile; ?>

                <article class="footer__menu contact-info">
                    <h5>Contact Us <span class="ion-ios-plus-empty"></span></h5>

                    <ul>
                        <li><i class="fa fa-phone"></i><a href="tel:01732873378">01732 873378</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:enquiries@kenteyecare.co.uk">enquiries@kenteyecare.co.uk</a></li>
                    </ul>
                </article>

                <article class="footer__menu social">
                   <h5>Follow Us <span class="ion-ios-plus-empty"></span></h5>
                    <?php if(get_field('header_social', 'options')): ?>
                        <ul class="social-wrapper">
                            <?php while(have_rows('header_social', 'options')) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('header_social_url'); ?>" title="<?php the_sub_field('header_social_platform'); ?>" target="_blank">
                                        <i class="<?php the_sub_field('header_social_icon'); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul><!-- header__social -->

                    <?php endif; ?>

                </article>

                <article class="footer__menu find-us">
                    <h5>Find Us</h5>

                    <div class="contact">
                        <a href="https://www.google.com/maps/place/786+London+Rd,+Larkfield,+Aylesford+ME20+6BE/@51.2986534,0.4361141,16z/data=!4m5!3m4!1s0x47df345c2685d711:0x773f6a73ac7c2e7b!8m2!3d51.2986534!4d0.4404915" target="_blank">786 London Road,<br>
                        Larkfield, Aylesford,<br>
                        Kent, ME20 6BE</a>
                    </div>
                </article>

            </div><!-- max__width -->

        </div><!-- footer__menus -->

        <div class="subfooter">
            <div class="subfooter__credits">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.jpeg" alt="<?php bloginfo('name'); ?>">
                <p>&copy;<?php bloginfo('name') ?> <?php echo date("Y"); ?></p>
                <p class="credit"><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></p>
            </div><!-- subfooter__credits -->
        </div><!-- subfooter -->
            
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
