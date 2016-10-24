<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kraft
 */

?>
</div><!-- #content -->
<div id="footer">
    <div class="footer-wrapper">
    	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
        <ul>
        <div class="footer-image">
            <a href="http://www.partners.org"><img src="<?php print get_template_directory_uri(); ?>/images/footer-logo.png" alt="Partners" /></a>
        </div>
    </div>
</div>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7114508-3']);
_gaq.push(['_trackPageview']);

(function () {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<?php wp_footer(); ?>

</body>
</html>
