<?php
/**
 * Perform all of your bootstrap operations here in this file.
 * That includes loading Routers and other resources (database connections, etc.).
 */

// Define routes
Router::get("/", "/controllers/AppController@index")->alias("home");
Router::get("/patient-visitor-services/", "View@patient-visitor-services")->alias("patient-visitor-services");
Router::get("/physician-services-directory/", "View@physician-services-directory")->alias("physician-services-directory");
Router::get("/about/", "View@about")->alias("about");
Router::get("/job-opportunities/", "View@jobs")->alias("jobs");
Router::get("/contact/", "View@contact")->alias("contact");
Router::get("/pavilion-senior-care/", "View@pavilion-senior-care")->alias("pavilion-senior-care");
Router::get("/coming-soon/", "View@coming-soon")->alias("coming-soon");
Router::get("/site-map/", "View@site-map")->alias("site-map");

// 404 Error
function handle404($response) {
	Backbone::uses("View");
	$response->body(View::create(Backbone::$request, "404")->body());
}
Events::bind("response.404", "handle404");

// Pull in Exoskeleton
//require_once(ABSPATH.'exoskeleton/boot.php');

// Start application
//Exoskeleton::start('APPLING');
?>
