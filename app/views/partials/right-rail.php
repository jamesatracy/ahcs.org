<h3>Appling News</h3>
<?php 
$the_query = new WP_Query('posts_per_page=5');

if ($the_query->have_posts()) {
  while ($the_query->have_posts()) {
    $the_query->the_post();
?>
  <article>
    <header>
      <p>
        <strong><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a></strong><br/><em><?php echo date("m/d/Y", strtotime(get_the_date())); ?></em>
      </p>
      <p><?php echo the_excerpt(); ?></p>
  </article>
<?php
  }
?>
  <p><a href="<?php echo $this->url('news'); ?>">Read all news</a></p>
<?php
} else {
?>
  <p>None.</p>
<?php
}
?>