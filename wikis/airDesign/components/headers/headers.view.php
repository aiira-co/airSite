<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">

      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h1 class="title">Header</h1>
          <p>
           Both <code class="color-pink">ad-header</code> and  <code class="color-pink">ad-suheader</code>
           class or element(airlement) were designed to be used in web application not website (you could use it for website templating).
           They take in buttons with the class  <code class="color-pink">ad-btn</code> which are use for navigation or options.
           to move the buttons to the extreme right add the class  <code class="color-pink">rFloat</code>
           to float the buttton to the right.
  <br>
           More effectively, use the  <code class="color-pink">rFloat</code> class on a span, then place your 
           button. <code class="color-pink">ad-btn.ad-flat</code> in there.

             
          </p>

          <p>
            Use  <code class="color-pink">title</code> class on a header element for page Topic or Heading.
            The class <code class="color-pink">ad-logo</code> can also be applied to a div containing an image element.
          </p>
        </div>
      </div>

      <div class="ad-cols-8">


        <!-- START HERE -->

      <pre class="ad-code">
            <code>

              <span class="word">// For  Header</span>

              &lt;header <span class="class">class="ad-header bg-dark"</span>&gt;

                &lt;div <span class="class">class="ad-logo" </span>&gt;
                  &lt;img <span class="id">src="logo.png" </span>/&gt;
                &lt;/div&gt;

                &lt;h2 <span class="class">class="title" </span>&gt;
                  <span class="word">Dashboard</span>
                &lt;/h2&gt;
      
                &lt;span <span class="class">class="rFloat" </span>&gt;

                  &lt;button <span class="class">class="ad-btn ad-flat" </span>&gt;
                    &lt;i <span class="class">class="fa fa-bell-o" </span>&gt;&lt;/i&gt;
                  &lt;/button&gt;

                  &lt;button <span class="class">class="ad-btn ad-flat" </span>&gt;
                    &lt;i <span class="class">class="fa fa-ellipsis-v" </span>&gt;&lt;/i&gt;
                  &lt;/button&gt;

                &lt;/span&gt;


              &lt;/header&gt;


              <span class="word">// For  Subheader</span>

              &lt;div <span class="class">class="ad-subheader bg-white"</span>&gt;

                &lt;h2 <span class="class">class="title" </span>&gt;
                  <span class="word">sub Header</span>
                &lt;/h2&gt;

              &lt;/div&gt;
            </code>
      </pre>

        <div class="ad-card ad-block bg-white">
          <header class="ad-header bg-dark">
            <div class="ad-logo">
              <img src="<?=BaseUrl;?>media/images/logo/cbp.png" alt="">
            </div>
            <h2 class="title">Dashboard</h2>

            <div class="ad-dropdown rFloat">
              <button class="ad-btn ad-flat ad-trigger"><i class="fa fa-ellipsis-v"></i></button>
              <div class="ad-content" style="right:0;">
                <div class="ad-card ad-block bg-white">
                  <div class="ad-list " style="min-width:200px;">

                    <div class="ad-item">
                      User Profile
                    </div>
                    <div class="ad-item">
                      Messages
                    </div>
                    <div class="ad-item">
                      Settings
                    </div>
                    <div class="ad-item ad-flat">
                      Logout
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <button type="button" name="button" class="ad-btn ad-flat rFloat "><i class="fa fa-bell-o"></i></button>

          </header>
          <div class="ad-subheader bg-white">
            <h2 class="">Sub-Header</h2>

            <!-- <button type="button" name="button" class="ad-fab btn-pink ad-mini rFloat"><i class="fa fa-plus"></i></button> -->

          </div>
          <h2 class="title">Body of Page or App</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>


        
        <div class="ad-card ad-block bg-white">
          <header class="ad-header bg-dark">
            <button class="ad-btn lFloat">
              <i class="fa fa-bars"></i>
            </button>
            <h2 class="title">Dashboard</h2>


          </header>
          <div class="ad-subheader bg-white">
            <h2 class="">Sub-Header</h2>

            <button type="button" name="button" class="ad-fab btn-pink ad-mini rFloat"><i class="fa fa-plus"></i></button>

          </div>
          <h2 class="title">Body of Page or App</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>



        <h2>Without AD-FAB</h2>

        <!-- END HERE -->
      </div>


    </div>
  </div>
