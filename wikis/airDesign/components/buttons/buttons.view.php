<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">

      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
            <h1 class="title">Buttons</h1>

        <p>
          Buttons are an essential way to interact with and navigate through an app, and should clearly communicate what action will occur after the user taps them.
          Buttons can consist of text and/or an icon, and can be enhanced with a wide variety of attributes.
          <p/>
          <p>
For accessibility reasons, buttons use a standard <code>&lt;button&gt;</code> element, but are enhanced with an <code>ad-btn</code> class.
</p>
        <p>
          To add a button to your website or application, you add the class <code><span class="color-pink">ad-btn</span></code>.
          <br>
          This class can be applied to both the button and anchor element. The default comes with a plane button which shines when hovered upon.
          <button type="button" class="ad-btn" name="button">Hello Friend</button>

        </p>


        </div>
      </div>


      <div class="ad-cols-8">
      <pre>
            <code class='html'>
              <!--For Buttons-->
              &lt;button class="ad-btn"&gt;
                Hello Friend
              &lt;/button&gt;
            </code>
        </pre>
        <div class="ad-card ad-flat">

          <p>
            By default, the button shines the $prim color when its hovered over. This can be changed to each of the default colors.
            You just add the class name <code><span class="color-pink">shine-pink</span></code> then the button will show a pink glow when hovered over. The
            same applies to the other colors,



          </p>
        </div>
        <!-- shine-[color] -->
        <div class="ad-card ad-flat bg-white">
          <h3 class="title">Shine-[color]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <code><span class="color-pink">shine-prim</span></code> : will glow the $prim color when button is hovered over.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">shine-pink</span></code> : will glow the $pink color when button is hovered over.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">shine-tGreen</span></code> : will glow the $tgreen color when button is hovered over.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">shine-yellow</span></code> : will glow the $yellow color when button is hovered over.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">shine-dark</span></code> : will glow the $dark color when button is hovered over.
            </div>
          </div>

        </div>


        <pre>
          <code>
            <!--For Buttons-->
              &lt;button class="ad-btn shine-yellow"&gt;
                Shine Yellow
              &lt;/button&gt;

              &lt;button class="ad-btn shine-pink"&gt;
                Shine Pink
              &lt;/button&gt;

              &lt;button class="ad-btn shine-prim"&gt;
                Shine Primary
              &lt;/button&gt;

              &lt;button class="ad-btn shine-tgreen"&gt;
                Shine T-Green
              &lt;/button&gt;

              &lt;button class="ad-btn shine-dark"&gt;
                Shine Dark
              &lt;/button&gt;

          </code>
        </pre>

        Examples
        <br>
        <button class="ad-btn shine-prim">shine-prim</button>
        <button class="ad-btn shine-pink">shine-pink</button>
        <button class="ad-btn shine-yellow">shine-yellow</button>
        <button class="ad-btn shine-tgreen">shine-tgreen</button>
        <button class="ad-btn shine-dark">shine-dark</button>


      </div>
    </div>
  </div>


</section>



