<?php get_header(); ?>

<section id="hero" class="relative">
	<div class="slideshow relative has-after">
		<?php echo do_shortcode('
			[aios_slider id="Homepage Slideshow"]
		'); ?>
	</div>

	<div class="sliderLogo absolute w-100">
		<div class="max-container"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="100" data-aos-duration="800" data-aos-delay="500">
			<a href="<?= do_shortcode('[blogurl]')?>">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo-white.png" alt="iMovit Real Estate Brokerage" class="block w-100">
			</a>
		</div>
	</div>
</section>

<section id="hp-cta" class="overflow-hidden has-after has-before relative">

	<div class="max-container">

		<div class="cta-container flex justify-between relative">

			<div class="cta-title"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="400">
				<h2>You Can Begin With, </h2>
				<p>with the You Can having a bigger size, and Begin With being smaller</p>
			</div><!-- end of cta title -->

			<div class="cta-lists flex">

				<div class="cta-list"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
					<a href="#" class="block relative w-100">
						<canvas width="273" height="383" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/cta-1.jpg" alt="Buy a home" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="273" height="383">
						<h3>Buy a home</h3>
					</a>
				</div><!-- end of cta list -->

				<div class="cta-list"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="600">
					<a href="#" class="block relative w-100">
						<canvas width="273" height="383" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/cta-2.jpg" alt="Sell a Home" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="273" height="383" >  
						<h3>Sell a Home</h3>
					</a>
				</div><!-- end of cta list -->

				<div class="cta-list"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="700">
					<a href="#" class="block relative w-100">
						<canvas width="273" height="383" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/cta-3.jpg" alt="Do Commercial" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="273" height="383">
						<h3>Do Commercial</h3>
					</a>
				</div><!-- end of cta list -->


			</div><!-- end of cta lists -->
		</div><!-- end of cta container -->
	</div>
</section><!-- end of cta -->

<section id="hp-featured-communities" class="relative overflow-hidden">

	<div class="max-container">

		<div class="fc-title flex justify-between items-center">

			<div class="default-title"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<h2>
					featured
					<span>communities</span>
				</h2>
			</div>

			<div class="default-button"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="600">
				<a href="#">
					<span>learn more +</span>
				</a>
			</div>
		</div><!-- end of fc title -->

		<div class="fc-lists flex flex-wrap-wrap">

			<div class="fc-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<a href="#" class="block relative">
					<canvas width="762" height="408" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fc-1.jpg" alt="Ocala" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
					<h3>Ocala</h3>
				</a>
			</div><!-- end of fc list -->
			<div class="fc-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="600">
				<a href="#" class="block relative">
					<canvas width="762" height="408" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fc-2.jpg" alt="The Villages" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
					<h3>The Villages</h3>
				</a>
			</div><!-- end of fc list -->
			<div class="fc-list"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<a href="#" class="block relative">
					<canvas width="762" height="408" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fc-3.jpg" alt="Clermont" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
					<h3>Clermont</h3>
				</a>
			</div><!-- end of fc list -->
			<div class="fc-list"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="600">
				<a href="#" class="block relative">
					<canvas width="762" height="408" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fc-4.jpg" alt="Central Florida" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
					<h3>Central Florida</h3>
				</a>
			</div><!-- end of fc list -->

		</div><!-- end of fc lists -->
	</div>
</section><!-- end of featured communities -->

<section id="hp-featured-properties" class="relative overflow-hidden has-after has-before">

	<div class="max-container relative">
		<div class="fp-title">
			
			<div class="default-title"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<h2>
					featured
					<span>properties</span>
				</h2>
			</div>

		</div><!-- end of fp title -->
	</div>

	<div class="fp-lists splide"  data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
		<div class="splide__track">
			<div class="splide__list">

				<div class="splide__slide fp-list">
					<a href="#" class="block relative w-100">
						<div class="fp-img relative">
							<canvas width="494" height="464" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fp-1.jpg" alt="Central Florida" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</div>
						<div class="fp-content absolute">
							<div class="fpContentWrap relative">
								<h4>$16,000,000</h4>
								<p>1700 East Walnut Avenue</p>
								<span>learn more +</span>
							</div>						</div>
					</a>
				</div><!-- end of fp list -->
				<div class="splide__slide fp-list">
					<a href="#" class="block relative w-100">
						<div class="fp-img relative">
							<canvas width="494" height="464" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fp-2.jpg" alt="Central Florida" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</div>
						<div class="fp-content absolute">
							<div class="fpContentWrap relative">
								<h4>$9,000,000</h4>
								<p>1700 East Walnut Avenue</p>
								<span>learn more +</span>
							</div>						</div>
					</a>
				</div><!-- end of fp list -->
				<div class="splide__slide fp-list">
					<a href="#" class="block relative w-100">
						<div class="fp-img relative">
							<canvas width="494" height="464" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/fp-3.jpg" alt="Central Florida" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</div>
						<div class="fp-content absolute">
							<div class="fpContentWrap relative">
								<h4>$16,000,000</h4>
								<p>1700 East Walnut Avenue</p>
								<span>learn more +</span>
							</div>
						</div>
					</a>
				</div><!-- end of fp list -->

			</div>
		</div>
	</div><!-- end of fp lists -->

	<div class="max-container relative"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
		<div class="fp-pagination flex items-center">
			<button data-arrow="prev" class="BttnPrev"><i class="ai-font-arrow-b"></i></button>
			<div class="default-button">
				<a href="#">
					<span>view more +</span>
				</a>
			</div>
			<button data-arrow="next" class="BttnNext"><i class="ai-font-arrow-b"></i></button>
		</div>
	</div>
</section><!-- end of featured properties -->

<section id="hp-testimonials" class="relative ">
	
	<div class="max-container relative flex justify-end has-after">

		<div class="testimonials-container relative">

			<div class="testimonials-title"  data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<div class="default-title">
					<h2>
						client
						<span>testimonials</span>
					</h2>
				</div>

				<div class="default-button">
					<a href="#">
						<span>view more +</span>
					</a>
				</div>
			</div><!-- end of testimonials title -->


			<div class="testimonials-slider w-100"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<div class="testi-lists splide">

					<div class="splide__track">

						<div class="splide__list">

							<div class="splide__slide testi-list">
								<p>We can’t thank Agent enough for helping us find our dream home in Sample City. It’s exactly what we dreamed it would be – and we didn’t go over our budget! Agent’s local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable.Thank you so much, Agent!</p>
								<h3>Jane doe</h3>
							</div>

						</div>
					</div>

				</div>
			</div><!-- end of testimonials slider -->


		</div><!-- end of testimonials container -->
	</div>
</section><!-- end of testimonials -->

<section id="hp-newsletter-blog" class="relative overflow-hidden has-after">
	<div class="max-container relative flex">

		<div class="newsletter-content"  data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">

			<div class="default-title default-title-inverted">
				<h2>
					Movit
					<span>newsletter</span>
				</h2>
			</div>

			<p>In today’s real estate market, selling and buying a home requires advanced knowledge of online as well as traditional marketing platforms. Just having a real estate license and listing a home on the MLS is not enough – you want an agent who has their ear to the ground when it comes to market trends, a deep understanding of the communities they serve, and the ability to think outside the box. As part of the ABC Brokerage team, our agents’ skills go far beyond closing deals.</p>

			<div class="default-button">
				<a href="#">
					<span>view more +</span>
				</a>
			</div>
		</div><!-- end of news letter content -->

		<div class="newsletter-blog-wrap relative has-after has-before"  data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
			<div class="blog-lists relative">

				<div class="blog-list flex items-center">
					<div class="blog-img">
						<a href="#" class="block relative w-100">
							<canvas width="341" height="326" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/blog-1.jpg" alt="Tell Your Agent Everything" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</a>
					</div>
					<divv class="blog-content">
						<h3>Tell Your Agent Everything</h3>
						<p>You don’t want any surprises; neither does your agent. Let them know upfront about any financial issues on your credit report.</p>
						<div class="default-button">
							<a href="#">
								<span>read more +</span>
							</a>
						</div>

					</divv>
				</div><!-- end of blog list -->
				<div class="blog-list flex items-center">
					<div class="blog-img">
						<a href="#" class="block relative w-100">
							<canvas width="341" height="326" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/blog-2.jpg" alt="Make Lists:" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</a>
					</div>
					<divv class="blog-content">
						<h3>Make Lists:</h3>
						<p>Write out a list of the things that you want and a list of the things that you need in a new home. Share this list with your agent so that they can... better </p>
						<div class="default-button">
							<a href="#">
								<span>read more +</span>
							</a>
						</div>

					</divv>
				</div><!-- end of blog list -->
				<div class="blog-list flex items-center">
					<div class="blog-img">
						<a href="#" class="block relative w-100">
							<canvas width="341" height="326" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]') ?>/images/blog-3.jpg" alt="Speaking with an Agent" class="block absolute left-0 top-0 object-fit-cover object-position-center w-100 h-100" width="762" height="408">
						</a>
					</div>
					<divv class="blog-content">
						<h3>Speaking with an Agent</h3>
						<p>An agent for first-time homebuyers is an invaluable asset. They can help you navigate the process when you are unsure of what to do next...</p>
						<div class="default-button">
							<a href="#">
								<span>read more +</span>
							</a>
						</div>

					</divv>
				</div><!-- end of blog list -->



			</div>
		</div><!-- end of newsletter-blog -->



	</div>
</section>

<?php get_footer(); ?>
