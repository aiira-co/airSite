<section class="ad-section bg-dark" style="margin-top:-5px !important;">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat text-center">
          <div class="logo">
            <img src="<?=CDN;?>images/logo/airmediaWhite.png" class="img-responsive" alt="">
          </div>
          <br>
          <h2 class="title text-normal">
            airMedia
          </h2>
          <p class="p-center">
          AirMedia is a CSS, Javascript library for user interface components like, caurosel, content slider, video ad audio player.
          We make use of CSS properties and JavaScript to bring the experience to your browser.
          Our library is absolutely free to use for both commercial and private projects.
          </p>
          <br>
          <a href="https://github.com/air-Design/airMedia" target="_blank" class="ad-btn ad-block ad-md btn-yellow">Download Media</a>
        </div>
      </div>
    </div>
  </div>
</section>

<ad-section class="bg-white ">
  <ad-wrapper>
    <ad-row>
    <div class="ad-cols-12">

    <div class="ad-card ad-flat text-center">
      <h1 class="title text-normal">Designed to do everything <br> you want to do</h1>
<br>
<br>


      <div class="ad-row" style='font-size:16px;'>

      <div class="ad-cols-3">
          <i class="fa fa-paint-brush fa-2x" style="opacity:.5"></i>
          <p>
            <b>Content Slider</b>
            <br>
            Like any design framework, airdesign comes with
            button & input styles, shapes and colors that suites all possible UI
          </p>
        </div>


        <div class="ad-cols-3">
          <i class="fa fa-clone fa-2x" style="opacity:.5"></i>
          <p>
            <b>Caurosel</b>
            <br>
            Make use of cards and tiles which comes
            with block and rounded corners(border-radius)

          </p>
        </div>


        <div class="ad-cols-3">
          <i class="fa fa-play-circle fa-2x" style="opacity:.5"></i>
          <p>
          <b>Video Player</b>
          <br>
          Use predefined classes for
          Items, Avatar and Thumbnails to list users and blogs
          </p>
        </div>

        <div class="ad-cols-3">
          <i class="fa fa-music fa-2x" style="opacity:.5"></i>
          <p>
          <b>Audio Player</b>

          <br>
          Get accordian, tabs, modal and custom elements(airlements)
          with our javascript.
          </p>
        </div>
      </div>

    </div>


    </div>
    </ad-row>
  </ad-wrapper>
</ad-section>


<section class="ad-section ">
  <div class="wrapper">
    <div class="ad-colx-2">
      <div class="ad-card bg-white">
        <a href="#structure" class="ad-item">Getting Started</a>
        <a href="#slider" class="ad-item">Content Slider</a>
        <a href="#caurosel" class="ad-item">Caurosel</a>
        <a href="#video" class="ad-item">Video Player</a>
        <a href="#audio" class="ad-item">Audio Player</a>
      </div>
    </div>
    <div class="ad-colx-10">
      <div class="ad-card bg-white">

        <h2 class="title">Getting Started</h2>
        <p>
          AirMedia is a web library for user interface and user experience design. We make use of CSS properties and JavaScript to bring the experience to your browser.
          Our library is absolutely free to use for both commercial and private projects.
<br>
          The airMedia library is dependent on the airDesign CSS framework. So please make sure you already have it installed. Jquery 3.2+
        </p>
        <p>
      </div>

      <div class="ad-card bg-white">

        <h2 class="title color-pink">INSTALLATION</h2>
        <p>

          Download the library from this page, it comes bundled in a zip  file containing, a css folder, js folder and a fonts folder. ]
          The css folder contains the air.media.css . The js folder contains air.media.js which is used for events, to construct the media components and enhances appearance in the libraries.
          <br>
          <br>
          Include in your head tag a link referecing to air.media.css file location , then also include the javascript file. air.media.js is written in jQuery so the Jquery library is required( version 3 and above).
          <br>
          <br>
          <pre>
            <code class='html'>
                &lt;link rel="stylesheet" type="text/css" href="css/air.air.design.css"/> //dependency
                &lt;link rel="stylesheet" type="text/css" href="css/air.medai.css"/>

                &lt;script src="js/jquery-3.2.1.min.js">  &lt;/script>
                &lt;script src="js/air.media.js">  &lt;/script>

            </code>
          </pre>


      </div>


    </div>

  </div>
