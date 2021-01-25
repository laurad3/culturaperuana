    <footer class="footer">
        <div class="footer__content">
            <!-- <div class="footer__menu"> -->
                <?php //wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
            <!-- </div> -->
            
            <div class="footer__social-icons">
                <a href="https://www.facebook.com/culturaperuana.ch/" target="_blank">
                    <i class="fa fas fa-facebook-square social-icon footer__social-icon"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa fas fa-instagram social-icon footer__social-icon"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa fas fa-twitter social-icon footer__social-icon"></i>
                </a>
            </div>

            <div class="footer__newsletter">
                <p class="newsletter-text">Subscribir a nuestro newsletter</p>
                
                <form action="" class="newsletter-form">
                    <input type="text" placeholder="Email" class="newsletter-input input-text">
                    <button type="submit" class="btn btn--secondary newsletter-btn">Subscribir</button>
                </form>
            </div>

            <div class="footer__logo">
                <img src="<?= get_template_directory_uri() . '/frontend/images/logo_white.png'; ?>" alt="logo" class="logo">
            </div>
        </div>

        <p class="footer__copyright">CCPZ - Comisión de Cultura Peruana en Zúrich © 2021</p>        
    </footer>
    <!-- BODY END -->

    <?php wp_footer(); ?>
</body>
</html>