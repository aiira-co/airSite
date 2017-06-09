<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h2 id="card">Cards & Tiles</h2>
        <p>
          Cards are containers that houses other elements, they are used through this entire site. T o use cards, add the class
          <span class="colorPink">ad-card</span> to a div.
          <br>
          <span class="colorPink">ad-card</span> comes with a transparent background, border-radius of about 3px and a shadow. This could be change to fit your design
          style for blocky vertice, round vertice and flat design. These changes can be achieved with the key-classes.
        </p>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-card"</span>>Hello Friend</button>
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-4">
            <div class="ad-card">
              <p>Default Card</p>
            </div>
          </div>
          <div class="ad-cols-4">
            <div class="ad-card ad-block">
              <p>Default Card</p>
            </div>
          </div>
          <div class="ad-cols-4">
            <div class="ad-card ad-round">
              <p>Default Card</p>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <p>
          The card container affects two html elements with a margin: <span class="colorPink">p</span> and <span class="colorPink">h2.title</span>. Apart from these, any element called in this class starts from the edges of the container since
          <span class="colorPink">ad-card</span> has no padding.
        </p>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-card"</span>>Hello Friend</button>
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card">
              <h2>Head without class title</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card">
              <h2 class="title">Head with class title</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>

        <div class="clearfix">

        </div>


      </div>
    </div>
  </div>
</section>




 <section class="ad-section">
   <div class="wrapper">
     <div class="ad-row">
       <div class="ad-colx-12">





         <h3>Card Colors</h3>
         <p>
           Cards also can have background-color(s) applied to them. We have written a few classes with commonly used background-color to do that. These background classes are not limited to cards, they can be applied to all containers like
           <span class="colorPink">section</span>, <span class="colorPink">div</span>, <span class="colorPink">header</span>, <span class="colorPink">nav</span>, <span class="colorPink">body</span> etc.
         </p>

         <div class="ad-card ad-flat whiteBG">
           <div class="ad-list ad-sm ad-strip ad-flat">
             <div class="ad-item">
             <span class="colorPink">whiteBG</span>: makes the background-color of the container white and font color $dark
           </div>
             <div class="ad-item">
             <span class="colorPink">darkBG</span>: makes the background-color of the container $dark and font color white
           </div>
             <div class="ad-item">
             <span class="colorPink">primBG</span>: makes the background-color of the container $prim and font color white
           </div>
             <div class="ad-item">
             <span class="colorPink">pinkBG</span>: makes the background-color of the container $pink and font color $dark
           </div>
             <div class="ad-item">
             <span class="colorPink">tgreenBG</span>: makes the background-color of the container $tgreen and font color white
           </div>
             <div class="ad-item">
             <span class="colorPink">yellowBG</span>: makes the background-color of the container $yellow and font color $dark
           </div>
             <div class="ad-item">
             <span class="colorPink">redBG</span>: makes the background-color of the container $red and font color black
           </div>
             <div class="ad-item">
             <span class="colorPink">blueBG</span>: makes the background-color of the container $blue and font color white
           </div>
           </div>
         </div>
         <pre class="ad-code">
           <code>
             <!--For Buttons-->
             &splt;button <span class="class">class="ad-card  [color]BG"</span>>Hello Friend</button>
           </code>
         </pre>

         <p>
           Examples:
         </p>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card whiteBG">
               <p>Default Card, with whiteBG</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card  darkBG">
               <p>Default Card with darkBG</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card pinkBG">
               <p>Default Card with pinkBG</p>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>

         <p>
           To get rid of the shadows, you add the key-class <span class="colorPink">ad-flat</span>
         </p>
         <pre class="ad-code">
           <code>
             <!--For Buttons-->
             &splt;button <span class="class">class="ad-card ad-flat  [color]BG"</span>>Hello Friend</button>
           </code>
         </pre>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card whiteBG">
               <p>Default Card, without ad-flat</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-flat whiteBG">
               <p>Default Card with ad-flat</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-flat outline-dark">
               <p>Default Card with ad-flat and outline-dark</p>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>

         <p>
           You notice that cards have margins, to make the card fill the width of its container 100% without any margin, you add the class <span class="colorPink">ad-full</span>
         </p>
         <pre class="ad-code">
           <code>
             <!--For Buttons-->
             &splt;button <span class="class">class="ad-card ad-flat ad-full [color]BG"</span>>Hello Friend</button>
           </code>
         </pre>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card ad-flat ad-full whiteBG">
               <p>Yes!!! -- with ad-full</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-full ad-flat darkBG">
               <p>DarkBG --- with ad-full</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-full ad-flat primBG">
               <p>Hello Ghana  with ad-full</p>
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
       <div class="ad-colx-12">



         <h3>Cards with Items</h3>
         <p>
          Cards can have items arranged to display a specific infomation like News, Social Media Post, videos etc.
          <br>
          Here are some examples to consider the use of cards and items to achieve your goal
         </p>

         <div class="ad-row">
          <div class="ad-cols-4">
            <div class="ad-card whiteBG">
              <div class="ad-item ad-avatar ad-flat">
                <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                <h2>Chris Angels</h2>
                <p>10 minutes ago</p>
              </div>

              <div class="ad-image">
                <img src="<?=BaseUrl;?>media/images/banner.jpg" class="img-responsive" alt="">
              </div>
              <!-- <p>
                This is my new screen guys..
              </p> -->

              <div class="ad-input ad-block ad-label">
                <label for="">Leave a comment</label>
                <input type="text" name="" value="">
              </div>
            </div>
          </div>


          <div class="ad-cols-4">
            <div class="ad-card whiteBG">
              <div class="ad-item ad-image">
                <img src="<?=BaseUrl;?>media/images/banner.jpg" class="img-responsive" alt="">
              </div>
              <h3 class="title">airDesign Releases new ScreenOS </h3>
              <p>
                Lorem ipsum dolor sit amet,bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor .
              </p>
              <a href="#" class="ad-btn"> Read More>></a>
            </div>
          </div>
          <div class="ad-cols-4">
            <div class="ad-card darkBG">
              <div class="ad-item ad-image">
                <img src="<?=BaseUrl;?>media/images/banner.jpg" class="img-responsive" alt="">
              </div>
              <h3 class="title">Albums </h3>
              <div class="ad-list ad-strip-white ad-flat ad-sm">

                <div class="ad-item ad-icon ad-badge">
                  <i class="fa fa-play-circle"></i><span>Walk Away</span><small class="badge">4:36 min</small>
                </div>
                <div class="ad-item ad-icon ad-badge">
                  <i class="fa fa-play-circle"></i><span>Cross Roads</span><small class="badge">3:59 min</small>
                </div>
                <div class="ad-item ad-icon ad-badge">
                  <i class="fa fa-play-circle"></i><span>Say Something</span><small class="badge">2:57 min</small>
                </div>
              </div>
              <a href="#" class="ad-btn btn-yellow clear"> <i class="fa fa-user-circle-o"></i> &nbsp; John Germani</a>
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
       <div class="ad-colx-12">



         <h3>Tiles</h3>
         <p>
           Tiles in instance of a card would be <span class="colorPink">ad-card ad-block ad-flat ad-full</span>. Tiles have no shadow, no margin nor padding.
           Add <span class="colorPink">ad-tile</span> to a div element to use tiles. Best practice is to use them for gallery.
         </p>

       </div>
     </div>
   </div>
 </section>
