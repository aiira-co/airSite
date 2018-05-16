<section class="ad-section bg-dark doc-banner" style="margin-top:-5px !important; background-image:url('<?=CDN;?>/images/banner/microsoft-surface-book-2-technastic-04.jpg');">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat text-center">
          <div class="logo">
            <img src="<?=CDN;?>images/logo/airdesignWhite.png" class="img-responsive" alt="">
          </div>
          <h2 class="title text-normal">
            airDesign CSS Framework
          </h2>
          <p class="p-center">
            Designers and coders alike have contributed to the beauty of the web; we can always push it further. Air Design is a unified system that combines theory, resources, and tools for crafting digital experiences.
          </p>
          <br>
          <a href="https://github.com/air-Design/airDesign" target="_blank" class="ad-btn ad-round ad-md btn-prim ">Download airDesign</a>
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
            <b>Buttons & Inputs</b>
            <br>
            Like any design framework, airdesign comes with
            button & input styles, shapes and colors that suites all possible UI
          </p>
        </div>


        <div class="ad-cols-3">
          <i class="fa fa-clone fa-2x" style="opacity:.5"></i>
          <p>
            <b>Cards & Tiles.</b>
            <br>
            Make use of cards and tiles which comes
            with block and rounded corners(border-radius)

          </p>
        </div>


        <div class="ad-cols-3">
          <i class="fa fa-list fa-2x" style="opacity:.5"></i>
          <p>
          <b>List & Items.</b>
          <br>
          Use predefined classes for
          Items, Avatar and Thumbnails to list users and blogs
          </p>
        </div>

        <div class="ad-cols-3">
          <i class="fa fa-cog fa-2x" style="opacity:.5"></i>
          <p>
          <b>Other Components.</b>

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

<ad-section class="bg-white ">
  <ad-wrapper>
    <ad-row>
  <div class="ad-cols-4">
    <div class="ad-card ad-flat">
        <h1 class="title">Getting Started</h1>

    </div>
  </div>
      <div class="ad-cols-8">
        <div class="ad-card ad-flat" >
        <p>
          Download the framework from this page(will send you to the github repo). It comes bundled in a zip file containing, a css folder, js folder and a fonts folder in the dist folder. The css folder contains the air.design.css and font-awesome libraries which can be downloaded directly from their website <a href="http://www.fontawesome.io" class="color-pink" target="_blank">www.fontawesome.io<a>. The js folder contains air.design.js which is used for events and enhances list-items class in the libraries.
          The fonts folder keeps our default font-family 'Bariol' by atipo (<a href="http://www.atipo.es" class="color-pink" target="_blank">www.atipo.es</a>) and font-awesome's files.
        </p>
          <h2 class="title color-pink">INSTALLATION</h2>
        <p>

          Include in your head tag a link referecing to air.design.css
          file location and the font-awesome.css, then also include the
          javascript file. air.design.js is written in jQuery so the Jquery
          library is required( version 3 and above).
        </p>

        <h3 class="title color-pink">For Angular</h3>
        <p>
          For Angular users, place the folders in the airDesign 'dist folder' in the assets folder (~/src/assets/).
          Then import both air.design and font-awesome (if needed) in the style.css(~/src/style.css  or style.scss) like so:
          <br>
          <pre >
            <code class='css'>

            @import:url('assets/css/air.design.css');

            </code>
          </pre>
          </p>
          <p>
          AirDesign is a CSS Framework for user interface and user experience design. We make use of CSS properties and JavaScript to bring the experience to your browser. Our framework is absolutely free to use for both commercial and private projects.
        </p>
        <a href="#" class="ad-btn ad-round ad-shadow ad-md btn-default "><i class="fa fa-book"></i> Cheetsheet</a>
        <br>
        </div>
      </div>
    </ad-row>

  </ad-wrapper>
</ad-section>


