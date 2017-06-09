<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h2 id="button">Buttons</h2>
        <p>
          To add a button to your website or application, you add the class <span class="colorPink">ad-btn</span>.
          <br>
          This class can be applied to both the button and anchor element. The default comes with a plane button which shines when hovered upon.
          <button type="button" class="ad-btn" name="button">Hello Friend</button>

        </p>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn"</span>>Hello Friend</button>
          </code>
        </pre>
        <p>
          By default, the button shines the $prim color when its hovered over. This can be changed to each of the default colors.
          You just add the class name <span class="colorPink">shine-pink</span> then the button will show a pink glow when hovered over. The
          same applies to the other colors,



        </p>
        <!-- shine-[color] -->
        <div class="ad-card ad-flat whiteBG">
          <h3 class="title">Shine-[color]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <span class="colorPink">shine-prim</span>: will glow the $prim color when button is hovered over.
            </div>
            <div class="ad-item">
              <span class="colorPink">shine-pink</span>: will glow the $pink color when button is hovered over.
            </div>
            <div class="ad-item">
              <span class="colorPink">shine-tGreen</span>: will glow the $tgreen color when button is hovered over.
            </div>
            <div class="ad-item">
              <span class="colorPink">shine-yellow</span>: will glow the $yellow color when button is hovered over.
            </div>
            <div class="ad-item">
              <span class="colorPink">shine-dark</span>: will glow the $dark color when button is hovered over.
            </div>
          </div>

        </div>


        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn shine-yellow"</span>>Hello Friend</button>
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


<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h3>Button Colors</h3>
        <p>
          Adding color to a buttons removes the glow effect that happens when its hovered.
          To give the a background-color for a button, simply add the class <span>btn-[color]</span> where [color] is either prim, pink, tgreen, yellow, dark, blue , green, or red.
          A pink button would look like this:
          <br>
          <button class="ad-btn btn-pink">Pink button</button>
        </p>
        <!-- btn-[color] -->
        <div class="ad-card ad-flat whiteBG">
          <h3 class="title">Btn-[color]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <span class="colorPink">btn-prim</span>: will make the background-color of the button $prim.
            </div>
            <div class="ad-item">
              <span class="colorPink">btn-pink</span>: will make the background-color of the button $pink.
            </div>
            <div class="ad-item">
              <span class="colorPink">btn-tgreen</span>: will make the background-color of the button $tgreen.
            </div>
            <div class="ad-item">
              <span class="colorPink">btn-yellow</span>: will make the background-color of the button $yellow.
            </div>
            <div class="ad-item">
              <span class="colorPink">btn-dark</span>: will make the background-color of the button $dark.
            </div>
          </div>

        </div>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn btn-pink"</span>>Hello Friend</button>
          </code>
        </pre>
        Examples
        <br>
        <button class="ad-btn btn-prim">btn-prim</button>
        <button class="ad-btn btn-pink">btn-pink</button>
        <button class="ad-btn btn-yellow">btn-yellow</button>
        <button class="ad-btn btn-tgreen">btn-tgreen</button>
        <button class="ad-btn btn-dark">btn-dark</button>

        <div class="ad-card pinkBG">
          <p>Note!! Both btn-yellow and shine-yellow are best used on a dark background</p>
        </div>



      </div>
    </div>
  </div>

</section>


  <!-- Button Types -->
