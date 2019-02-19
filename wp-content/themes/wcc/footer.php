<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _rebase
 */

?>
  <?php /* Footer 01 Start */ ?>
  <footer class="b-block footer-small border-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'navbar-nav navbar-nav-footer',
                    'depth'           => 2,
                    'container'       => '',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker()
                ));
                ?>
            </div>
            <div class="col-12 col-md-2">
                <ul id="menu-footer-social" class="navbar-nav navbar-nav-social">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-247 nav-item"><a href="<?php echo  get_theme_mod('facebook_icon');?>" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248 nav-item"><a href="<?php echo get_theme_mod('linkedin_icon');?>" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-246 nav-item"><a href="<?php echo get_theme_mod('twitter_icon');?>" class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                </ul>
            </div>
        </div>
      <div class="row mt-2">
        <div class="col">
          <p class="copy-right mb-0">&copy;
            
              World Class Contracting <?php
  					  $current = date('Y');
              //$string = 'Copyright '; //what goes before year here
              $string .= $current;
              echo $string;
  				  ?>.
            Site by <a href="http://reaction.ca" rel="designer">Reaction.</a>
  				</p>
        </div>
      </div>
    </div>
  </footer>
  <?php /* Footer 01 End */ ?>

</div>

<?php wp_footer(); ?>

<?php /* if ($analytics_code = get_field('google_analytics_code', 'option')): */ ?>
	<!-- <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $analytics_code; ?>', 'auto');
		ga('send', 'pageview');
	</script> -->
<?php /* endif; */ ?>
</body>
</html>