</section>

<section class='ad-section bg-white'>

  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class='title'>Content Slider</h2>
          <p>
            <span class="color-pink">.ad-slide-group</span> is the parent class of the content slider. Each slide will have the class   <span class="color-pink">ad-slide</span>;
            <br>
              <br>
            Adding the <span class="color-pink">responsive</span> attribute to the slider will make the slider responsive when the screen size is change. The default the height of the slider is the height of the first slide
            <br>
              <br>
            The attribute   <span class="color-pink">duration</span> is used to set the time it takes a slide to stay on view. you can ommit it and the default is 5 seconds
          </p>

          <pre>
            <code class='html'>
  &lt;div class="ad-slide-group"
          responsive duration="8"
          effect="zoomIn">

    &lt;div class="ad-slide ">
      &lt;h2 class="title">Slider here&lt;/h2>
    &lt;/div>

    &lt;div class="ad-slide ">
      &lt;h2 class="title">Slider here&lt;/h2>
    &lt;/div>

    &lt;div class="ad-slide ">
        &lt;h2 class="title">Slider here&lt;/h2>
    &lt;/div>

    &lt;div class="ad-slide ">
      &lt;h2 class="title">Slider here&lt;/h2>
      &lt;/div>

  &lt;/div>
            </code>
          </pre>
        </div>
      </div>
      <div class="ad-cols-8">

        <div class="ad-slide-group" effect="zoomIn" responsive>
          <div class="ad-spinner bg-white"></div>
          <div class="ad-slide">

            <div class="ad-card ad-full ad-shadow bg-pink" style="height:400px;">
              <h2 class="title">Slider here</h2>
            </div>
          </div>

          <div class="ad-slide">

            <div class="ad-card ad-full ad-shadow bg-tgreen" style="height:400px;">
              <h2 class="title">Slider here</h2>
            </div>
          </div>
          <div class="ad-slide">

            <div class="ad-card ad-full ad-shadow bg-prim" style="height:400px;">
              <h2 class="title">Slider here</h2>
            </div>
          </div>
          <div class="ad-slide">

            <div class="ad-card ad-full ad-shadow bg-blue" style="height:400px;">
              <h2 class="title">Slider here</h2>
            </div>
          </div>
        </div>


        <div class="ad-card">
          <h2 class='title'>Effects</h2>
          <p>
            This is the transition effect:
          </p>

          <div class="ad-list ad-sm ad-round">
            <div class="ad-row">
              <div class="ad-colx-4">
                <div class="ad-item bg-pink">
                  fadeIn,
                </div>
                <div class="ad-item bg-pink">
                  fadeOut
                </div>
                <div class="ad-item bg-pink">
    slideUp,
    </div>
    <div class="ad-item bg-pink">
    slideDown,
    </div>

              </div>
              <div class="ad-colx-4">
                <div class="ad-item bg-pink">
                slideLeft,
                </div>
                <div class="ad-item bg-pink">
                slideRight,
                </div>
                <div class="ad-item bg-pink">
                zoomIn,
                </div>
                <div class="ad-item bg-pink">
                zoomOut,
                </div>
              </div>
              <div class="ad-colx-4">
                <div class="ad-item bg-pink">
                crossUp,
                </div>
                <div class="ad-item bg-pink">
                crossDown,
                </div>
                <div class="ad-item bg-pink">
                crossLeft,
                </div>
                <div class="ad-item bg-pink">
                crossRight.
                </div>

              </div>
            </div>


          </div>
        </div>


        <div class="ad-row">
          <div class="ad-colx-4">
            <div class="ad-card">
              <h2 class="title text-normal">slideLeft Effect</h2>
              <div class="ad-slide-group" effect="slideLeft" roundbullet responsive>

                <div class="ad-spinner bg-white"></div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-pink" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>

                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-tgreen" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-prim" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="ad-colx-4">
            <div class="ad-card">
              <h2 class="title text-normal">crossUp Effect</h2>

              <div class="ad-slide-group" effect="crossUp" roundbullet responsive>
                <div class="ad-spinner bg-white"></div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-pink" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>

                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-tgreen" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-prim" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>

              </div>

            </div>
          </div>


          <div class="ad-colx-4">
            <div class="ad-card">
              <h2 class="title text-normal">fadeIn Effect</h2>

              <div class="ad-slide-group" effect="fadeIn" roundbullet responsive>
                <div class="ad-spinner bg-white"></div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-pink" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>

                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-tgreen" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>
                <div class="ad-slide">

                  <div class="ad-card ad-full ad-shadow bg-prim" style="height:200px;">
                    <h2 class="title">Slider here</h2>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="clearfix">

        </div>
        <div class="ad-card ad-flat">
          <p>
            All the effects are written in css and can be extended with the scss files. if you have any transition effect in mind, contact us.
            <br>
            <br>
            To stop autoplay of the slider, add the attribute ' <span class="color-pink">manual</span>' to the  <span class="color-pink">.ad-slide-group</span>.
            <br>
            This way, the slide will change only if the bullets or navigation buttons are clicked.
            <br>
            <br>
 <span class="color-pink">showNav</span> is another attribute that is set to true by default. To ommit the navigation buttons (prev and next buttons), set the attrubute  <span class="color-pink">showNav</span> to  <span class="color-pink">false</span>;
