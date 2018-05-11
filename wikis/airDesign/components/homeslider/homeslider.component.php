<?php

class HomesliderComponent{

    private $airdesign= [];
    private $airmedia = [];
    private $coreframework = [];
    private $cqured = [];

    public $data = [];

    function constructor(){

    $this->airdesign = [
        'title'=>'Create beautiful Apps',
        'titleColor'=>'color-prim',
    'description'=>'Designers and coders alike have contributed to the beauty of the web; we can always push it further. Air Design is a unified system that combines theory, 
    resources, and tools for crafting digital experiences. ',
    'buttonText'=>'Download airDesign', 
    'buttonColor'=>'prim', 
'buttonShape'=>'ad-round',
'link'=>'https://github.com/air-Design/airDesign'];


$this->airmedia = [
    'title'=>'Creative Media Content',
    'titleColor'=>'color-yellow',
'description'=>'Create Sleek Image and Content Sliders, Carousel, Video and Audio Player specifically designed to match airDesign\'s Framework.
 Web Components for content sliders, carousel and air design\'s audio and video player ',
'buttonText'=>'Download airMedia', 
'buttonColor'=>'yellow', 
'buttonShape'=>'ad-round',
'link'=>BaseUrl.'air_media'];


$this->coreframework = [
    'title'=>'coreFramork: PHP7 Framework',
    'titleColor'=>'color-tgreen',
'description'=>'Develope Professional Website and Applications with ease: <br/>PHP 7 Framework with AirJax Framework, and airDesign in-the-box  
 \'AirJax\' is a lite javascript framework written for Single Page Application experience.',
'buttonText'=>'Download coreFramework', 
'buttonColor'=>'tgreen', 
'buttonShape'=>'ad-round',
'link'=>'https://github.com/air-Design/coreFramework'];


$this->cqured = [
    'title'=>'cQured Webapi(PHP7.2)',
    'titleColor'=>'color-pink', 
'description'=>'This is a PHP 7 Web API to partner client-side applications like Angular, Ionic, etc. Simple and Easy to use. Extensible with composer Use JWT the easy way. CoreModel available in the box for Datab… ',
'buttonText'=>'Download cQured',
'buttonColor'=>'pink', 
'buttonShape'=>'ad-round',
'link'=>'https://github.com/air-Design/cqured'];


    $this->data = [$this->airdesign, $this->airmedia, $this->coreframework, $this->cqured];


    }
}