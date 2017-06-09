<?php

// require_once('./components/practice/practice.component.php');
// $c = new PracticeComponent;
// echo $c->title;


$base = array('path'=>'/', 'component'=>'app', 'title'=>'Welcome Home');
$coreFramework = array('path'=>'framework', 'component'=>'framework', 'title'=>'coreFramework');
$design = array('path'=>'design', 'component'=>'design', 'title'=>'airDesign (CSS3 & JS)');
$rest = array('path'=>'api/rest', 'component'=>'rest', 'title'=>'airDesign (CSS3 & JS)');
$templates = array('path'=>'store/templates', 'component'=>'templates', 'title'=>'Templates (coreframework)');

$softwares = array('path'=>'softwares', 'component'=>'suite', 'title'=>'Softwares | Speed up your workflow');
$about = array('path'=>'about', 'redirectTo'=>BaseUrl);
$contact = array('path'=>'contact', 'component'=>'contact', 'title'=>'Get In Touch');

$account = array('path'=>'account', 'component'=>'account', 'title'=>'Profile', 'auth'=>[true,'account/login']);
$loginPage = array('path'=>'account/login', 'component'=>'login','title'=>'Please Login');
$logout = array('path'=>'account/logout', 'component'=>'logout');

 $router = CORE::getInstance('Router');

 $router->setRouter(
                    $base,
                    $design,
                    $coreFramework,
                    $rest,
                    $templates,
                    $softwares,
                    $contact,
                    $about,
                    $account,
                    $loginPage,
                    $logout
                  );



?>
