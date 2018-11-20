<?php get_header('modern'); ?>

<!-- FULL HEIGHT VIEWPORT HERO -->
<div class="viewport-banner">
	<div class="viewport-banner-title">
		<h1>A surgical clinic serving Atlantic Canada</h1>
	</div>
	<a href="#services"><img class="down-arrow" src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" /></a>
</div>
<!-- FULL HEIGHT VIEWPORT HERO -->

<!--SERVICES-->
<div id="services" class="clearfix">
	<div class="service">
		<img src="<?php echo get_template_directory_uri(); ?>/images/ambulatory-icon.png" />
		<h2>Ambulatory<br>Procedures</h2>
		<ul class="more-content">
			<li>Oral</li>
			<li>Orthopedic</li>
			<li>Plastics</li>
			<li>ENT</li>
			<li>General Surgeries</li>
		</ul>
	</div>
	<div class="service">
		<img src="<?php echo get_template_directory_uri(); ?>/images/ortho-icon.png" />
		<h2>Orthopedic<br>Surgery</h2>
		<ul class="more-content">
			<li>Knee Scopes</li>
			<li>Shoulder Surgery​</li>
			<li>Chevron Osteotomy​</li>
			<li>Forefoot Reconstruction​</li>
			<li>Toenail Removal​</li>
			<li>Carpal Tunnel Release​</li>
			<li>ACL Reconstruction</li>
		</ul>
	</div>
	<div class="service">
		<img src="<?php echo get_template_directory_uri(); ?>/images/maxillo-icon.png" />
		<h2>Oral Maxillo<br>Facial Surgery</h2>
		<ul class="more-content">
			<li>Dental Implants</li>
			<li>Wisdom Teeth Extraction</li>
		</ul>
	</div>
	<div class="service">
		<img src="<?php echo get_template_directory_uri(); ?>/images/plastics-icon.png" />
		<h2>Plastic<br>Surgery</h2>
		<ul class="more-content">
			<li>Scar Revision</li>
			<li>Breast Augmentation</li>
			<li>Breast Reduction</li>
			<li>Blepharoplasty</li>
			<li>Brow Lift</li>
			<li>Botox Injection</li>
			<li>Fat Transfers</li>
			<li>Liposuction</li>
		</ul>
	</div>
	<div class="service">
		<img src="<?php echo get_template_directory_uri(); ?>/images/nose-icon.png" />
		<h2>Ear, Nose &amp;<br>Throat (ENT)</h2>
		<ul class="more-content">
			<li>Otoplasty</li>
			<li>Surgery for Snoring</li>
			<li>Cosmetic Rhinoplasty</li>
		</ul>
	</div>
</div>
<!--SERVICES-->

<!-- AOSA CALLOUT -->
<div id="aosa-section">
	<a href="https://atlanticoralsurgeryassociates.com/" target="_blank" class="aosa-link"></a>
	<div class="inner clearfix">
		<div class="aosa-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo/aosa-logo.png" alt="Atlantic Oral Surgery Associates" />
		</div>
		<div class="aosa-title">
			<h4>Atlantic Oral Surgery Associates Website &raquo;</h4>
		</div>
	</div>
</div>
<!-- /AOSA CALLOUT -->

<!--BANNER CONTAINER-->
<div id="banner-container">

	<!--IMAGES CONTAINER-->
	<div id="banner-images-container" class="clearfix">
	
		<div id="location-shot"></div>
		
		<div class="photo-gallery">
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/001.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/006.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/018.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/037.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/048.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/036.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/064.jpg') no-repeat center center scroll;"></div>
			<div style="background: url('<?php echo get_template_directory_uri(); ?>/images/slider/080.jpg') no-repeat center center scroll;"></div>
		</div>
		
	</div>
	<!--IMAGES CONTAINER-->
	
</div>
<!--BANNER CONTAINER-->

<!--MAIN CONTENT-->
<div id="main-content" class="clearfix">
	<div id="map-container">
		<iframe id="map_canvas1" width="100%" height="353" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=18+Acadia+Street+Dartmouth,+NS&amp;ie=UTF8&amp;hq=&amp;hnear=18+Acadia+St,+Dartmouth,+Nova+Scotia+B2Y+4H3&amp;ll=44.655709,-63.54958&amp;spn=0.006189,0.012982&amp;t=m&amp;z=14&amp;output=embed"></iframe>
	</div>
</div>
<!--MAIN CONTENT-->

<?php get_footer(); ?>