<section class="ad-section bg-white">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
            <h1 class="title">Button Colors</h1>
            <p>
              Adding color to a buttons removes the glow effect that happens when its hovered.
              To give the a background-color for a button, simply add the class <code><span class="color-pink">btn-[color]</span></code> where <code>[color]</code> is either prim, pink, tgreen, yellow, dark, blue , green, or red.
              A pink button would look like this:
              <br>
              <button class="ad-btn ad-flat btn-pink">Pink button</button>
            </p>
        </div>
      </div>
      <div class="ad-cols-8">


        <!-- btn-[color] -->
        <div class="ad-card  bg-white">
          <h3 class="title">Btn-[color]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <code><span class="color-pink">btn-prim</span></code> : will make the background-color of the button $prim.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">btn-pink</span></code> : will make the background-color of the button $pink.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">btn-tgreen</span></code> : will make the background-color of the button $tgreen.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">btn-yellow</span></code> : will make the background-color of the button $yellow.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">btn-dark</span></code> : will make the background-color of the button $dark.
            </div>
          </div>

        </div>
        <pre>
          <code>
            <!--For Buttons-->
            &lt;button class="ad-btn btn-prim"&gt;
              Primary
            &lt;/button&gt;

            &lt;button class="ad-btn btn-pink"&gt;
              Pink
            &lt;/button&gt;

            &lt;button class="ad-btn btn-tgreen"&gt;
              T-Green
            &lt;/button&gt;

            &lt;button class="ad-btn btn-yellow"&gt;
              Yellow
            &lt;/button&gt;

            &lt;button class="ad-btn btn-dark"&gt;
              Dark
            &lt;/button&gt;
          </code>
        </pre>

        <div class="ad-card bg-white">
          <h2 class="title">Examples</h2>
          <p>

            <button class="ad-btn btn-prim">btn-prim</button>
            <button class="ad-btn btn-pink">btn-pink</button>
            <button class="ad-btn btn-yellow">btn-yellow</button>
            <button class="ad-btn btn-tgreen">btn-tgreen</button>
            <button class="ad-btn btn-dark">btn-dark</button>

            <div class="ad-card ad-block bg-pink">
              <p>Note!! Both btn-yellow and shine-yellow are best used on a dark background</p>
            </div>
          </p>
        </div>




      </div>
    </div>
  </div>

</section>




  <!-- Button Types -->
<section class="ad-section bg-dark">
  <div class="wrapper">
    <div class="ad-row">

<div class="ad-cols-4">
  <div class="ad-card ad-flat">
      <h1 class="title">Button Types</h1>
      <p>
          The default button type glows whenever the user hovers over it, it also has a curvy edge and a white background-color (though it could be changed). They are moments when your design theme or template does not match the default button style.
          You might want a flat design with blocky edge like Microsoft's Windows 10, or a full round sides like MAC OS.
          <br>
          airDesign's Key-Classes converts them to your desire. <code><span class="color-tgreen">ad-block</span></code> and <code><span class="color-tgreen">ad-round</span></code>. First we consider <code>ad-block</code>
        </p>
  </div>
</div>
      <div class="ad-cols-8">

        <pre>
            <code>
              <!--For Buttons-->
              &lt;button class="ad-btn ad-block"&gt;
                Blocky Button
              &lt;/button&gt;
            </code>
        </pre>
        <div class="ad-card bg-dark">
          <p>

            <button class="ad-btn  ad-block" >Block button</button> : This buttons has the class <code><span class="color-pink">ad-block</span></code>, we see that the edges of the buttons are now straight.
            <br>
            The buttton still glows when its been hovered on, and there are some shadows on the edge of the button. to get ride this to a fully flat design, we add the key-class <code><span class="color-pink">ad-flat</span></code>
            <br>
            <button class="ad-btn btn-default  ad-block ad-flat" >Block button</button> : Now that is a complete flat design button with blocky vertices just like the windows design style. Applying a color to the button now will make it more visible that its a flat ad blocky button
          </p>

        </div>
        <pre>
            <code>
              <!--For Buttons-->
              &lt;button class="ad-btn ad-block ad-flat btn-pink"&gt;
                Pink Blocky Button
              &lt;/button&gt;
            </code>
        </pre>
        <div class="ad-card bg-white">

          <h2 class="title">Examples</h2>
          <p>

            <button class="ad-btn ad-block ad-flat btn-prim">btn-prim</button>
            <button class="ad-btn ad-block ad-flat  btn-pink">btn-pink</button>
            <button class="ad-btn ad-block ad-flat  btn-yellow">btn-yellow</button>
            <button class="ad-btn ad-block ad-flat  btn-tgreen">btn-tgreen</button>
            <button class="ad-btn ad-block ad-flat  btn-dark">btn-dark</button>
          </p>
        </div>


        <br>

        <!-- ad-round -->

        <p>
          Now we consider <code><span class="color-tgreen">ad-round</span></code>. Instead of <code><span class="color-tgreen">ad-block</span></code>, we use <code><span class="color-tgreen">ad-round</span></code>
        </p>
        <pre>
            <code>
              <!--For Buttons-->
              &lt;button <span class="class">class="ad-btn ad-round"</span>&gt;
                <span class="word">Round Button </span>
              &lt;/button&gt;
            </code>
        </pre>
        <div class="ad-card bg-dark">
          <p>

            <button class="ad-btn ad-round" >Block button</button> : This buttons has the class <code><span class="color-pink">ad-round</span></code>, we see that the vertice of the buttons are completely curved.
            <br>
            The buttton still glows when its been hovered on, and there are some shadows on the edge of the button. to get ride this to a fully flat design, we add the key-class <code><span class="color-pink">ad-flat</span></code>
            <br>
            <button class="ad-btn ad-round ad-flat" >Block button</button> : Now that is a complete flat design button with curvy vertices just like the MAC OS design style. Applying a color to the button now will make it more visible that its a flat curvy button
          </p>
        </div>
        <pre>
            <code>
              <!--For Buttons-->
              &lt;button class="ad-btn ad-round ad-flat btn-pink"&gt;
                Pink Button
              &lt;/button&gt;
            </code>
        </pre>

        <div class="ad-card bg-white">
          <h2 class="title"> Examples</h2>
          <p>

            <button class="ad-btn ad-round ad-flat btn-prim">btn-prim</button>
            <button class="ad-btn ad-round ad-flat  btn-pink">btn-pink</button>
            <button class="ad-btn ad-round ad-flat  btn-yellow">btn-yellow</button>
            <button class="ad-btn ad-round ad-flat  btn-tgreen">btn-tgreen</button>
            <button class="ad-btn ad-round ad-flat  btn-dark">btn-dark</button>
          </p>
        </div>



      </div>
    </div>
  </div>


