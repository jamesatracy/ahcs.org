<?php
/**
 * Template Name: One Column Page
 *
 * @package WordPress
 * @subpackage ahcs
 * @since AHCS 1.0
 */

require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

the_post();

createView("page-one-col", array(
  "title" => get_the_title()
));
?>