<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h2 id="card">Cards & Tiles</h2>
        <p>
          Cards are containers that houses other elements, they are used through this entire site. To use cards, add the class
          <code><span class="color-pink">ad-card</span></code> to a div.
          <br>
          <code><span class="color-pink">ad-card</span></code> comes with a transparent background, border-radius of about 3px and a shadow. This could be change to fit your design
          style for blocky vertice, round vertice and flat design. These changes can be achieved with the key-classes.
        </p>

        <pre class="ad-code">
          <code>

            &lt;div class="ad-card"&gt;
              Default Card
            &lt;/div&gt;



            //customElement - airlements
            &lt;ad-card &gt;
              airlement card
            &lt;/ad-card&gt;
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
          The card container affects two html elements with a margin: <code><span class="color-pink">  &lt;p&gt;</span></code> and <code><span class="color-pink">  &lt;h2 class="title"&gt;</span></code>. Apart from these, any element called in this class starts from the edges of the container since
          <code><span class="color-pink">ad-card</span></code> has no padding.
        </p>
        <pre class="ad-code">
          <code>
            &lt;div class="ad-card"&gt;

              &lt;h2 class="title"&gt; Head with ad-title &lt;/h2&gt;

              &lt;p&gt;
                Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit...
              &lt;p&gt;

            &lt;/div&gt;



          //customElement - airlements
            &lt;ad-card &gt;

              &lt;h2 class="title"&gt; Head with ad-title &lt;/h2&gt;

              &lt;p&gt;
                Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit...
              &lt;p&gt;

            &lt;/ad-card&gt;
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
           <code><span class="color-pink">&lt;section&gt;</span></code>, <code><span class="color-pink">&lt;div&gt;</span></code>, <code><span class="color-pink">&lt;header&gt;</span></code>, <code><span class="color-pink">&lt;nav&gt;</span></code>, <code><span class="color-pink">&lt;body&gt;</span></code> etc.
         </p>

         <div class="ad-card ad-flat bg-white">
           <div class="ad-list ad-sm ad-strip ad-flat">
             <div class="ad-item">
             <code><span class="color-pink">bg-white</span></code> : makes the background-color of the container white and font color $dark
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-dark</span></code>  : makes the background-color of the container $dark and font color white
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-prim</span></code>  : makes the background-color of the container $prim and font color white
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-pink</span></code>  : makes the background-color of the container $pink and font color $dark
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-tgreen</span></code>  : makes the background-color of the container $tgreen and font color white
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-yellow</span></code>  : makes the background-color of the container $yellow and font color $dark
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-red</span></code> : makes the background-color of the container $red and font color black
           </div>
             <div class="ad-item">
             <code><span class="color-pink">bg-blue</span></code>  : makes the background-color of the container $blue and font color white
           </div>
           </div>
         </div>
         <pre class="ad-code">
           <code>

             &lt;div class="ad-card  bg-[color]"&gt;
              Hello Friend
            &lt;/div&gt;



            //comes with .bg-white as default
             &lt;ad-card class="bg-[color]" &gt;
              Card
            &lt;/ad-card&gt;
           </code>
         </pre>

         <p>
           Examples:
         </p>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card bg-white">
               <p>Default Card, with bg-white</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card  bg-dark">
               <p>Default Card with bg-dark</p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card bg-pink">
               <p>Default Card with bg-pink</p>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>
         <!-- AD_SM -->


         <h4>No Shadow (ad-flat)</h4>

         <p>
           To get rid of the shadows, you add the key-class <code><span class="color-pink">ad-flat</span></code>
         </p>
         <pre class="ad-code">
           <code>
             &lt;div class="ad-card ad-flat bg-[color]"&gt;
              Flat Card
            &lt;/div&gt;



            //customElement
             &lt;ad-card class="ad-flat bg-[color]" &gt;
              flat airlement card
            &lt;/ad-card&gt;

           </code>
         </pre>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card bg-white">
               <p>Default Card, without <code>ad-flat</code></p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-flat bg-white">
               <p>Default Card with <code>ad-flat</code></p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-flat outline ">
               <p>Default Card with <code>ad-flat</code> and <code>outline</code></p>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>

         <p>
           You notice that cards have margins, to make the card fill the width of its container 100% without any margin, you add the class <code><span class="color-pink">ad-full</span></code>
         </p>
         <pre class="ad-code">
           <code>

             &lt;div class="ad-card ad-flat ad-full bg-[color]"&gt;
              Full Card
            &lt;/div&gt;



            //customElement - airlements
             &lt;ad-card class="ad-flat ad-full bg-[color]" &gt;
              Full airlement card
            &lt;/ad-card&gt;

           </code>
         </pre>

         <div class="ad-row">
           <div class="ad-cols-4">
             <div class="ad-card ad-flat ad-full bg-white">
               <p>Yes!!! -- with <code>ad-full</code></p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-full ad-flat bg-dark">
               <p>bg-dark --- with <code>ad-full</code></p>
             </div>
           </div>
           <div class="ad-cols-4">
             <div class="ad-card ad-full ad-flat bg-prim">
               <p>Hello Ghana  with <code>ad-full</code></p>
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
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class="title">Outline</h2>
          <p>
            <span class="color-pink"><code>outline</code></span> class is used in an element
            to further refine the shape of the element (eg card). The default class
            <span class="color-pink"><code>outline</code></span> gives a dark color around the edges of the element.

          </p>
          <p>
            We can further change the color of the outline to prim, pink, tgreen, yellow, blue, red etc by adding
            <span class="color-pink"><code>outline-[color]</code></span> to the element after adding the <span class="color-pink"><code>outline</code></span> class itself
          </p>
        </div>
      </div>

      <div class="ad-cols-8">
      <pre class="ad-code">
           <code>

             &lt;div class="ad-card bg-white outline"&gt;
              Default outline
            &lt;/div&gt;



            //customElement - airlements
             &lt;ad-card class="bg-white outline" &gt;
              Full airlement card
            &lt;/ad-card&gt;

           </code>
         </pre>


  <div class="ad-card ad-flat">
    <h2 class="title">Result</h2>
    <div class="ad-card bg-white">
      <p>Default without outline </p>
    </div>

    <div class="ad-card bg-white outline">
      <p>Default outline </p>
    </div>
  </div>

  <h2 class="ad-title">Change outline color</h2>

  <pre class="ad-code">
           <code>

             &lt;div class="ad-card bg-white outline outline-pink"&gt;
               Pink outline
            &lt;/div&gt;


            &lt;div class="ad-card bg-white outline outline-yellow"&gt;
               Yellow outline
            &lt;/div&gt;


            &lt;div class="ad-card bg-white outline outline-tgreen"&gt;
              tGreen outline
            &lt;/div&gt;



           </code>
         </pre>


    <div class="ad-row">

      <div class="ad-colx-4">
        <div class="ad-card bg-white outline outline-pink">
          <p>Pink Outline</p>
        </div>
      </div>

      <div class="ad-colx-4">
        <div class="ad-card bg-white outline outline-yellow">
          <p>Yellow Outline</p>
        </div>
      </div>

      <div class="ad-colx-4">
        <div class="ad-card bg-white outline outline-tgreen">
          <p>$tGreen Outline</p>
        </div>
      </div>


    </div>


