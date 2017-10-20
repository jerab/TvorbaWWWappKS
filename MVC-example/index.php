<?php

if(!session_id()) {
	session_start();
}

require 'config.inc';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
$controller->check_step();

$view->output_html();
