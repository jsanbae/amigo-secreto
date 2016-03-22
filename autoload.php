<?php

// autoload function
function __autoload($class) {

	$root = dirname(dirname(__FILE__));

	// Define path to application directory
	defined('APPLICATION_PATH') || define('APPLICATION_PATH', $root . '/javier/src');

	//echo APPLICATION_PATH;

	// convert namespace to full file path
	$class = APPLICATION_PATH . '/' . str_replace('\\', '/', $class) . '.php';
//	echo $class;
	require_once($class);
}