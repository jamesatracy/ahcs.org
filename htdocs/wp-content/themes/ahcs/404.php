<?php
/**
 * The template for displaying 404 page
 *
 * @package WordPress
 * @subpackage ahcs
 * @since AHCS 1.0
 */

require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

the_post();

createView("404", array(
  "title" => "Page Missing",
  "pageHeader" => "Oops! Page Missing"
));
?>