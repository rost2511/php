<?php

define('CLASSES_DIR', __DIR__ . '/classes/');
require_once CLASSES_DIR . 'Requests.php';

Requests::handleRequest();