</section>



<!-- Button Style -->

<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">

        <div class="ad-card ad-flat">
              <h1 class="title">Button Style</h1>
              <p>
              At the moment, there are just two style to the button, <code><span class="color-pink">outline</span></code> and <code><span class="color-pink">clear</span></code>.
              <br>
              These classes are best implemented on buttons with colors and of type (either <code>ad-block</code> or <code>ad-round</code>).

            </p>
            </div>
      </div>
      <div class="ad-cols-8">
       <div class="ad-card bg-white">

         <p>
           The <span class="color-pink">outline</span> uses the btn color for the button text and border, leaving the background-color of the button itself transparent. The button returns to normal when its hovered (no javascritp is used here, its purely CSS)
           <br>
           For Example :
           <br>
           Blocky button :<button class="ad-btn ad-block ad-flat  btn-pink">Normal button</button> <button class="ad-btn ad-block  btn-pink outline">Outline button</button>
           Curvy button :<button class="ad-btn ad-round ad-flat  btn-prim">Normal button</button> <button class="ad-btn ad-round btn-prim outline">Outline button</button>

         </p>

         <p>
           The <code><span class="color-pink">clear</span></code> on the other hand uses the btn color for the button text, leaving the background-color of the button itself transparent. The text glows when its hovered
           <br>
           For Example :
           <br>
           Blocky button :<button class="ad-btn ad-block ad-flat  btn-pink">Normal button</button> <button class="ad-btn ad-block ad-flat btn-pink clear">Clear button</button>
           Curvy button :<button class="ad-btn ad-round ad-flat  btn-prim">Normal button</button> <button class="ad-btn ad-round ad-flat btn-prim clear">Clear button</button>

         </p>
       </div>


      </div>
    </div>
  </div>


</section>



  <!-- Button Size -->

