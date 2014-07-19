<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo ($this->title ? $this->title." | Appling HealthCare" : "Appling HealthCare | Baxley Georgia Medical Facility"); ?></title>
	<meta name="description" content="Appling HealthCare System, located in Baxley, Georgia is a licensed, non-profit acute care medical facility.">
	<meta name="generator" content="Backbone.php <?php echo Backbone::version(); ?>">
	<meta name="google-translate-customization" content="d403ddc759a75c51-3d894c6e059b2dc7-g23ce57a165b6e1fe-27"></meta>
	<link rel="shortcut icon" href="<?php echo $this->url("favicon.ico"); ?>" />
	<?php echo Html::stylesheet($this->url("/assets/lib/bootstrap/3.0.2/css/bootstrap.min.css")); ?>
	<?php echo Html::stylesheet($this->url("/assets/css/shared.css")); ?>
	<?php $this->render("css"); ?>
    <!--[if IE ]><script src="<?php echo $this->url("/assets/lib/html5shiv/html5shiv.js"); ?>"></script><![endif]-->
    <!--[if IE ]><script src="<?php echo $this->url("/assets/lib/respond/1.3.0/respond.min.js"); ?>"></script><![endif]-->
  </head>
  <body class="no-js">
	<script>document.body.className = 'js'</script>
	<?php $this->display("/partials/header"); ?>
	<?php $this->display("/partials/navigation"); ?>
	<main id="content" role="main">
		<?php $this->render("banner"); ?>
		<?php $this->render("content"); ?>
	</main>
	<footer>
		<?php $this->display("/partials/footer"); ?>
	</footer>
	<?php $this->render("scripts"); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-44200127-3', 'ahcs.org');
	  ga('send', 'pageview');
	</script>
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>
</html>