<br>
<br>
 <span class="color-pink">roundbullet</span> to change the bullet rounded design. Its best suite for multiple slides to afford the spacing
<br>
<br>
There are cases where the slider will flicker or wait for some seconds before the contents appear, such occurances are not good for user experience. Instead of letting the user see that, the best solution is to add a waiting animation.
<br>
<br>
To do that, add a div with the class  <span class="color-pink">.ad-spinner</span>.
<br>
The spinner class will show for 3ms or until the content of the slider, carousel or video is fully loaded.
<br>
This also solves the case of constructing 'air media's element which are called via AJAX.
<br>
airDesign also has a class called ' <span class="color-pink">is-loading</span>' which can be applied to the media elements, when the loading is done, airMedia automatically removes the class.
          </p>
        </div>




        <pre>
          <code>
            //Using ad-spinner
              &lt;div class="ad-slide-group" roundbullet effect="slideLeft">

                 &lt;div class="ad-spinner ">&lt;/div>

                 &lt;div class="ad-slide ">
                   ...
                 &lt;/div>
                 &lt;div class="ad-slide ">
                   ...
                 &lt;/div>
                 &lt;div class="ad-slide ">
                 ...
                 &lt;/div>
                 &lt;div class="ad-slide ">
                 ...
                 &lt;/div>

               &lt;/div>
          </code>
        </pre>


<div class="ad-card ad-shadow">
  <p>
    *   NOTE: The loading div can be applied to all airmedia's components.
    the '<span class="color-pink">background-color</span>' property of the ad-spinner div can be change to match the template of your design.
    <br>
    <br>
        *   From airDesign's CSS framework, the class:
        <br>
        <br>
        *   <span class="color-pink">bg-dark</span> applies a dark background -- default for the ad-spinner class
        <br>
        <br>
        *   <span class="color-pink">bg-white</span> applies a white background
        <br>
        <br>
        *   <span class="color-pink">bg-pink</span> applies a pink background
        <br>
        <br>
        *   <span class="color-pink">bg-blue</span> applies a blue background
        <br>
        <br>
        *   <span class="color-pink">bg-prim</span> applies a primary color background & etc.


  </p>
</div>
      </div>
    </div>
  </div>
</section>



<section class='ad-section'>
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">
        <div class="ad-card text-center ad-flat" >
          <h2 class="title">Caurosel</h2>
          <p class='p-center'>
            Put your items into the <span class="color-pink">.ad-caurosel-item</span> , or better, set the items attribute to the class name of the items you want the caurosel to move.
            <br>