<section class="ad-section bg-white">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h1 class="title">Button Size</h1>
          <p>
          Like any website or app, there are times you would prefer to use a big,
          medium or small button at a point in time.
          </p>
        </div>

         <!-- ad-[size] -->
         <div class="ad-card ad-flat bg-white">
          <h3 class="title">ad-[size]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <code><span class="color-pink">ad-xs</span></code>  : changes the size of the button to extra-small.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-sm</span></code>  : changes the size of the button to small.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-md</span></code>  :  changes the size of the button to medium. Good for website design
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-lg</span></code>  :  changes the size of the button to large.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-nr</span></code>  : changes the size of the button to normal (as specified by airDesign). This is the default button size
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-full</span></code>  :  strecthes the button to the full with of its container.
            </div>
          </div>

        </div>
      </div>
      <div class="ad-cols-8">


        <pre>
            <code>
              <!--For Buttons-->
              &lt;button class="ad-btn ad-block ad-xs ad-flat btn-dark"&gt;
                Extra Small
              &lt;/button&gt;

              &lt;button class="ad-btn ad-block ad-flat btn-dark"&gt;
                Normal
              &lt;/button&gt;

              &lt;button class="ad-btn ad-block ad-sm ad-flat btn-dark"&gt;
                Small
              &lt;/button&gt;

              &lt;button class="ad-btn ad-block ad-md ad-flat btn-dark"&gt;
                Medium
              &lt;/button&gt;

              &lt;button class="ad-btn ad-block ad-lg ad-flat btn-dark"&gt;
                Large Button
              &lt;/button&gt;


            </code>
        </pre>
        Examples
        <br>
        <button class="ad-btn ad-block ad-xs ad-flat btn-dark">ad-xs</button>
        <button class="ad-btn ad-block ad-nr ad-flat  btn-dark">ad-nr</button>
        <button class="ad-btn ad-block ad-sm ad-flat  btn-dark">ad-sm</button>
        <button class="ad-btn ad-block ad-md ad-flat  btn-dark">ad-md</button>
        <button class="ad-btn ad-block ad-lg ad-flat  btn-dark">ad-lg</button>

        <button class="ad-btn ad-block ad-full ad-flat  btn-dark">ad-full</button>


      </div>
    </div>
  </div>

</section>


  <!-- Button Icons -->

  <section class="ad-section bg-white">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h1 class="title">ad-icon</h1>
          <p>
          Add the <span class="color-pink">ad-icon</span> a button if you want to only have an icon in the button.
          This class centers the icon <span class="color-pink">i.fa.fa-user</span> in the center of the button.
          </p>
        </div>



        </div>
      </div>
      <div class="ad-cols-8">


        <pre>
            <code>
              <!--For Buttons-->
              &lt;button class="ad-btn ad-round ad-icon btn-dark"&gt;

                &lt;i class="fa fa-user"&gt;&lt;/i&gt;

              &lt;/button&gt;


            </code>
        </pre>
        Result:
        <br>
        <h2 class="ad-title text-normal">
         button <b>with</b> <span class="color-pink">ad-icon</span>
        </h2>
        <button class="ad-btn ad-round btn-dark ad-icon">
          <i class="fa fa-user"></i>
        </button>

        <button class="ad-btn ad-round btn-blue ad-icon">
          <i class="fa fa-angle-up"></i>
        </button>

        <button class="ad-btn ad-round btn-default ad-icon">
          <i class="fa fa-twitter"></i>
        </button>
        <p>
          Use ad-icon for a button that only contains an icon
        </p>
        <br>
        <h2 class="ad-title text-normal">
         button <b>without</b> <span class="color-pink">ad-icon</span>
        </h2>
        <button class="ad-btn ad-round btn-dark">
        <i class="fa fa-user"></i>
      </button>

      <button class="ad-btn ad-round btn-blue">
        <i class="fa fa-angle-up"></i>
      </button>

      <button class="ad-btn ad-round btn-default">
        <i class="fa fa-twitter"></i>
      </button>

      <p>
          Such buttons are best used with  icons and texts like so
          <button class="ad-btn ad-round btn-blue">
        <i class="fa fa-twitter"></i> Twitter
      </button>
      </p>
      </div>
    </div>
  </div>

