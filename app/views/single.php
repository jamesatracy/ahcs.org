<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->prepend("css");
echo Html::stylesheet($this->url("/assets/css/posts.css"));
$this->end();

$pageHeader = get_post_meta(get_the_ID(), "pageHeader", true);
if($pageHeader) {
  $this->pageHeader = $pageHeader;
} else {
  $this->pageHeader = $this->title;
}
?>

<?php $this->define("content"); ?>
<?php
  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>

    <article class="post">

      <!-- Display the date (November 16th, 2009 format) -->
      <small><?php the_time('F jS, Y') ?></small>


      <!-- Display the Post's content in a div box. -->
      <div class="entry">
       <?php the_content(); ?>
      </div>

      <!-- Display a comma separated list of the Post's Categories. -->
      <p class="postmetadata">Posted in <?php the_category(', '); ?></p>

    </article>
<?php endwhile; ?>
<?php $this->end(); ?>