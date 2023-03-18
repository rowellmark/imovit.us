			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
			
	<section id="glob-footer-form" class="relative">
			
		<div class="container"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">

			<div class="default-title default-title-inverted text-center">
				<div class="dtitwrap inline-block">
					<h2 class="text-left">
						get in touch
						<span>contact us</span>
					</h2>
				</div>
			</div>

			<div class="globFormWrap">
				<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
			</div>
		</div>

	</section><!-- end of glob footer form -->

	<footer class="footer">
		<div class="container">
			
			<div class="footer-logo">
				<a href="<?= do_shortcode('[blogurl]')?>" class="site-name block w-100"><img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="iMovit Real Estate Brokerage" class="block w-100"></a>
			</div>

			<div class="footer-contact-info">
				<ul class="flex justify-center items-center">
					<li>
						<i class="ai-font-phone"></i>
						<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
					</li>
					<li>
						<i class="ai-font-envelope-f"></i>
						<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
					</li>
				</ul>
			</div>

			<div class="footer-menu">

				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>

			</div>

			<div class="footer-disclaimer">
				<p>iMovit Real Estate Brokerage committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at <?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?> to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
			</div>

		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
