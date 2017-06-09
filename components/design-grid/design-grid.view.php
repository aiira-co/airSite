<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">


        <h2 id="grid">Grid System</h2>
        <p>
          The grid system is made up of rows and columns which defines the percentage of screeen space dedicated to an element from a large desktop screen to small mobile screen size.
          <br>
          To use the grid system, we first define their parent container class which is <span class="colorPink">wrapper</span> or <span class="colorPink">wrapper-fluid</span>
        </p>

        <p>
          <span class="colorPink">wrapper</span> takes about 80% of the screen size and centers the content within it. This is best used for website projects while <span class="colorPink">wrapper-fluid</span> uses the entire width of <thead>
            browser's screen size: best used for web application projects.
          </thead>
        </p>

        <p>
          We strongly advise that the grid system be called within a <span class="colorPink">section</span> element (expecially if its a website) like so:
        </p>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            section<span class="class">></span>div<span class="class">.wrapper</span> <i class="word">//For wrapper class</i>
            <br>
            section<span class="class">></span>div<span class="class">.wrapper-fluid</span> <i class="word">//For wrapper-fluid class</i>
          </code>
        </pre>

        <p>
          This keeps the code clean!
          <br>
          After the wrapper, we can now specify the row then the columns.
          The grid system behaves like tables, or matrice, columns goes within a row. To add a row, we use the class
          <span class="colorPink">ad-row</span>.
          <br>
          This sets the system ready to implement columns.
        </p>

        <div class="ad-card ad-flat whiteBG">
          <h2 class="title">Recap</h2>
          <p>
            Section<span class="colorPink">.ad-section</span> -> div<span class="colorPink">.wrapper</span> -> div<span class="colorPink">.ad-row</span> -> div<span class="colorPink">.ad-cols-12</span>
          </p>
        </div>


        <p>
          Section can take your custom class to target elements you want to style in that section. We have provided a class <span class="colorPink">ad-section</span> to apply to section element if you want to have the element give a padding and to set it shape well.
          <span class="colorPink">ad-section</span> sets the section element display property to inline-block, a width of 100% and a 50px padding. if you dont want the padding, you can a default class <span class="colorPink">no-padding</span> to take off the padding.
        </p>
        <p>
          Remember that the background-color classes like <span class="colorPink">whiteBG</span> and <span class="colorPink">darkBG</span> can be applied to the sections as well
        </p>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            section<span class="class">.ad-section.darkBG</span><span class="class">></span>div<span class="class">.wrapper</span> <i class="word">//For wrapper class</i>
            <br>

          </code>
        </pre>

        <p>
          Produces:
        </p>
        <section class="ad-section darkBG">
          <div class="ad-row">
            <div class="ad-cols-12">
              <p>Herer...</p>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
</section>


<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">


        <h3>Columns</h3>
        <p>
          The total width of a row is divided into 12 columns. Columns widthin a row starts with the class name
          <span class="colorPink">ad-col[screen-size]-[column-size]</span>. Having multipe columns on a div triggers responsiveness.
          <br> eg. div<span class="colorPink">.ad-coll-6.ad-colm-4.ad-cols-8.ad-colx-12</span> will result in
        </p>

        <div class="ad-list">
          <div class="ad-item">
            First: When the page finds itself on a higher resolution of a desktop screen, it takes on .ad-coll-6
          </div>
          <div class="ad-item">
            Second: When the page finds itself on a tablet or a tablet size brower on desktop screen, it takes on .ad-colm-4
          </div>
          <div class="ad-item">
            For phone like the Nexus. ad-cols-8 is taken then finnally ad-colx-12 for small screen or browser
          </div>
        </div>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Screen-Size</h2>
              <div class="ad-list ad-sm ad-strip ad-flat">
                <div class="ad-item">
                <span class="colorPink">ad-colx-[column-size]</span> : will apply to extra-small screen resolutions(mobile phones).
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-cols-[column-size]</span> : will apply to small screen resolutions(mobile phones).
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-colm-[column-size]</span> : will apply to medium screen resolutions(tablet).
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-coll-[column-size]</span> : will apply to large screen resolutions(Desktop).
              </div>
              </div>

            </div>
          </div>

          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Column-Size</h2>
              <div class="ad-list ad-sm ad-strip ad-flat">
                <div class="ad-item">
                <span class="colorPink">ad-col[screen-size]-12</span> : will take full width of the column.
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-col[screen-size]-6</span> : will take half of the row width. 2 of these in a row matche up to 12 which is perfect
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-col[screen-size]-3</span> : will take 1/4 of the row width. 4 of these in a row matche up to 12 which is perfect
              </div>
                <div class="ad-item">
                <span class="colorPink">ad-col[screen-size]-4</span> : ill take 1/3 of the row width. 3 of these in a row matche up to 12 which is perfect
              </div>
            </div>


            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>