eg. i want the item to be <span class="color-pink">.ad-persons</span>  (which has a defined width). The carousel uses the width of the items to make calculations of the appropriate number of items that are suppose to be in view, in any given screen size.
<br>
Hence, set the items attribute of the carousel to <span class="color-pink">ad-persons</span> ,
<br>
Then place the element with the class ad-persons in the carousel
<br>
You can also add the flow attribute if you want the carousel items to mave no margins.
          </p>
        </div>

<div class="ad-row">
  <div class="ad-colx-6">
    <div class="ad-card ad-flat">
      <h2 class="title text-normal">Default Caurosel</h2>
      <pre>
        <code class='html'>
          &lt;div class="ad-carousel">

            &lt;div class="ad-carousel-item">
            item 1
            &lt;/div>

            &lt;div class="ad-carousel-item">
            item 2
            &lt;/div>

            &lt;div class="ad-carousel-item">
            item 3
            &lt;/div>

            &lt;div class="ad-carousel-item">
            item 4
            &lt;/div>

            &lt;div class="ad-carousel-item">
            item 5
            &lt;/div>

          &lt;/div>
        </code>
      </pre>
    </div>

  </div>



  <div class="ad-colx-6">
    <div class="ad-card ad-flat">
      <h2 class="title text-normal">Caurosel With Custom Item Attribute</h2>
      <pre>
        <code class='html'>
          &lt;div class="ad-carousel" items="ad-persons">

            &lt;div class="ad-persons">
                 {{IMG}}
                 Person Name
            &lt;/div>

            &lt;div class="ad-persons">
                 {{IMG}}
                 Person Name
            &lt;/div>

            &lt;div class="ad-persons">
                 {{IMG}}
                 Person Name
            &lt;/div>

            &lt;div class="ad-persons">
                 {{IMG}}
                 Person Name
            &lt;/div>

          &lt;/div>
        </code>
      </pre>
    </div>

  </div>
</div>

<div class="clearfix">

</div>

        <div class="ad-carousel" items="ad-album">

          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>

          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>

          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>

          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>

          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>
          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>
          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>
          <div class="ad-album">
            <div class="ad-card ad-full ad-round bg-white ad-shadow">
              <div class="action-button">
                <button class="ad-btn ad-flat btn-yellow ad-sm ad-round ad-icon">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
            <div class="text-center padding">
              Product Name
              <br>
              <small>Category | Price</small>
            </div>
          </div>

        </div>


      </div>
    </div>
  </div>
</section>


<section class='ad-section bg-white'>

  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class='title'>Media Player</h2>
          <p>
            Adding airdesign's Video and Audio to your html is as simple as adding the video element itself.
