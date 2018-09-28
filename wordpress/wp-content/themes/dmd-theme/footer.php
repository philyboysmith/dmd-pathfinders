<footer class="c-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="c-footer__container padding-bottom--l">
        <?php wp_nav_menu(array(
        'container' => false,
        'menu' => __('Footer Links', 'bonestheme'),
        'menu_class' => 'nav footer-nav',
        'theme_location' => 'footer-links'
        )); ?>
		</ul>
    </div>
    <div class="bg--neutral--darkest padding-top--l padding-bottom--l">
        <div class="c-footer__container l-container--flex">
            <div class="c-footer__meta padding-top--m ">
                <p>&copy; <?php echo date('Y')?> DMD Pathfinders Registered Charity 1155884<br />
                Mercury House, Ham Rd, Shoreham-by-Sea BN43 6EW</p>
            </div>
            <div class="c-footer__dmd text-center">
                <p>Supported by:<br />
                <a href="https://www.duchenneuk.org/" target="_blank"><img src="http://hercules.duchenneuk.org/assets/img/duchenne_logo.svg" alt="duchenne uk"/></a>
                </p>
            </div>
        </div>
    </div>
</footer>


		<?php wp_footer(); ?>

<script>

$(document).ready(function() {
if ($('.switch').length>0) {
    $('.switch').click();
    console.log('Testing console');
}});

</script>
	</body>

</html> <!-- end of site. what a ride! -->