</section>



<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
      <div class="ad-card ad-flat">
      
        <h1 class="title">Navigation</h1>
        <p>
        <code class="color-pink">ad-nav</code> was designed for website templating. it takes 
        div<code class="color-pink">.ad-logo</code> with an image element as the logo,
        div <code class="color-pink">ad-menu</code> containing ul and li elements for navigation and finally
        a  <code class="color-pink">menu-trigger</code> button for responsive-design.        
        </p>
        <p>
         Add <code class="color-pink">ad-fixed</code> to the   <code class="color-pink">ad-nav</code> class to fixed the navbar
         to the top of the window when user scrolls.

         <br>
         Or use  <code class="color-pink">ad-scrollFixed</code> class to only fix the navbar when the user scrolls to a certain scroll height.
        
        </p> 

        <p>
        <code class="color-pink">ad-nav</code> was writtent to be responsive, so as the device screen width gets smaller, the content in the
        <code class="color-pink">ad-menu</code> (which is for navigation or routing) collapse from view and are only displayed when the 
        user clicks on the menu button ( <code class="color-pink">menuTrigger button</code>)
        </p>
      </div>
      </div>
  

      <div class="ad-cols-8">

      <pre class="ad-code">
            <code>

              <span class="word">// For  ad-nav</span>

              &lt;nav <span class="class">class="ad-nav bg-dark"</span>&gt;

                &lt;div <span class="class">class="ad-logo" </span>&gt;
                  &lt;img <span class="id">src="logo.png" </span>/&gt;
                &lt;/div&gt;

                &lt;div <span class="class">class="ad-menu" </span>&gt;

                  &lt;ul <span class="class">class="ad-btn ad-flat" </span>&gt;
                    &lt;li <span class="class">class="active" </span>&gt;
                      <span class="word">Home</span>
                    &lt;/li&gt;
                    &lt;li &gt;
                      <span class="word">About</span>
                    &lt;/li&gt;
                    &lt;li &gt;
                      <span class="word">Service</span>
                    &lt;/li&gt;
                    &lt;li &gt;
                      <span class="word">Contact</span>
                    &lt;/li&gt;
                  &lt;/ul&gt;

                &lt;/div&gt;


                &lt;button <span class="class">class="ad-btn ad-flat clear" </span> <span class="id">id="menuTrigger" </span>&gt;
                    &lt;i <span class="class">class="fa fa-bars" </span>&gt;&lt;/i&gt;
                  &lt;/button&gt;


              &lt;/nav&gt;


            </code>
      </pre>


        <div class="ad-card ad-block bg-white">
          <header class="ad-nav bg-dark">
            <div class="ad-logo">
              <img src="<?=BaseUrl;?>media/images/logo/cbp.png" alt="">
            </div>

            <div class="ad-menu">

              <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Services</li>
                <li>Contact</li>
              </ul>
            </div>


          </header>

          <h2 class="title">Body of WebPage or App</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>

        <h2>With .SPREAD</h2>

        <div class="ad-card ad-block bg-white">
          <header class="ad-nav spread bg-dark">
            <div class="ad-logo">
              <img src="<?=BaseUrl;?>media/images/logo/cbp.png" alt="">
            </div>

            <div class="ad-menu">

              <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Services</li>
                <li>Contact</li>
              </ul>
            </div>


          </header>

          <h2 class="title">Body of WebPage or App</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>


      </div>
    </div>
  </div>
</section>

<ad-section class="bg-white">
  <ad-wrapper>
    <ad-row>
      <div class="ad-colx-12">
        <button type="button" name="button" routerLink="<?=BaseUrl;?>" class="ad-btn ad-flat ad-md btn-dark ad-round "><i class="fa fa-angle-left"></i> &nbsp; Introduction</button>
        <button type="button" name="button" routerLink="<?=BaseUrl;?>buttons" class="ad-btn ad-flat ad-md btn-blue ad-round rFloat">Buttons &nbsp; <i class="fa fa-angle-right"></i></button>
      </div>
    </ad-row>
  </ad-wrapper>
</ad-section>
