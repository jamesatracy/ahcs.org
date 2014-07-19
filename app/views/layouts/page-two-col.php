<?php 
/**
 * Two column page layout.
 */
?>

<?php $this->define("content"); ?>
<div class="container content">
	<div class="content">
		<h1 class="page-header"><?php echo $this->pageHeader; ?></h1>
		<div class="row">
			<div class="col-xs-8">
				<?php $this->render("content"); ?>
			</div>
			<aside id="right-rail" class="col-xs-4" role="complementary">
				<?php $this->display("/partials/right-rail"); ?>
			</aside>
		</div>
	</div>
</div>
<?php $this->end(); ?>
