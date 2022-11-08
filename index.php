<?php
define("PAGE_DIR", dirname(__FILE__) . "/pages");

require_once "FrontController.php";
require_once "Database.php";

/**
 * Initialize dispatcher
 */
FrontController::createInstance()->dispatch();
