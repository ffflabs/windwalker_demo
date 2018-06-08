<?php

require_once './vendor/autoload.php';

use Windwalker\Edge\Edge;
use Windwalker\Edge\Loader\EdgeFileLoader;

$paths = [__DIR__ . '/templates'];

$edge = new Edge(new EdgeFileLoader($paths));

// This will load `./template/index.edge.php` file as template
echo $edge->render('index', array('title' => 'Hello', 'content' => 'Everyone'));
