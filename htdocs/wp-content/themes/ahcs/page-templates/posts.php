<?php
/**
 * Template Name: Posts
 *
 * @package WordPress
 * @subpackage ahcs
 * @since AHCS 1.0
 */

require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

createView("posts", array(
  "title" => get_the_title()
));
?>