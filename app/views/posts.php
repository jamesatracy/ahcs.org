<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-one-col");

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

<!-- Start the Loop. -->
<?php $the_query = new WP_Query('posts_per_page=10'); ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<article class="post">


<!-- Display the Title as a link to the Post's permalink. -->

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


<!-- Display the date (November 16th, 2009 format) -->

<small><?php the_time('F jS, Y') ?></small>


<!-- Display the Post's content in a div box. -->

<div class="entry">
 <?php the_content(); ?>
</div>


<!-- Display a comma separated list of the Post's Categories. -->

<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</article>


<!-- Stop The Loop (but note the "else:" - see next line). -->

<?php endwhile; else: ?>


<!-- The very first "if" tested to see if there were any Posts to -->
<!-- display.  This "else" part tells what do if there weren't any. -->
<p>Sorry, no posts matched your criteria.</p>


<!-- REALLY stop The Loop. -->
<?php endif; ?>

<?php $this->end(); ?>