            <footer class="l-footer p-footer c-grid__footer">
                <div class="p-footer__inner">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                    )); ?>
                    <div class="p-footer__copyright">
                        <p>Copyright: RaiseTech</p>
                    </div>
                </div>
                <?php wp_footer(); ?>
            </footer>
            
            <div class="c-layer__container"></div>
        </div>
        <script src="js/sidebar.js"></script>
    </body>
</html>