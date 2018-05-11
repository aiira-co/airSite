<?php

$appRouter = [
    ['path'=>'/', 'component'=>'app', 'title'=>'airDesign CSS Framework'],
    ['path'=>'headers_navs', 'component'=>'headers', 'title'=>'{{title}}'],
    ['path'=>'buttons', 'component'=>'buttons', 'title'=>'{{title}}'],
    ['path'=>'cards_tiles', 'component'=>'cards', 'title'=>'{{title}}'],
    ['path'=>'lists_items', 'component'=>'list', 'title'=>'{{title}}'],
    ['path'=>'input_forms', 'component'=>'form', 'title'=>'{{title}}'],
    ['path'=>'typography', 'component'=>'typography', 'title'=>'{{title}}'],
    ['path'=>'modal', 'component'=>'modal', 'title'=>'{{title}}'],
    ['path'=>'tabs', 'component'=>'tabs', 'title'=>'{{title}}'],
    ['path'=>'grid_system', 'component'=>'grid-system', 'title'=>'{{title}}'],
    ['path'=>'other_components', 'component'=>'other-components', 'title'=>'{{title}}'],

    ['path'=>'air_media', 'component'=>'media', 'title'=>'{{title}}']
];

 $router = CORE::getInstance('Router');

 $router->setRouter($appRouter);
