<?php

use CoreComponent as Component;

Component::init([
    'scriptUrls' => ['./app/app.script.js']
]);

class AppComponent {
    function init(){
      echo 'hello';
    }
}



?>
