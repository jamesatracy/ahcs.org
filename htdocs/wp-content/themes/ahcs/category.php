<?php 
require(get_template_directory()."/boot.php");
require(get_template_directory()."/view.php");

createView("posts", array(
  "title" => "Category: ".single_cat_title('', false)
));
?>