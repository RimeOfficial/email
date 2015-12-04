<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| AWS SDK
|
| http://aws.amazon.com/sdk-for-php/
|--------------------------------------------------------------------------
*/

$config = [
  'navbar' => [
    'left' => [
      'stats'         => '<span class="glyphicon glyphicon-stats"></span>',
      'message'       => '<span class="glyphicon glyphicon-envelope"></span>',
      's3'            => '<span class="glyphicon glyphicon-open-file"></span>',
      'autoresponder' => 'Autoresponder',
      'campaign'      => 'Campaign',
      'transaction'   => 'Transaction',
    ],
    'right' =>[
      'settings'      => 'Settings',
      'auth/sign-out' => 'Sign out',
    ]
  ],
  'nav_tab' => [
    's3' => [
      'object'   => 'Objects',
      'upload'  => 'Upload',
    ],
    'autoresponder' => [
      'message' => 'Messages',
      'lists'   => 'Lists',
      'history' => 'History',
    ],
    'campaign' => [
      'message' => 'Messages',
      'lists'   => 'Lists',
      'history' => 'History',
    ],
    'transaction' => [
      'message' => 'Messages',
      'label'   => 'Labels',
      'history' => 'History',
    ]
  ],
];