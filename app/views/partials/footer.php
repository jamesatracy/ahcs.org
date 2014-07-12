<footer role="contentinfo">
	<section id="content-footer" class="container content">
		<div class="row">
			<div class="col-xs-4 first">
				Appling HealthCare System
			</div>
			<div class="col-xs-4 second">
				163 E. Tollison St Baxley, GA 31515
			</div>
			<div class="col-xs-4 third">
				912-367-9841
			</div>
		</div>
	</section>
	 
	<section id="logo-footer" class="content">
		<img src="<?php echo $this->url("/assets/images/app_logo_125x80.jpg"); ?>" width="125" height="80" alt="Appling HealthCare Logo"/>
	</section>
	
	<nav id="nav-footer" class="container content" role="navigation">
		<p class="nav-menu">
			<a href="<?php echo $this->url("/"); ?>">Home</a> | 
			<a href="<?php echo $this->url("patient-visitor-services"); ?>">Patient &amp; Visitors</a> | 
			<a href="<?php echo $this->url("physician-services-directory"); ?>">Pysicians &amp; Services</a> | 
			<a href="<?php echo $this->url('coming-soon'); ?>">Billing &amp; Insurance</a> | 
			<a href="<?php echo $this->url("about"); ?>">About Appling</a> | 
			<a href="<?php echo $this->url("jobs"); ?>">Job Opportunities</a> | 
			<a href="<?php echo $this->url("contact"); ?>">Contact Appling</a> | 
			<a href="<?php echo $this->url('site-map'); ?>">Site Map</a>
		</p>
		<p class="nav-copyright">Copyright &copy; <?php echo date("Y"); ?> Appling HealthCare System | Powered by <a href="http://www.azaleahealth.com" target="_blank">Azalea Health</a></p>
	</nav>
	
	<section id="associations-footer" class="container content">
		<p class="associations"><img src="<?php echo $this->url("/assets/images/associations.jpg"); ?>" alt="DNV Accredited Hospital. Member of Home Town Health" /></p>
	</section>
</footer>
