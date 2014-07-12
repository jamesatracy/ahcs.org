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
				<?php echo the_content(); ?>
			</div>
			<div id="right-rail" class="col-xs-4">
				<?php $this->display("/partials/right-rail"); ?>
			</div>
		</div>
	 </section>
</div>
<?php $this->end(); ?>
