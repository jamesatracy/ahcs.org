<h3>Appling News</h3>
<?php 
global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 5", OBJECT );

foreach($results as $post) {
?>
  <article>
    <header>
      <p><strong><?php echo $post->post_title; ?></strong> <em><?php echo date("m/d/Y", strtotime($post->post_date)); ?></em></p>
      <?php
      $content = $post->post_content;
      if(strlen($content) > 500) {
        $content = substr($content, 500) . "...";
      }
      ?>
      <p><?php echo $content; ?></p>
  </article>
<?php
}
?>