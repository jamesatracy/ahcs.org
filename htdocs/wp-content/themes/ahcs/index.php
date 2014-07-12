<?php 
require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

the_post();

if(is_home()) {
  createView("home", array());
} else if(is_page()) {
  createView("page", array(
    "title" => get_the_title()
  ));
}
?>