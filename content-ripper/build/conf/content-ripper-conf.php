<?php
// This file generated by Propel 1.6.5-dev convert-conf target
// from XML runtime conf file C:\!Work\Projects\Content ripper\Content-ripper\content-ripper\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'content-ripper' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=content-ripper',
        'user' => 'root',
        'password' => 'vertrigo',
      ),
    ),
    'default' => 'content-ripper',
  ),
  'generator_version' => '1.6.5-dev',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-content-ripper-conf.php');
return $conf;