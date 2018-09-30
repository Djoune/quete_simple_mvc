<?php
require __DIR__ . '/../vendor/autoload.php';
use Controller\ItemController;

$display = new ItemController();
$display->index();

?>