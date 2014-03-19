<header id="main-page-header" role="banner">
	<div class="container">
		<div class="header-inner">
			<div class="pull-left">
				<a href="<?php echo $this->urlAlias("home"); ?>">
					<img id="logo" src="<?php echo $this->url("/assets/images/app_logo_188x120.png"); ?>" width="188" height="120" alt="Appling HealthCare System"/>
				</a>
			</div>
			<div class="pull-right">
				<div class="header-icons">
					<p class="icons">
						<a href="https://srvahcsptweb.myahcs.org" title="Hospital Patient Portal" target="_blank"><img class="hospital-portal" src="<?php echo $this->url("/assets/images/hospital-portal-icon.jpg"); ?>" width="40" height="56" alt="Hospital Patient Portal Link"/></a>
						<a href="https://srvahcsptweb.myahcs.org" target="_blank"><small>Hospital Portal</small></a>
					</p>
					<p class="icons">
						<a href="<?php echo $this->urlAlias('coming-soon'); ?>" title="Clinic Patient Portal -- Coming Soon!"><img class="clinic-portal" src="<?php echo $this->url("/assets/images/patient-portal-icon.jpg"); ?>" width="53" height="56" alt="Clinic Patient Portal Link"/></a>
						<a href="<?php echo $this->urlAlias('coming-soon'); ?>"><small>Clinic Portal</small></a>
					</p>
				</div>
			</div>
			<div class="pull-right">
				<div class="header-lang">
					<p><a href="<?php echo $this->urlAlias('home'); ?>">Home</a> | 912-367-9841</p>
					<div id="google_translate_element"></div>
				</div>
			</div>
		</div>
	</div>
</header>
