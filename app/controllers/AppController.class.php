<?php
/**
 * @author James Tracy <james.a.tracy@gmail.com>
 * @copyright 2013
 */

Backbone::uses("View");

class AppController
{
	public function index($request)
	{
		return View::create($request, "home", array(
			"title" => ""
		));
	}
	
	public function patientAndVistors($request)
	{
		return View::create($request, "home", array(
			"title" => "Patient &amp; Visitor Services"
		));
	}
}
?>