</section>


  <!-- Button Group -->

  <section class="ad-section bg-white">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h1 class="title">Button Group (ad-btn-group)</h1>
          <p>
            To use button group (<code class="color-pink">ad-btn-group</code> ), wrap buttons in a div with the <code class="color-pink">ad-btn-group</code>
            class.
            the button style <code class="color-pink">ad-block</code> and <code class="color-pink">ad-round</code> can also be applied to the button group.
          </p>
        </div>



        </div>
      </div>
      <div class="ad-cols-8">


        <pre>
            <code>
              <!--For Buttons-->
              &lt;div class="ad-btn-group"&gt;

                &lt;button class="ad-btn ad-icon btn-dark"&gt;
                  &lt;i class="fa fa-search"&gt;&lt;/i&gt;
                &lt;/button&gt;

                &lt;button class="ad-btn ad-icon btn-blue"&gt;
                  &lt;i class="fa fa-bell-o"&gt;&lt;/i&gt;
                &lt;/button&gt;

                &lt;button class="ad-btn ad-icon btn-default"&gt;
                  &lt;i class="fa fa-envelope-o"&gt;&lt;/i&gt;
                &lt;/button&gt;

              &lt;/div&gt;

            </code>
        </pre>
        Result:
        <br>
       <div class="ad-btn-group">

        <button class="ad-btn btn-dark ad-icon">
          <i class="fa fa-user"></i>
        </button>

        <button class="ad-btn btn-blue ad-icon">
          <i class="fa fa-angle-up"></i>
        </button>

        <button class="ad-btn btn-default ad-icon">
          <i class="fa fa-twitter"></i>
        </button>
       </div>
        <p>
          Button colors can be applied individually to the buttons in the group
        </p>
        <br>
        <h2 class="ad-title text-normal">
         Adding <span class="color-pink">ad-round</span>
        </h2>

        <pre>
            <code>
              <!--For Buttons-->
              &lt;div <span class="class">class="ad-btn-group ad-round"</span>&gt;

                &lt;button <span class="class">class="ad-btn ad-icon btn-dark"</span>&gt;
                  &lt;i <span class="class">class="fa fa-search"</span>&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button <span class="class">class="ad-btn ad-icon btn-dark"</span>&gt;
                  &lt;i <span class="class">class="fa fa-bell-o"</span>&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;button <span class="class">class="ad-btn ad-icon btn-dark"</span>&gt;
                  &lt;i <span class="class">class="fa fa-envelope-o"</span>&gt;&lt;/i&gt;
                &lt;/button&gt;

              &lt;/div&gt;

            </code>
        </pre>

  Result:
  <br>
        <div class="ad-btn-group ad-round">

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-search"></i>
         </button>

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-bell-o"></i>
         </button>

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-envelope-o"></i>
         </button>
        </div>


        Replace ad-round with ad-block:
  <br>
        <div class="ad-btn-group ad-block">

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-search"></i>
         </button>

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-bell-o"></i>
         </button>

         <button class="ad-btn btn-dark ad-icon">
           <i class="fa fa-envelope-o"></i>
         </button>
        </div>

        Text in Button:
  <br>
        <div class="ad-btn-group ad-round">

         <button class="ad-btn btn-blue">
           <i class="fa fa-search"></i> &nbsp; Search
         </button>

         <button class="ad-btn btn-blue">
           <i class="fa fa-bell-o"></i> &nbsp; Notify
         </button>

         <button class="ad-btn btn-blue ">
           <i class="fa fa-envelope-o"></i> &nbsp; Messages
         </button>
        </div>
      </div>
    </div>
  </div>

</section>



<ad-section class="bg-white">
  <ad-wrapper>
    <ad-row>
      <div class="ad-colx-12">
        <button type="button" name="button" routerLink="<?=BaseUrl;?>headers_navs" class="ad-btn ad-flat ad-md btn-dark ad-round  "><i class="fa fa-angle-left"></i> &nbsp; Header & Navigation </button>
        <button type="button" name="button" routerLink="<?=BaseUrl;?>cards_tiles" class="ad-btn ad-flat ad-md btn-blue ad-round  rFloat">Cards & Tiles &nbsp; <i class="fa fa-angle-right"></i></button>
      </div>
    </ad-row>
  </ad-wrapper>
</ad-section>
