<?php

$config = new myConfig();
$config->setPath('C:/xampp/htdocs/biobando/');

$config->setDrive('mysql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setUser('postgres');
$config->setPassword('123');
$config->setDbname('dbagenda');
$config->setHash('md5');

$config->setUrl('http://localhost/biobando/www/');