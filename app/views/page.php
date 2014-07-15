<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$pageHeader = get_post_meta(get_the_ID(), "pageHeader", true);
if($pageHeader) {
  $this->pageHeader = $pageHeader;
} else {
  $this->pageHeader = $this->title;
}
?>

<?php $this->define("content"); ?>
<?php echo the_content(); ?>
<?php $this->end(); ?>