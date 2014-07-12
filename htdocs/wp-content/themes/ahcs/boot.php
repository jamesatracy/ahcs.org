<?php
// Framework path constant. Points to the backbone core.
define('FRAMEWORK', ABSPATH."../backbone/");
// Application path constant. Points to the application code.
define('APPPATH', ABSPATH."../app/");
// View path. Semicolon delimited list of paths to search for views.
// Must be relative to the abspath.
$VIEWPATH = "../app/views/";

// sanity checks
if(!defined('FRAMEWORK')) {
  echo "Backbone.php configuration error: FRAMEWORK constant not defined.";
  exit(1);
}
if(!$VIEWPATH) {
  echo "Backbone.php configuration error: \$VIEWPATH not defined.";
  exit(1);
}

// load the framework
require_once(FRAMEWORK."Backbone.class.php");

// Environment
$ENV = 'development';
if($_SERVER['SERVER_NAME'] === 'www.ahcs.org') {
  $ENV = 'production';
}
?>