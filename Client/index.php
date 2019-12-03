<?php

require __DIR__ . '/../source/Jacwright/RestServer/RestServer.php';
require 'ClientControlleur.php';

$server = new \Jacwright\RestServer\RestServer('debug');
$server->addClass('ClientControlleur');
$server->handle();
