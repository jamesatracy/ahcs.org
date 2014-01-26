<?php 
global $ENV;
$this->extend("/layouts/layout");

$this->prepend("css");
echo Html::stylesheet($this->url("/assets/css/home.css"));
$this->end();
?>

<?php 
$ext = 'js';
if($ENV === 'production') {
	$ext = 'min.js';
}
$this->prepend("scripts"); ?>
<script src="<?php echo $this->url("/assets/js/carousel.".$ext); ?>"></script>
<?php $this->end(); ?>

<?php $this->define("banner"); ?>
<?php $this->display("/partials/home-carousel"); ?>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<div class="container content">
	 <section id="home-content" class="content">
		<h1 class="page-header">Welcome to Appling HealthCare</h2>
		<div class="row">
			<div class="col-xs-8">
				<p>We welcome you to our website and hope it will provide you with a thorough overview of our facility, introduction to our physicians and staff, as well as information about our outstanding services and programs.</p>
				<p>Appling is a compassionate, family-oriented environment. Every member of our team is committed to meeting the needs of not only our patients but their families as well.</p>
				<p>On behalf of the entire team at Appling HealthCare System, please accept my best wishes for your good health.  We take pride in offering you high quality and compassionate care, and we appreciate your decision to entrust your care to us.  If there is anything we can do to make your stay better, please let us know.</p>
				
				<h3>Online Bill Pay Coming Soon!</h3>
				<p>You will soon be able to easily pay your medical bills from anywhere with a click of a button</p>
				<p><a href="<?php echo $this->urlAlias('contact'); ?>">Contact us to learn more</a>.</p>
			</div>
			<div id="right-rail" class="col-xs-4">
				<?php $this->display("/partials/right-rail"); ?>
			</div>
		</div>
	 </section>
</div>
<?php $this->end(); ?>