<br>
<br>
Create a div with class '<span class="color-pink">.ad-video</span>';
<br>
In the element '<span class="color-pink">div.ad-video</span>' add the video element with the '<span class="color-pink">controls</span>' attribute.
<br>
Add an Id to the video, eg <span class="color-pink">myVideo</span>.
<br>
Add an attribute '<span class="color-pink">videoId</span>' to the <span class="color-pink">div.ad-video</span>, setting the id of the video element as its value.
<br>
This is useful if you want to display more than one video player on the page.
<br>
By default, the id of the video should be <span class="color-pink">id='video'</span>;
<br>
[Optional] you can add the attribut '<span class="color-pink">videoTitle</span>' to the div element.
<br>
<br>
The videoTitle attribute is used to display the title of the video when ever the user hovers on top of the video.
Done.!
<br>
<br>
Without any videoId attribute. make sure to set the id of the video element to '<span class="color-pink">video</span>'. use this if its the only video on the webpage
          </p>
        </div>

        <pre>
          <code>
  &lt;div class="ad-video">
     &lt;video id="video"
               src="videos/dress.mp4"
               controls>
     &lt;/video>
  &lt;/div>

  //With the video title

  &lt;div class="ad-video"
          videoTitle="Men's shirt pull-ups"
          videoId="dress">

      &lt;video id="dress"
                src="videos/dress.mp4"
                controls>
      &lt;/video>

  &lt;/div>
          </code>
        </pre>

        <div class="ad-card ad-flat">
          <h2 class='title'>Features</h2>
          <p>
            Hover over the video to display controls.
            <br>
            <br>
            If you dont like the slide in effects of the controls, click on the video control (not on a button) to switch to fixed mode.
              <br>
            This way, the video-controls will fadeIn when hovered
              <br>
            Click of the video to play or pause,
            <br>
            <br>
            Click on the volume button or icon to mute or set volume to the previous value before it was muted.
            <br>
            <br>
            Scroll up or down on the volume button to increase or decrease volume. (at the moment it only scrolls to the max volume of 50%, working on it to fix that issue);
            <br>
            <br>
            Make Video full screen by clicking on the fullscreen button
            <br>
            <br>
            Click the more/setting icon to display other info, such as 'video playlist, settings, video info etc.' [under development];
          </p>
        </div>
      </div>

      <div class="ad-cols-8">
        <div class="ad-card bg-white">
          <!-- <h2 class="title">Video Player</h2> -->
          <div class="ad-video theme-pink" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="adVideo">
            <video id="adVideo" src="<?=CDN;?>videos/trailer.mp4" controls></video>
          </div>
        </div>
        <div class="ad-card ad-flat">
          <p>
            Note that the <span class="color-pink">videoId</span> attribute of the <span class="color-pink">div.ad-video</span> matches the video <span class="color-pink">id</span>. For more than one video see:
          </p>
          <pre>
            <code class="html">
              &lt;div class="ad-video" videoTitle="My Birthday" videoId="post0777">
                 &lt;video id="post0777" src="videos/post0777.mp4" controls>&lt;/video>
              &lt;/div>

              &lt;div class="ad-video" videoTitle="10 Tips of the day" videoId="post2123">
                 &lt;video id="post2123" src="videos/post2123.mp4" controls>&lt;/video>
              &lt;/div>
            </code>
          </pre>
        </div>

        <div class="ad-card">
          <h2 class='title'>Theming Video Player</h2>
          <p>
            Change color theme of the video player from green(the default) to pink, yellow, blue, prim. just add the theme class to the .ad-video like so:
          </p>

          <pre>
            <code class="html">
              &lt;div class="ad-video theme-pink">
                  &lt;video id="video" src="videos/movie.mp4" controls>&lt;/video>
              &lt;/div>
            </code>
          </pre>

          <p>
            'theme-pink' for pink theme
            <br>
'<span class="color-pink">theme-blue</span>' for blue theme
<br>
'<span class="color-pink">theme-yellow</span>' for yellow theme
<br>
'<span class="color-pink">theme-prim</span>' for prim theme
          </p>
        </div>


        <div class="ad-row">

          <div class="ad-colx-6">
            <div class="ad-card bg-white">
              <h2 class="title">Default Theme</h2>
              <div class="ad-video" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="dress">
                <video id="dress" src="<?=CDN;?>videos/trailer.mp4" controls></video>
              </div>
            </div>
          </div>

          <div class="ad-colx-6">
            <div class="ad-card bg-white">
              <h2 class="title">Blue Theme</h2>
              <div class="ad-video theme-blue" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="blue">
                <video id="blue" src="<?=CDN;?>videos/trailer.mp4" controls></video>
              </div>
            </div>
          </div>

        </div>


        <div class="ad-row">

          <div class="ad-colx-6">
            <div class="ad-card bg-white">
              <h2 class="title">Yellow Theme</h2>
              <div class="ad-video theme-yellow" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="yellow">
                <video id="yellow" src="<?=CDN;?>videos/trailer.mp4" controls></video>
              </div>
            </div>
          </div>

          <div class="ad-colx-6">
            <div class="ad-card bg-white">
              <h2 class="title">prim Theme</h2>
              <div class="ad-video theme-prim" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="prim">
                <video id="prim" src="<?=CDN;?>videos/trailer.mp4" controls></video>
              </div>
            </div>
          </div>


        </div>

        <div class="ad-row">
          <div class="ad-colx-6">
            <div class="ad-card bg-white">
              <h2 class="title">Pink Theme</h2>
              <div class="ad-video theme-pink" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="pink">
                <video id="pink" src="<?=CDN;?>videos/trailer.mp4" controls></video>
              </div>
            </div>
          </div>

          <div class="ad-colx-6">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
