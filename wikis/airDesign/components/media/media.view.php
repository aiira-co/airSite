<section class="ad-section bg-dark" style="position:relative; top:-8px; background-image:url('<?=BaseUrl;?>media/images/bg-lines.png'); background-size:cover; background-position:center;">
    <div class="wrapper">
        <div class="ad-row">
            <div class="ad-cols-6">
                <div class="ad-card ad-flat">
                    <h2 class="title color-yellow">AirMedia</h2>
                    <p>
                    AirMedia is a web library for user interface and user experience design. 
                    We make use of CSS properties and JavaScript to bring the experience to your browser. 
                    Our library is absolutely free to use for both commercial and private projects.
                    </p>

                    <div class="ad-row">
                      <div class="ad-colx-6">
                        <h2 class="title color-tgreen">Media Content</h2>

                        <div class="ad-item ad-icon">
                       <i class="fa fa-clone"></i> Content Slider
                    </div>

                    <div class="ad-item ad-icon">
                    <i class="fa fa-ellipsis-h"></i> Caurosel
                    </div>
                      </div>

                      <div class="ad-colx-6">
                      <h2 class="title color-tgreen">Media Player</h2>

                    <div class="ad-item ad-icon">
                    <i class="fa fa-video-camera"></i> Video Player
                    </div>

                    <div class="ad-item ad-icon">
                    <i class="fa fa-music"></i> Audio Player
                    </div>
                      </div>
                    </div>

                    

                </div>
            </div>

            <div class="ad-cols-6">
            <div class="ad-card ad-flat">
            <h2 class="title color-yellow text-normal">Download & Installation</h2>
            <p>
            Dowload the library from our github page. 
            <a href="https://github.com/air-Design/airMedia" class="ad-btn btn-yellow ad-flat ad-round">
            Download airMedia
            </a>
            it comes bundled in a zip file containing, a css folder, js folder and a fonts folder. The css folder contains the air.media.css . The js folder contains air.media.js which is used for events, 
            to construct the media components and enhances appearance in the libraries. 
            </p>
            <p>
            Include in your head tag a link referecing to air.media.css file location , then also include the javascript file. air.media.js is written in jQuery so the Jquery library is required( version 3 and above).
            </p>
            
            </div>
            </div>
        </div>
    </div>
</section>


    <!-- BANNER/SLIDEER -->
    <section class="ad-section bg-white iphone-x idark">
      <div class="wrapper">
        <div class="ad-row">
          <div class="ad-colx-12">

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
          </div>
        </div>
      </div>
    </section>


<section class="ad-section">
<div class="wrapper">
    
        <div class="ad-row">
            <div class="ad-cols-6">
                <div class="ad-card ad-flat">
                    <h2 class="title">Content Slider</h2>
                    <p>
                    .ad-slide-group is the parent class of the content slider. each slide will have the class ad-slide;
                        <br>
                      adding the responsive attribute to the slider will make the slider responsive when the screen size is change. the default the height of the slider is the height of the first slide
                        <br>
                      duration is used to set the time it takes a slide to stay on view. you can ommit it and the default is 5 seconds


                    </p>

    
                </div>
            </div>

            <div class="ad-cols-6">
              <div class="ad-card ad-flat">

              <h2 class="title">Effect :  This is the transition effect</h2>
    <div class="ad-list ad-sm bg-white">
    <div class="ad-item">
      fadeIn 
    </div>
    <div class="ad-item">
      slideUp 
    </div>
    <div class="ad-item">
      slideDown 
    </div>
    <div class="ad-item">
      slideLeft 
    </div>
    <div class="ad-item">
      slideRight 
    </div>
    <div class="ad-item">
      zoomIn 
    </div>
    <div class="ad-item">
      zoomOut 
    </div>
    <div class="ad-item">
      crossUp 
    </div>
    <div class="ad-item">
      crossDown 
    </div>
    <div class="ad-item">
      crossLeft 
    </div>
    <div class="ad-item">
      crossRight
    </div>
    </div>

              </div>
            </div>
        </div>
    
</div>  
</section>
    <!-- Carousel -->

    <section class="ad-section ">
      <div class="wrapper">
        <div class="ad-row">
          <div class="ad-cols-12">
            <div class="ad-card ad-flat">
              <h1 class="title ad-spread">
                Carousel Example
              </h1>
              <br>
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

<!-- MEDIA PLAYER -->


<section class="ad-section">
    <div class="wrapper">
      <div class="ad-row">
        <div class="ad-cols-8">
            
          <div class="ad-card bg-white">
            <!-- <h2 class="title">Video Player</h2> -->
            <div class="ad-video theme-pink" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="adVideo">
              <video id="adVideo" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <!-- <h2 class="title">Video Player</h2> -->
            <div class="ad-video-remix" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="adVideoRemix">
              <video id="adVideoRemix" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <div class="ad-audio  theme-yellow" audioId="audioyellow" audioTitle="Yellow Theme" artist="Wizkid ft Acehood">
              <audio src="<?=BaseUrl;?>media/audios/music.mp4"  id="audioyellow" controls></audio>
            </div>
          </div>

          <div class="ad-card ad-round bg-white" >
              <div class="ad-audio  theme-pink" poster="<?=BaseUrl;?>media/images/users/user1.jpg" audioId="audiopink" audioTitle="My Love" artist="R2Bees ft Wizkid">
                <audio src="<?=BaseUrl;?>media/audios/music.mp4"  id="audiopink" controls></audio>
              </div>
            </div>

            <div class="ad-card ad-block bg-white" >
                <div class="ad-audio theme-blue" audioId="audioblue" audioTitle="Dance'" artist="music">
                  <audio src="<?=BaseUrl;?>media/audios/music.mp4"  id="audioblue" controls></audio>
                </div>
              </div>


        </div>

        <div class="ad-cols-4">
          <div class="ad-card bg-white">
            <h2 class="title">Default Theme</h2>
            <div class="ad-video" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="dress">
              <video id="dress" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <h2 class="title">Blue Theme</h2>
            <div class="ad-video theme-blue" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="blue">
              <video id="blue" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <h2 class="title">Pink Theme</h2>
            <div class="ad-video theme-pink" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="pink">
              <video id="pink" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <h2 class="title">Yellow Theme</h2>
            <div class="ad-video theme-yellow" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="yellow">
              <video id="yellow" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>

          <div class="ad-card bg-white">
            <h2 class="title">prim Theme</h2>
            <div class="ad-video theme-prim" videoTitle="To Hell And Back - CGI Animated Trailer & behind the scenes" videoId="prim">
              <video id="prim" src="<?=BaseUrl;?>media/videos/trailer.mp4" controls></video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>