<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h3>Button Types</h3>
        <p>
          The default button type glows whenever the user hovers over it, it also has a curvy edge and a white background-color (though it could be changed). They are momets when your design theme or template does not match the default button style.
          You might want a flat design with blocky edge like Microsoft's Windows 10, or a full round sides like MAC OS.
          <br>
          airDesign's Key-Classes converts them to your desire. <span class="colorPink">ad-block</span> and <span class="colorPink">ad-round</span>. First we consider ad-block
        </p>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn btn-block"</span>>Hello Friend</button>
          </code>
        </pre>
        <button class="ad-btn ad-block" >Block button</button> : This buttons has the class <span class="colorPink">ad-block</span>, we see that the edges of the buttons are now straight.
        <br>
        The buttton still glows when its been hovered on, and there are some shadows on the edge of the button. to get ride this to a fully flat design, we add the key-class <span class="colorPink">ad-flat</span>
        <br>
        <button class="ad-btn ad-block ad-flat" >Block button</button> : Now that is a complete flat design button with blocky vertices just like the windows design style. Applying a color to the button now will make it more visible that its a flat ad blocky button
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn ad-block ad-flat btn-pink"</span>>Hello Friend</button>
          </code>
        </pre>
        Examples
        <br>
        <button class="ad-btn ad-block ad-flat btn-prim">btn-prim</button>
        <button class="ad-btn ad-block ad-flat  btn-pink">btn-pink</button>
        <button class="ad-btn ad-block ad-flat  btn-yellow">btn-yellow</button>
        <button class="ad-btn ad-block ad-flat  btn-tgreen">btn-tgreen</button>
        <button class="ad-btn ad-block ad-flat  btn-dark">btn-dark</button>


        <br>

        <!-- ad-round -->

        <p>
          Now we consider <span>ad-round</span>. Instead of <span class="colorPink">ad-block</span>, we use <span class="colorPink">ad-round</span>
        </p>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn btn-round"</span>>Hello Friend</button>
          </code>
        </pre>
        <button class="ad-btn ad-round" >Block button</button> : This buttons has the class <span class="colorPink">ad-round</span>, we see that the vertice of the buttons are completely curved.
        <br>
        The buttton still glows when its been hovered on, and there are some shadows on the edge of the button. to get ride this to a fully flat design, we add the key-class <span class="colorPink">ad-flat</span>
        <br>
        <button class="ad-btn ad-round ad-flat" >Block button</button> : Now that is a complete flat design button with curvy vertices just like the MAC OS design style. Applying a color to the button now will make it more visible that its a flat curvy button
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn ad-round ad-flat btn-pink"</span>>Hello Friend</button>
          </code>
        </pre>
        Examples
        <br>
        <button class="ad-btn ad-round ad-flat btn-prim">btn-prim</button>
        <button class="ad-btn ad-round ad-flat  btn-pink">btn-pink</button>
        <button class="ad-btn ad-round ad-flat  btn-yellow">btn-yellow</button>
        <button class="ad-btn ad-round ad-flat  btn-tgreen">btn-tgreen</button>
        <button class="ad-btn ad-round ad-flat  btn-dark">btn-dark</button>


      </div>
    </div>
  </div>



</section>


<!-- Button Style -->

<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h3>Button Style</h3>
        <p>
          At the moment, there are just two style to the button, <span class="colorPink">outline</span> and <span class="colorPink">clear</span>.
          <br>
          These classes are best implemented on buttons with colors and of type (either ad-block or ad-round).

        </p>
        <p>
          The <span class="colorPink">outline</span> uses the btn color for the button text and border, leaving the background-color of the button itself transparent. The button returns to normal when its hovered (no javascritp is used here, its purely CSS)
          <br>
          For Example :
          <br>
          Blocky button :<button class="ad-btn ad-block ad-flat  btn-pink">Normal button</button> <button class="ad-btn ad-block ad-flat btn-pink outline">Outline button</button>
          Curvy button :<button class="ad-btn ad-round ad-flat  btn-prim">Normal button</button> <button class="ad-btn ad-round ad-flat btn-prim outline">Outline button</button>

        </p>

        <p>
          The <span class="colorPink">clear</span> on the other hand uses the btn color for the button text, leaving the background-color of the button itself transparent. The text glows when its hovered
          <br>
          For Example :
          <br>
          Blocky button :<button class="ad-btn ad-block ad-flat  btn-pink">Normal button</button> <button class="ad-btn ad-block ad-flat btn-pink clear">Clear button</button>
          Curvy button :<button class="ad-btn ad-round ad-flat  btn-prim">Normal button</button> <button class="ad-btn ad-round ad-flat btn-prim clear">Clear button</button>

        </p>


      </div>
    </div>
  </div>


</section>



  <!-- Button Size -->

<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">

        <h3>Button Size</h3>
        Like any website or app, there are times you would prefer to use a big, medium or small button at a point in time.
        <!-- ad-[size] -->
        <div class="ad-card ad-flat whiteBG">
          <h3 class="title">ad-[size]</h3>
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <span class="colorPink">ad-xs</span>: changes the size of the button to extra-small.
            </div>
            <div class="ad-item">
              <span class="colorPink">ad-sm</span>: changes the size of the button to small.
            </div>
            <div class="ad-item">
              <span class="colorPink">ad-md</span>:  changes the size of the button to medium. Good for website design
            </div>
            <div class="ad-item">
              <span class="colorPink">ad-lg</span>:  changes the size of the button to large.
            </div>
            <div class="ad-item">
              <span class="colorPink">ad-nr</span>: changes the size of the button to normal (as specified by airDesign). This is the default button size
            </div>
            <div class="ad-item">
              <span class="colorPink">ad-full</span>:  strecthes the button to the full with of its container.
            </div>
          </div>

        </div>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-btn ad-block ad-md ad-flat  btn-dark"</span>>Hello Friend</button>
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
