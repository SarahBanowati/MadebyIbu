<?php
require_once "core/controller.php";
require_once "controller/homecontroller.php";

$app = new HomeController();
$app->index();