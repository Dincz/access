<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->
<div id="sitemapsection">
	<div class="hero_section d-flex align-items-center justify-content-center">
		<h1 class="scrollTriggerp-3 text-center">Site Map</h1>
	</div>
	<!-- hero section  -->
	<div class="hero_section_1 d-flex flex-wrap-reverse mb-5">
		<div class="body d-flex flex-wrap align-items-start col-12">
			<div class="box col-12 col-sm-12 sitemap-link">
				<h2><a href="<?php echo  base_url() ?>">Home</a></h2>
				<h2><a href="<?php echo base_url() ?>aboutus">About Us</a></h2>
				<h2><a href="<?php echo base_url() ?>blog">Blog</a></h2>
				<h2><a href="<?php echo base_url() ?>blog">Service</a></h2>
				<ul class="service-li">
					<li><a href="<?php echo base_url() ?>website-design-and-development">
							<h3>Website design and development</h3>
						</a></li>
					<li><a href="<?php echo base_url() ?>best-seo-company-in-Mumbai">
							<h3>Search Engine Optimization (SEO)</h3>
						</a></li>
					<li><a href="<?php echo base_url() ?>social-media-marketing-agency-near-me">
							<h3>Social Media Marketing (SMM)</h3>
						</a></li>
					<li><a href="<?php echo base_url() ?>ppc-service-in-mumbai">
							<h3>Pay Per Click (PPC)</h3>
						</a></li>
					<li><a href="<?php echo base_url() ?>video-marketing-agency">
							<h3>Video Creation</h3>
						</a></li>
				</ul>
				<h2><a href="<?php echo base_url() ?>contact">Contact Us</a></h2>
			</div>
		</div>
	</div>
</div>
<!-- footer start -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->