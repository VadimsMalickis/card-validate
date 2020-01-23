<?php
ini_set("display_errors", 1);
error_reporting("E_ALL");
require_once(__DIR__ . '/application/autoloader.php');
try {
    $application = new \vendor\Application();
    $application->run();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}
