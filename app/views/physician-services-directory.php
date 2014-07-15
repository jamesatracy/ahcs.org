<?php 
global $ENV;
$this->extend("/layouts/layout");
$this->extend("/layouts/page-one-col");

$this->title = "Physician &amp; Services Directory";
$this->pageHeader = "Physician &amp; Services Directory";

$this->prepend("css");
echo Html::stylesheet($this->url("/assets/css/directory.css"));
$this->end();

$ext = 'js';
if($ENV === 'production') {
	$ext = 'min.js';
}
$this->prepend("scripts"); ?>
<script src="<?php echo $this->url("/assets/js/fixed-table-headers.".$ext); ?>"></script>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<?php the_content(); ?>
<?php $this->end(); ?>
