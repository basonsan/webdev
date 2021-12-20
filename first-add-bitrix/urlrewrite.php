<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/retraining/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/retraining/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/courses/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/courses/index.php',
    'SORT' => 100,
  ),
  40 => 
  array (
    'CONDITION' => '#^/reports/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/reports/index.php',
    'SORT' => 100,
  ),
  41 => 
  array (
    'CONDITION' => '#^/results/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/results/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/team/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/team/index.php',
    'SORT' => 100,
  ),
  51 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  53 => 
  array (
    'CONDITION' => '#^/case/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/case/index.php',
    'SORT' => 100,
  ),
  52 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog2/index.php',
    'SORT' => 100,
  ),
);
