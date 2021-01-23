    <footer class="footer">
        <div class="footer__content">
            <!-- <div class="footer__menu"> -->
                <?php //wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
            <!-- </div> -->
            
            <div class="footer__social-icons">
                <a href="https://www.facebook.com/culturaperuana.ch/" target="_blank">
                    <i class="fa fas fa-facebook-square footer__social-icon"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa fas fa-instagram footer__social-icon"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa fas fa-twitter footer__social-icon"></i>
                </a>
            </div>

            <div class="footer__content-newsletter">
                <p class="newsletter__text">Subscribir a nuestro newsletter</p>
                
                <form action="">
                    <input type="text" placeholder="Email" class="footer__input">
                    <button type="submit" class="footer__button">Subscribir</button>
                </form>
            </div>

            <div class="footer__content-image">
                <img src="<?= get_template_directory_uri() . '/frontend/images/logo_white.png'; ?>" alt="logo" class="footer__content-logo">
            </div>
        </div>

        <p class="footer__copyright">CCPZ - Comisión de Cultura Peruana en Zúrich © 2021</p>        
    </footer>
    <!-- BODY END -->

    <?php wp_footer(); ?>
</body>
</html>