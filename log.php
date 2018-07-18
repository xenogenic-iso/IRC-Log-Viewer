<?php

$location = $_GET['l'];
$url = $_SERVER['REQUEST_URI'];

require 'src/includes/header.php';
require 'src/classes/create_logtitle.php';
require 'src/classes/parselog.php';


$title = new PageTitle($url);
$log = new ParseLog($location);

require 'src/views/title.view.php';
require 'src/views/log.view.php';

require 'src/includes/footer.php';