<section>
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">



        <h4>Full Width, ad-cols-12</h4>
        <div class="ad-row">
        <div class="ad-cols-12">
          <div class="ad-card whiteBG">
            <p>ad-cols-12</p>
          </div>
        </div>
        </div>
        <div class="clearfix">

        </div>

        <h4>Half Width, ad-cols-6</h4>
        <div class="ad-row">
        <div class="ad-cols-6">
        <div class="ad-card whiteBG">
          <p>ad-cols-6</p>
        </div>
        </div>

        <div class="ad-cols-6">
        <div class="ad-card whiteBG">
          <p>ad-cols-6</p>
        </div>
        </div>
        </div>
        <div class="clearfix">

        </div>

        <h4>1/3rd Width, ad-cols-4</h4>
        <div class="ad-row">
        <div class="ad-cols-4">
        <div class="ad-card whiteBG">
        <p>ad-cols-4</p>
        </div>
        </div>
        <div class="ad-cols-4">
        <div class="ad-card whiteBG">
        <p>ad-cols-4</p>
        </div>
        </div>
        <div class="ad-cols-4">
        <div class="ad-card whiteBG">
        <p>ad-cols-4</p>
        </div>
        </div>
        </div>
        <div class="clearfix">

        </div>

        <h4>1/4th Width, ad-cols-3</h4>
        <div class="ad-row">
        <div class="ad-cols-3">
        <div class="ad-card whiteBG">
        <p>ad-cols-3</p>
        </div>
        </div>

        <div class="ad-cols-3">
        <div class="ad-card whiteBG">
        <p>ad-cols-3</p>
        </div>
        </div>
        <div class="ad-cols-3">
        <div class="ad-card whiteBG">
        <p>ad-cols-3</p>
        </div>
        </div>

        <div class="ad-cols-3">
        <div class="ad-card whiteBG">
        <p>ad-cols-3</p>
        </div>
        </div>
        </div>


      </div>
    </div>
  </div>
</section>





<section>
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">



        <h4>Mixed Columns</h4>
        <p>
          The trick is that, the column-size should sum up to 12.
          <br>
          Hence
          <span class="colorPink">ad-cols-3</span> also matches up with <span class="colorPink">ad-cols-7</span>: column-size 3 + 7 = 12
          <br>
          <span class="colorPink">ad-cols-2</span> also matches up with <span class="colorPink">ad-cols-10</span>: column-size 2 + 10 = 12
          <br>
          <span class="colorPink">ad-cols-6</span> also matches up with <span class="colorPink">ad-cols-3</span> and <span class="colorPink">ad-cols-3</span>: column-size 6 + 3 + 3 = 12 and so on.
          <br> For Example
        </p>
        <div class="ad-row">
        <div class="ad-cols-3">
          <div class="ad-card whiteBG">
            <p>ad-cols-3</p>
          </div>
        </div>

        <div class="ad-cols-4">
          <div class="ad-card whiteBG">
            <p>ad-cols-4</p>
          </div>
        </div>
        <div class="ad-cols-5">
          <div class="ad-card whiteBG">
            <p>ad-cols-5</p>
          </div>
        </div>
        </div>



      </div>
    </div>
  </div>
</section>
