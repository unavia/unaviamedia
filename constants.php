<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

//Require the custom constants file (not committed for security)
require_once("/var/www/custom_constants.php");

//PHP Paths
define("HTML_ROOT",		"/var/www/html");
define("INCLUDES",		HTML_ROOT . "/include");
define("FRAGMENTS",		HTML_ROOT . "/fragments");
define("APPLICATION",	HTML_ROOT . "/Application");
define("MVC",			APPLICATION . "/MVC");

//Common utilities
define("UTILITIES",			INCLUDES . "/utilities.php");
define("AUTOLOADER",		HTML_ROOT . "/vendor/autoload.php");

//HTML Paths
define("STYLES",	"/dist/css");
define("SCRIPTS",	"/dist/js");
define("IMAGES",	"/dist/images");
define("ICONS",		"/dist/icons");

//Common fragments
define("FRAGMENT_HEADER",	FRAGMENTS . "/header.php");
define("FRAGMENT_FOOTER",	FRAGMENTS . "/footer.php");

//MVC Constants
define("ROUTES",				MVC . "/Route.php");
define("CONTROLLERS",			MVC . "/Controllers");
define("MODELS",				MVC . "/Models");
define("VIEWS",					MVC . "/Views");
define("CONTROLLER_FUNCTIONS",	HTML_ROOT . "/controller_functions");


//Static Page Title
define("PAGE_TITLE",	"&ensp;|&ensp;UnaviaMedia");
//Dynamic Page Title
$PAGE_TITLE = "";

//Common links
define("URL_HOME",	"/");
define("URL_ABOUT",	"/About");
define("URL_BLOG",	"/Blog");

/**
 * Dump contents of a variable to screen
 * @param  object $var Variable to debug
 */
function debug($var) {
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}
