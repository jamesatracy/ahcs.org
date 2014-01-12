<div class="container content">
	<section id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo $this->url("/assets/images/hero-photo-1-fixed.jpg"); ?>" alt="Appling Hero Photo 1"/>
			</div>
			<div class="item">
				<img src="<?php echo $this->url("/assets/images/hero-photo-2-fixed.jpg"); ?>" alt="Appling Hero Photo 2"/>
			</div>
			<div class="item">
				<img src="<?php echo $this->url("/assets/images/hero-photo-3-fixed.jpg"); ?>" alt="Appling Hero Photo 3"/>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		<div class="carousel-caption">
			<h1>Quality Care Close to Home</h1>
		</div>

		<div id="info-boxes">
			<div class="row">
				<div class="col-xs-3">
					<div class="hero-col">
						<h3>Patient &amp; Visitor Services</h3>
						<img src="<?php echo $this->url("/assets/images/patient-services.jpg"); ?>" alt="Patient and Visitor Services" width="180" height="150"/>
						<p class="desc">Discover our amenities for patients and visitors.</p>
						<p><a href="<?php echo $this->urlAlias("patient-visitor-services"); ?>" class="btn btn-secondary">Click for More</a></p>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="hero-col">
						<h3>Physician Directory</h3>
						<img src="<?php echo $this->url("/assets/images/physicians.jpg"); ?>" alt="Physician Directory" width="180" height="150"/>
						<p class="desc">Learn about our services and world class physicians.</p>
						<p><a href="<?php echo $this->urlAlias("physician-services-directory"); ?>" class="btn btn-secondary">Click for More</a></p>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="hero-col">
						<h3>Pavilion &amp; Senior Care</h3>
						<img src="<?php echo $this->url("/assets/images/senior-care.jpg"); ?>" alt="Pavillion and Senior Care" width="180" height="150"/>
						<p class="desc">Explore the pavilion and senior care center.</p>
						<p><a href="<?php echo $this->urlAlias("pavilion-senior-care"); ?>" class="btn btn-secondary">Click for More</a></p>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="hero-col">
						<h3>Maps &amp; Directions</h3>
						<img src="<?php echo $this->url("/assets/images/map.jpg"); ?>" alt="Map and Directions" width="180" height="150"/>
						<p class="desc">Get directions to our location and explore our facility.</p>
						<p><a href="<?php echo $this->urlAlias("contact"); ?>" class="btn btn-secondary">Click for More</a></p>
					</div>
				</div>
			</div>
		</div>
	 </section>
</div>