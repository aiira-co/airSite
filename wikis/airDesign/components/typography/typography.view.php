
<ad-section class="bg-dark">
<ad-wrapper>
  <ad-row>
  <div class="ad-cols-4">
    <div class="ad-card ad-flat">
    <h1 class="title"><?=$title;?></h1>
    </div>
  </div>
  <div class="ad-cols-8 doc" style="font-size:17px;">
    <div class="ad-card ad-flat">
    <p>
      airDesign comes with some default values for some CSS properties. These values were set for the purpose of our design principles with web application design in mind. Some web projects might find these values inappropriate and we advice that you overwrite these defaults with your own css file after the library has been linked.
    </p>
    <p>
    <pre >
      <code>
        body{      
          font-family: bariol;
          font-size: 14px;
          background-color: whitesmoke;
        }

      </code>
    </pre>

    <div class="ad-card ad-flat">

      <p>
        For general website design, you might want to increase the <code>font-size</code> to <code>17px</code> or <code>18px</code>. The default <code>14px</code> is optimal for web application and can sometimes be used for website.

      </p>

        <h2 class="title text-normal colorYellow">Fonts</h2>
      <p>
        Alternate to the default font, you can use the Calibri for this.
        We have personally tested with  fonts like Calibri, Ubuntu, Open sans ad Railway.
        <br>
        A best example is to use the default Bariol font for the entire site,
        and use the railway font for the header elements(h1 to h6). We prefer to use fonts like ubuntu for CAD related sites.
      </p>
    </div>
      <br>


    </div>

  </div>
</ad-row>
</ad-wrapper>
</ad-section>

<section class="ad-section">
  <div class="wrapper">

  <div class="ad-row">
    <div class="ad-cols-12">
    <div class="ad-card ad-flat">
      <h1 class="title">
        Text-[Align]
      </h1>

      <p>
        There are cases where the need for text/content alignment becomes a need. Air Design has classes that
        makes aligning content to the left, center and right possible.
        By default (except otherwise), contents rendered are aligned to the left side of the container, but in  the case where the
        parent element has a right alignment, you could use the class <code class="color-pink">text-left</code> to align a element to the left.
        Likewise <code class="color-pink">text-center</code> and <code class="color-pink">text-right</code> will align the content of the element to
        the center and right respectively.

      </p>

    </div>
    </div>
  </div>

    <div class="ad-row">

    <div class="ad-cols-4">
      <div class="ad-card text-left bg-white">
        <h2 class="title text-normal color-pink">text-left</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
        </p>

      </div>
    </div>


    <div class="ad-cols-4">
      <div class="ad-card text-center bg-white">
        <h2 class="title text-normal color-pink">text-center</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
        </p>

      </div>
    </div>


    <div class="ad-cols-4">
      <div class="ad-card text-right bg-white">
        <h2 class="title text-normal color-pink">text-right</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
        </p>

      </div>
    </div>

    </div>
  </div>
</section>



<section class="ad-section bg-white">
  <div class="wrapper">

  <div class="ad-row">
    <div class="ad-cols-4">
    <div class="ad-card ad-flat">
      <h1 class="title">
        Text-[case]
      </h1>

      <p>
        There are cases where the need for text case becomes a need. Air Design has classes that
        makes text transform to the uppercase, lowercase and normal is neccessary.
        By default (except otherwise), text rendered are mixed case, depending on the raw data, but in  the case where the
        data gotten from the databse ae all uppercase, you could use the class <code class="color-pink">text-lower</code> to transform the text/data to the lower case.
        Likewise <code class="color-pink">text-upper</code> and <code class="color-pink">text-normal</code> will transform the text of the element to
        the uppercase and normal(mixed case) respectively.

      </p>

    </div>
    </div>
  </div>

    <div class="ad-cols-8">

    <div class="none">
      <div class="ad-card text-normal bg-white">
        <h2 class="title text-normal color-pink">text-normal</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
        </p>

      </div>
    </div>


    <div class="none">
      <div class="ad-card text-upper bg-white">
        <h2 class="title text-upper color-pink">text-upper</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
        </p>

      </div>
    </div>


    <div class="none">
      <div class="ad-card text-lower bg-white">
        <h2 class="title text-lower color-pink">text-lower</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis magni voluptates fugit nobis. Odit perferendis tenetur laboriosam, corporis iste nobis, accusantium molestiae reiciendis ipsam cumque harum saepe rem natus culpa!
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
                <button type="button" name="button" routerLink="<?=BaseUrl;?>input_forms" class="ad-btn ad-flat ad-md btn-dark ad-round "><i class="fa fa-angle-left"></i> &nbsp; Input Forms</button>
                <button type="button" name="button" routerLink="<?=BaseUrl;?>modal" class="ad-btn ad-flat ad-md btn-blue ad-round rFloat">Modal & Popup&nbsp; <i class="fa fa-angle-right"></i></button>
              </div>
            </ad-row>
          </ad-wrapper>
        </ad-section>
