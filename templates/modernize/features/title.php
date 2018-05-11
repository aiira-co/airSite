<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Likewise for Metadatas, get the info from db(website CMS) of the menu if db is used,
    else if its not db(Simple Site, get it from bassket)
    Note that if its a webApp, metadata is not need-->

    <!--Write a logic for the title-->
    <!--First check if its db(Website CMS), if yes, then get the title of the page from the DB,
    Else get the title of the Page from the $url-->


    <title><?php echo CORE::componentTitle();?></title>
    <!--Links-->
    <link rel="stylesheet" href="<?php echo CDN;?>css/air.design.css">
    <link rel="stylesheet" href="<?php echo CDN;?>css/air.media.css">
  <link rel="stylesheet" href="<?php echo CDN;?>css/air.ui.css">

    <link rel="stylesheet" href="<?=BaseUrl;?>templates/modernize/css/main.css">


    <link rel="stylesheet" href="<?php echo CDN;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CDN;?>css/animate.css">

    <link rel="stylesheet" href="<?php echo CDN;?>css/androidstudio.css">

    <!-- Component Styles -->
        <?php CORE::componentStyle();?>


            <!--Favicon-->
            <link href="<?php echo CDN;?>images/logo/favicon.png" rel="icon" type="image/png"/>

</head>
<body>
  <base url='<?=BaseUrl;?>' />
