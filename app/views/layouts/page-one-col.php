<?php 
/**
 * One column page layout.
 */
?>

<?php $this->define("content"); ?>
<div class="container content">
	<div class="content">
		<h1 class="page-header"><?php echo $this->pageHeader; ?></h1>
		<?php $this->render("content"); ?>
	</div>
</div>
<?php $this->end(); ?>