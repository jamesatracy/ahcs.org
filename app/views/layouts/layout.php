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
      <script src="<?php echo $this->url("/assets/lib/html5shiv/html5shiv.js"); ?>"></script>
      <script src="<?php echo $this->url("/assets/lib/respond/1.3.0/respond.min.js"); ?>"></script>
  </head>
  <body class="no-js">
	<script>document.body.className = 'js'</script>
	<?php $this->display("/partials/header"); ?>
	<?php $this->display("/partials/navigation"); ?>
	<div id="content">
		<?php $this->render("banner"); ?>
		<?php $this->render("content"); ?>
	</div>
	<footer>
		<?php $this->display("/partials/footer"); ?>
	</footer>

	<?php $this->render("scripts"); ?>
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>
</html>