<ad-section class="iphone-x iwhite">
  <ad-wrapper>
    <ad-row>
    <div class="ad-cols-4">
      <div class="ad-card ad-flat">
      <h1 class="title">Default Values</h1>
      </div>
    </div>
    <div class="ad-cols-8 doc" >
      <div class="ad-card ad-flat">
      <p>
        airDesign comes with some default values for some CSS properties. These values were set for the purpose of our design principles with web application design in mind. Some web projects might find these values inappropriate and we advice that you overwrite these defaults with your own css file after the library has been linked.
      </p>
      <p>
      <pre>
        <code class='css'>
          body{
            font-family:bariol;
            font-size:14px;
            background-color:whitesmoke;
          }

        </code>
      </pre>

        <p>
          For general website design, you might want to increase the <code>font-size</code> to <code>17px</code> or <code>18px</code>. The default <code>14px</code> is optimal for web application and can sometimes be used for website like this doc.
        </p>
        <br>


      </div>

    </div>
  </ad-row>
  </ad-wrapper>
</ad-section>

<ad-section class="bg-dark iphone-x">
  <ad-wrapper>
    <ad-row>
      <div class="ad-cols-4">
  <div class="ad-card ad-flat">
    <h1 class="title">Key Classes</h1>
  </div>
      </div>
      <div class="ad-cols-8">

        <br>
        <span class="colorPallate prim ad-tip" ad-tip="prim: #28d0ea;"></span>
        <span class="colorPallate pink ad-tip" ad-tip="pink: #ff0066;"></span>
        <span class="colorPallate tgreen ad-tip" ad-tip="tgreen: #19e3b1;"></span>
        <span class="colorPallate yellow ad-tip" ad-tip="yellow: #fff600;"></span>
        <span class="colorPallate dark ad-tip" ad-tip="dark: #222c37;"></span>
      </p>
      <div class=" ad-card ad-flat" >

        <div class="ad-list ad-sm ad-strip ad-flat">
          <div class="ad-item ">
            <code><span class="color-yellow">ad-flat</span></code> : means, turn the element into a flat design. This class removes all shadows and other css properties that makes the element isometric.
          </div>

          <div class="ad-item">
            <code><span class="color-yellow">ad-block</span></code>  : means, turn the element into a block design. This class removes all border-radius and curves properties from the element.
          </div>

          <div class="ad-item">
            <code><span class="color-yellow">ad-round</span></code>  : means, turn the element into a round design. This class adds curves to the edges of the element applied to.
          </div>

          <div class="ad-item">
            <code><span class="color-yellow">ad-full</span></code>  : means, turn the element into a block display. This class removes all margins and set the element to take the full width (100%) of its container.
          </div>
          <div class="ad-item">
            <code><span class="color-yellow">ad-clear</span></code> :  This class makes the background-color of the element transparent and applys the color of the background to the text in the container.
          </div>
        </div>
      </div>
      </div>
    </ad-row>
  </ad-wrapper>
</ad-section>


<!-- Fre Style -->


