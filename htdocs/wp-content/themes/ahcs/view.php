<?php
function sendResponse($response) {
  Events::trigger("backbone.response", $response);
  $response->header("X-Backbone-Version", BACKBONE_VERSION);
  $response->send();
}

function createView($name, $args) {
  // create the request
  $request = Request::create();
  Backbone::$request = $request;

  try {
    // create the view
    Backbone::uses("View");
    $response = View::create($request, $name, $args);
    sendResponse($response);
  } catch(Exception $e) {
    // uncaught exception
    $response = Events::trigger("backbone.exception", $request, $e);
    if($response && get_class($response) === "Response") {
      sendResponse($response);
    } else {
      // 500
      $response = Response::create(500, "")
      ->header("X-Backbone-Exception", get_class($e).": ".$e->getMessage());
      sendResponse($response);
    }
  }
}
?>