<h2 class="ad-title">Card with ad-shadow and outline</h2>
<p>
  The class <span class="color-pink"><code>ad-shadow</code></span> can be applied to any element, specifically ad-card and ad-btn.
  This causes a shadow effect to the element, raising it above other element. Mostly used for emphasis among similar elements
</p>
<pre class="ad-code">
           <code>

             &lt;div class="ad-card bg-white outline"</span>&gt;
               Default outline without ad-shadow</span>
            &lt;/div&gt;


            &lt;div class="ad-card bg-white ad-shadow outline"</span>&gt;
               Default outline with ad-shadow</span>
            &lt;/div&gt;




           </code>
         </pre>



         <div class="ad-row">

      <div class="ad-colx-4">
        <div class="ad-card bg-white ad-shadow">
          <p>Default card with ad-shadow</p>
        </div>
      </div>

      <div class="ad-colx-4">
        <div class="ad-card bg-white outline">
          <p>Default outline, no ad-shadow</p>
        </div>
      </div>

      <div class="ad-colx-4">
        <div class="ad-card bg-white outline ad-shadow">
          <p>Default outline with ad-shadow</p>
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
            <div class="ad-card ad-round ad-shadow ad-center bg-white">
              <div class="ad-item ad-avatar ad-flat ad-button">
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                <h2>Chris Angels</h2>
                <p>10 minutes ago</p>

                <button class="ad-btn ad-flat">
                  <i class="fa fa-angle-down"></i>
                </button>
              </div>

              <div class="ad-image">
                <img src="<?=CDN;?>images/bg.jpg" class="img-responsive" alt="">
              </div>
              <!-- <p>
                This is my new screen guys..
              </p> -->
              <p>
                <button class="ad-btn ad-round ad-flat btn-pink outline">
                  <i class="fa fa-heart-o"></i> 32
                </button>

                <button class="ad-btn ad-flat  outline">
                  <i class="fa fa-comment-o"></i> 373
                </button>

                <button class="ad-btn ad-flat  rFloat outline">
                  <i class="fa fa-share"></i> 7
                </button>
              </p>

              <div class="ad-input ad-round ad-icon">
              <span>
                <i class="fa fa-camera"></i>
              </span>
                <input type="text" name="" value="" placeholder="Write your comment">
              </div>
            </div>
          </div>


          <div class="ad-cols-4">
            <div class="ad-card ad-flat text-center ad-center">

              <div class="ad-card ad-img ad-flat ad-shadow">
                <img src="<?=CDN;?>images/bg.jpg" class="img-responsive" alt="">
              </div>
              <h3 class="title">airDesign Releases new ScreenOS </h3>
              <p>
                Lorem ipsum dolor sit amet,bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor .
              </p>
              <a href="#" class="ad-btn btn-blue ad-icon ad-round ad-shadow">
                <i class="fa fa-angle-up"></i>
              </a>
            </div>
          </div>
          <div class="ad-cols-4">

          <div class="ad-card ad-flat">

            <div class="ad-card ad-round ad-center bg-dark">
            <br>
              <div class="ad-header ad-flat">
                <h1 class="title">Favourite</h1>
                <button class="ad-btn ad-icon ad-flat rFloat">
                  <i class="fa fa-ellipsis-v"></i>
                </button>
              </div>
              <div class="ad-input ad-round ad-button input-blue">
                <input type="text" placeholder="Search Music">
                <button class="ad-btn ad-round ad-flat btn-blue outline ad-icon">
                  <i class="fa fa-angle-right"></i>
                </button>
              </div>
              <div class="ad-list ad-sm">

                <div class="ad-item ad-button">
                  <h2 class="text-normal">Walk Away</h2>
                    Aly Frank
                  <button class="ad-btn ad-round ad-flat btn-blue outline">
                    <i class="fa fa-angle-right"></i>
                  </button>
                </div>

                <div class="ad-item ad-button">
                  <h2 class="text-normal">Princes Glass</h2>
                  Maria Carley

                  <button class="ad-btn ad-round ad-flat btn-blue outline">
                    <i class="fa fa-angle-right"></i>
                  </button>
                </div>


                  <div class="ad-item ad-button">
                  <h2 class="text-normal">Cross Road</h2>
                    Fridays
                  <button class="ad-btn ad-round ad-flat btn-blue outline">
                    <i class="fa fa-angle-right"></i>
                  </button>
                </div>

                <div class="ad-item ad-button">
                <h2 class="text-normal">Sincere</h2>
                  Jon Bellion
                <button class="ad-btn ad-round ad-flat btn-blue outline">
                  <i class="fa fa-angle-right"></i>
                </button>
              </div>
              </div>

            <br>
            <br>
            </div>

            <div class="text-center" style="transform:translateY(-75px);">
                <a href="#" class="ad-btn btn-blue ad-icon ad-round ad-shadow"> <i class="fa fa-angle-up"></i></a>
              </div>
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
           Tiles in instance of a card would be <code><span class="color-pink">ad-card ad-block ad-flat ad-full</span></code>. Tiles have no shadow, no margin nor padding.
           Add <code><span class="color-pink">ad-tile</span></code> to a div element to use tiles. Best practice is to use them for gallery.
         </p>

       </div>
     </div>
   </div>
 </section>

 <ad-section class="bg-white">
   <ad-wrapper>
     <ad-row>
       <div class="ad-colx-12">
         <button type="button" name="button" routerLink="<?=BaseUrl;?>buttons" class="ad-btn ad-flat ad-md btn-dark ad-round "><i class="fa fa-angle-left"></i> &nbsp; Buttons </button>
         <button type="button" name="button" routerLink="<?=BaseUrl;?>lists_items" class="ad-btn ad-flat ad-md btn-blue ad-round rFloat">List & Items &nbsp; <i class="fa fa-angle-right"></i></button>
       </div>
     </ad-row>
   </ad-wrapper>
 </ad-section>