<ad-section class="bg-dark">
  <div class="wrapper">
    <div class="ad-card ad-flat text-center">
    <h1 class="title text-normal">Quick Free-Style<br> Already available in airDesign</h1>
    <br>
    </div>
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-round ad-shadow" >
          <h2 class="title">Forms</h2>
          <form class="ad-form input-pink">
            <div class="ad-input ad-label ad-round">
              <label for="surname">Surname</label>
              <input type="text" name="surname">
            </div>
            <div class="ad-input ad-label ad-round">
              <label for="othername">Othername</label>
              <input type="text" name="othername">
            </div>
            <div class="ad-input ad-label ad-round">
              <label for="email">Email</label>
              <input type="email" name="email">
            </div>

            <div class="ad-input ad-label ad-round">
              <label for="comment">Comment</label>
              <textarea name="comment"></textarea>
            </div>
          </form>

          <p>
            <button class="ad-btn ad-full ad-round ad-sm btn-pink ad-spread">
              <b>SEND</b>
            </button>
          </p>
        </div>
      </div>
      <div class="ad-cols-4">
        <div class="ad-card ">
          <h2 class="title">Messages</h2>
          <div class="ad-divider">
            Recent
          </div>

          <div class="ad-list ad-hover hover-tgreen">
            <div class="ad-avatar ad-button">
              <img src="<?=CDN;?>images/users/user1.jpg" alt="">
              <h2>Name of Person</h2>
              <p>
                Message here...
              </p>
              <button class="ad-btn ad-round shine-tgreen clear"><i class="fa fa-circle-o fa-fw"></i></button>
            </div>

            <div class="ad-avatar ad-button">
              <img src="<?=CDN;?>images/users/user1.jpg" alt="">
              <h2>Name of Person</h2>
              <p>
                Message here...
              </p>
              <button class="ad-btn ad-round shine-tgreen clear"><i class="fa fa-circle-o fa-fw"></i></button>
            </div>

            <div class="ad-avatar ad-button">
              <img src="<?=CDN;?>images/users/user1.jpg" alt="">
              <h2>Name of Person</h2>
              <p>
                Message here...
              </p>
              <button class="ad-btn ad-round shine-tgreen clear"><i class="fa fa-circle-o fa-fw fa-fw"></i></button>
            </div>

            <div class="ad-avatar ad-button">
              <img src="<?=CDN;?>images/users/user1.jpg" alt="">
              <h2>Name of Person</h2>
              <p>
                Message here...
              </p>
              <button class="ad-btn ad-round shine-tgreen clear"><i class="fa fa-circle-o fa-fw"></i></button>
            </div>

            <!-- <div class="ad-avatar ad-button">
              <img src="images/pic.jpg" alt="">
              <h2>Name of Person</h2>
              <p>
                Message here...
              </p>
              <button class="ad-btn ad-round shine-tgreen clear"><i class="fa fa-circle-o fa-fw"></i></button>
            </div> -->
          </div>

          <p>
            <button class="ad-btn ad-full ad-sm ad-round btn-tgreen ad-spread">
              <b>SHOW MORE</b>
            </button>
          </p>
        </div>
      </div>
      <div class="ad-cols-4">
        <div class="ad-card ">
        <img src="<?=CDN;?>images/bg.jpg" class="img-responsive"  alt="">
          <div class="ad-user" style="position:absolute; left:50%; margin-left:-50px; margin-top:-50px;">
            <img src="<?=CDN;?>images/users/user1.jpg" class="img-responsive"  alt="">
          </div>

          <h2 class="title">Alisa Kruus</h2>
          <p></p>
          <ad-tab-group class="ad-round">

              <ad-tab class="ad-show" label="Post">
                <div class="ad-input ad-round ad-icon input-yellow ad-button">
                  <span>
                    <i class="fa fa-camera"></i>
                  </span>
                  <input type="text" name="" value="">
                  <button class="ad-btn ad-round btn-yellow">
                    &nbsp;<b>POST</b>&nbsp;
                  </button>
                </div>
                <div class="ad-row">
                  <div class="ad-cols-2">
                    <div class="ad-user ad-sm ad-flower">
                      <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                    </div>
                  </div>
                  <div class="ad-cols-10">
                    <div class="ad-card ad-block bg-white" style="margin-top:16px;">
                      <div class="ad-item ad-button ">
                        ALICIA KRUSS
                        <span class="ad-btn-group ad-round">
                          <button class="ad-btn btn-dark">
                            <i class="fa fa-trash fa-fw"></i>
                          </button>
                          <button type="button" name="button"
                          class="ad-btn btn-dark ">
                          <i class="fa fa-ellipsis-h fa-fw"></i>
                        </button>
                        </span>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, t. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,

                      </p>
                    </div>
                  </div>
                </div>
              </ad-tab>

              <ad-tab label="About">
                <div class="ad-divider">Bio</div>
                <p style="padding-top:0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                   sunt in culpa qui officia deserunt mollit anim id est laborum.s
                </p>
              </ad-tab>

              <ad-tab  label="Photo">
                <p>Pics</p>
              </ad-tab>

          </ad-tab-group>
        </div>
      </div>
    </div>
  </div>
</ad-section>

<ad-section class="bg-white">
  <ad-wrapper>
    <ad-row>
      <div class="ad-colx-12">
        <button type="button" name="button" routerLink="<?=BaseUrl;?>headers_navs"
          class="ad-btn ad-flat ad-round ad-md btn-blue  rFloat">
          Headers & Navigations &nbsp; <i class="fa fa-angle-right"></i>
        </button>
      </div>
    </ad-row>
  </ad-wrapper>
</ad-section>
