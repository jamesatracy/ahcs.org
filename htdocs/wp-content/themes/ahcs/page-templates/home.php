<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage ahcs
 * @since AHCS 1.0
 */

require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

the_post();

createView("home", array(
  "title" => get_the_title()
));
?>