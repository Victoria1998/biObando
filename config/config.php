<?php

$config = new myConfig();
$config->setPath('C:/xampp/htdocs/biobando/');

$config->setDrive('postgres');
$config->setHost('localhost');
$config->setUser('5432');
$config->setPassword('12345');
$config->setDbname('biobando');
$config->setHash('md5');

$config->setUrl('http://localhost/biobando/www/');