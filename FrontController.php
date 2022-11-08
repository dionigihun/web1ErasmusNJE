<?php

/**
 * Class FrontController
 */
class FrontController {
    public static function createInstance() {
        if (!defined("PAGE_DIR")) {
            exit("Critical error: Cannot proceed without PAGE_DIR.");
        }
        $instance = new self();
        return $instance;
    }

    public function dispatch() {
        $page = !empty($_GET["page"]) ? $_GET["page"] : "home";
        $action = !empty($_GET["action"]) ? $_GET["action"] : "index";
        $class = ucfirst($page) . "Actions";

        $file = PAGE_DIR . "/" . $page . "/" . $class . ".php";

        if (!is_file($file)) {
            header("HTTP/1.0 404 Not Found");
            self::show('layouts/404');
            exit;
        }

        require_once $file;

        $actionMethod = "do" . ucfirst($action);
        $controller = new $class();

        if (!method_exists($controller, $actionMethod)) {
            exit("Page not found");
        }

        /**
         * Initialize DB connection
         */
        Database::initDB();

        $controller->$actionMethod();

        exit(0);
    }

    /**
     * @return bool
     */
    public static function is_logged_in() {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $page
     * View helper for FrontController class
     */
    public static function show($page) {

        $view = PAGE_DIR . "/" . $page . ".php";

        if (!is_file($view)) {
            exit("No view found");
        }

        require_once $view;
    }

    /**
     * @param string $message
     * @param string $type
     * Show toast alerts on pages
     */
    public static function alert($message = '', $type = 'success') {
        $classes = '';
        switch ($type) {
            case 'success':
                $classes = 'green';
                break;
            case 'error':
                $classes = 'red';
                break;
        }
        echo "<script>document.addEventListener('DOMContentLoaded', function() {M.toast({html: '".$message."', classes: '". $classes ."'})})</script>";
    }
}