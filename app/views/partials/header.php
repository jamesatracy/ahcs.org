<header id="main-page-header">
	<div class="container">
		<div class="header-inner">
			<div class="pull-left">
				<a href="<?php echo $this->urlAlias("home"); ?>">
					<img id="logo" src="<?php echo $this->url("/assets/images/app_logo_188x120.png"); ?>" width="188" height="120" alt="Appling HealthCare System"/>
				</a>
			</div>
			<div class="pull-right">
				<div class="header-icons">
					<p class="icons"><a href="https://srvahcsptweb.myahcs.org" title="Hospital Patient Portal" target="_blank"><img class="hospital-portal" src="<?php echo $this->url("/assets/images/hospital-portal-icon.jpg"); ?>" width="40" height="56" alt="Hospital Patient Portal"/></a>
					<a href="<?php echo $this->urlAlias('coming-soon'); ?>" title="Clinic Patient Portal -- Coming Soon!"><img class="patient-portal" src="<?php echo $this->url("/assets/images/patient-portal-icon.jpg"); ?>" width="53" height="56" alt="Clinic Patient Portal"/></a></p>
				</div>
			</div>
			<div class="pull-right">
				<div class="header-lang">
					<p><a href="<?php echo $this->urlAlias('home'); ?>">Home</a> | 912-367-9841</p>
					<div id="google_translate_element"></div><script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
						}
					</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
			</div>
		</div>
	</div>
</header>