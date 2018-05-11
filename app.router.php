<?php


$appRoutes = [
  ['path'=>'/', 'component'=>'app', 'title'=>'Welcome Home'],

['path'=>'framework', 'component'=>'framework', 'title'=>'coreFramework (PHP 7.2+)'],
['path'=>'design', 'component'=>'design', 'title'=>'airDesign (CSS3 & JS)'],
['path'=>'media', 'component'=>'media', 'title'=>'airMedia (CSS3 & JS)'],

  ['path'=>'api/rest', 'component'=>'rest', 'title'=>'airREST (PHP 7.2+)'],
  ['path'=>'api/cqured', 'component'=>'cqured', 'title'=>'cQured Web-API (PHP 7.2+)'],

  ['path'=>'store/templates', 'component'=>'templates', 'title'=>'Templates (coreframework)'],

   ['path'=>'softwares', 'component'=>'suite', 'title'=>'Softwares | Speed up your workflow'],
  ['path'=>'about', 'redirectTo'=>BaseUrl],
['path'=>'contact', 'component'=>'contact', 'title'=>'Get In Touch'],

['path'=>'account', 'component'=>'account', 'title'=>'Profile', 'auth'=>[true,'account/login']],
['path'=>'account/login', 'component'=>'login','title'=>'Please Login'],
['path'=>'account/logout', 'component'=>'logout']
];


 $router = CORE::getInstance('Router');

 $router->setRouter($appRoutes);
