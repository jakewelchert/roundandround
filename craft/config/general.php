<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  'localhost' => array(
    'devMode' => true,
    'siteUrl' => 'http://localhost:8888/roundandround/html/',
    'environmentVariables' => array(
      'basePath' => 'file:///Applications/MAMP/htdocs/roundandround/html/index.php',
      'baseUrl'  => 'http://localhost:8888/roundandround/html/',
    ),
    'testToEmailAddress' => 'jakewelchert@gmail.com',
  ),

  // Use IP address of your droplet below
  '198.211.114.192/' => array(
    'siteUrl' => 'http://198.211.114.192/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://198.211.114.192/',
    )
  )
);
