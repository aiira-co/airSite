<section class="ad-section bg-dark" style="margin-top:-5px !important;">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat center">
          <h2 class="title">
            airDesign
          </h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="<?=BaseUrl;?>media/docs/air.design.zip" class="ad-btn ad-block ad-md btn-tgreen">Download Design</a>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ad-section whiteBG">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-6">
        <div class="ad-dropdown">
          <a href="#" class="ad-btn ad-block ad-flat btn-tgreen ad-trigger">Hello Ghana</a>
          <div class="ad-content">
            <div class="ad-card ad-block whiteBG">
              <p>Hello There</p>
            </div>
          </div>
        </div>
      </div>
      <div class="ad-cols-6">
        <div class="ad-dropdown">
          <a href="#" class="ad-btn ad-block ad-flat btn-dark ad-trigger">Hello Ghana</a>
          <div class="ad-content">
            <div class="ad-card ad-block whiteBG">
              <div class="ad-item ad-avatar">
                <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                <h2>Chris Angel</h2>
                <p>Hello there, please contact me.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ad-cols-12">
        <h2>Getting Started</h2>
        <p>
          Dowload the framework from this page. It comes bundled in a zip file containing, a css folder, js folder and a fonts folder. The css folder contains the air.design.css and font-awesome libraries which can be downloaded directly from their website <a href="http://www.font-awesome.io" class="colorPink" target="_blank">www.font-awesome.io<a>. The js folder contains air.design.js which is used for events and enhances list-items class in the libraries.
          The fonts folder keeps our default font-family 'Bariol' by atipo (<a href="http://www.atipo.es" class="colorPink" target="_blank">www.atipo.es</a>) and font-awesome's files.
        </p>
        <p>
          <span class="colorPink">INSTALLATION</span>
          <br>
          Include in your head tag a link referecing to air.design.css file location and the font-awesome.css, then also include the javascript file. air.design.js is written in jQuery so the Jquery library is required( version 3 and above).
          AirDesign is a web library for user interface and user experience design. We make use of CSS properties and JavaScript to bring the experience to your browser. Our library is absolutely free to use for both commercial and private projects.
        </p>
        <a href="#" class="ad-btn ad-block ad-flat btn-tgreen "><i class="fa fa-file-o"></i> Cheetsheet</a>
      </div>
    </div>

  </div>
</section>

<section class="ad-section docs">
  <div class="wrapper">
    <div class="ad-colx-12 ">
      <div class="ad-card ad-flat ad-block">
        <div class="">

            <a href="#default" class="ad-btn shine-tgreen ">Defaults</a>


            <a href="#button" class="ad-btn shine-tgreen ">Buttons</a>


            <a href="#card" class="ad-btn shine-tgreen ">Cards & Tiles</a>


            <a href="#modal" class="ad-btn shine-tgreen ">Modal</a>


            <a href="#tab" class="ad-btn shine-tgreen ">Tabs & Accordian</a>


            <a href="#list" class="ad-btn shine-tgreen ">Lists & Items</a>


            <a href="#header" class="ad-btn shine-tgreen ">Headers & Navs</a>


            <a href="#forms" class="ad-btn shine-tgreen ">Forms</a>


            <a href="#grid" class="ad-btn shine-tgreen ">Grid System</a>


            <a href="#component" class="ad-btn shine-tgreen ">Components</a>


            <a href="#libraries" class="ad-btn shine-tgreen ">Other Libraries</a>

        </div>
      </div>
    </div>
    <div class="ad-colx-12 doc">
      <!-- <div class="ad-card whiteBG">
        <p></p>
      </div> -->

      <h2 id="default">Default</h2>
      <p>
        airDesign comes with some default values for some CSS properties. These values were set for the purpose of our design principles width web application design in mind. Some web projects might find these values inappropriate and we advice that you overwrite these defaults with your own css file after the library has been linked.
      </p>
      <p>
        Font-family: Bariol.
        <br>
        Font-Size: 14px;
        <br>
        Background-color:whitesmoke;
        <br>

        <p>
          For general website design, you might want to increase the font-size to 17px or 18px. The default 14px is optimal for web application and can sometimes be used for website like ours.
        </p>
        <br>
        COLORS
        <br>
        <span class="colorPallate prim ad-tip" ad-tip="prim: #28d0ea;"></span>
        <span class="colorPallate pink ad-tip" ad-tip="pink: #ff0066;"></span>
        <span class="colorPallate tgreen ad-tip" ad-tip="tgreen: #19e3b1;"></span>
        <span class="colorPallate yellow ad-tip" ad-tip="yellow: #fff600;"></span>
        <span class="colorPallate dark ad-tip" ad-tip="dark: #222c37;"></span>
      </p>
      <div class=" ad-card ad-flat whiteBG">
        <h3 class="title">Key-classes</h3>
        <div class="ad-list ad-sm ad-strip ad-flat">
          <div class="ad-item ">
            <span class="colorPink">ad-flat</span>: means, turn the element into a flat design. This class removes all shadows and other css properties that makes the element isometric.
          </div>

          <div class="ad-item">
            <span class="colorPink">ad-block</span>: means, turn the element into a block design. This class removes all border-radius and curves properties from the element.
          </div>

          <div class="ad-item">
            <span class="colorPink">ad-round</span>: means, turn the element into a round design. This class adds curves to the edges of the element applied to.
          </div>

          <div class="ad-item">
            <span class="colorPink">ad-full</span>: means, turn the element into a block display. This class removes all margins and set the element to take the full width (100%) of its container.
          </div>
          <div class="ad-item">
          <span class="colorPink">ad-clear</span>:  This class makes the background-color of the element transparent and applys the color of the background to the text in the container.
          </div>
        </div>
      </div>
    </div>
    </div>
</section>


      <!-- Buttons -->
      <?php CORE::component('design-button'); ?>




      <!-- Cards & Tiles -->
        <?php CORE::component('design-cards'); ?>

        <!-- Modal -->
        <?php CORE::component('design-modal'); ?>

        <!-- Modal -->
        <?php CORE::component('design-tabs'); ?>

        <!-- list -->
        <?php CORE::component('design-list'); ?>


        <!-- Header Nav -->
        <?php CORE::component('design-header'); ?>

        <!-- Forms -->

        <?php CORE::component('design-form'); ?>




      <!-- Grid System -->
        <?php CORE::component('design-grid'); ?>
<ad-loading/>
