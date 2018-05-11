<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h1 class="title">Forms</h1>
          <p>
          Our input classes defaults the elements to full width of its container, hence, to use it in sequence, they must be declared in columns (Grid System). To use the input class, create a div with the class
          <code><span class="color-pink">ad-input</span></code>. The input element is placed in this div without any class.
        </p>
        </div>
      </div>
      <div class="ad-cols-8">
  <div class="ad-card bg-white">

    <p>
      You might want to know why we did not just add the <code><span class="color-pink">ad-input</span></code> straight away to the input elements, this is so because of the input types and styles we want to achieve as part of our roadmap.
      This way, labels, error messages, icons etc. are nicely wrapped within the input div.
    </p>
  </div>

        <pre class="ad-code">
          <code>
            &lt;div class="ad-input"&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;



            //customElement
            &lt;ad-input &gt;
              &lt;input type="text"/&gt;
            &lt;/ad-input&gt;
          </code>
        </pre>

        <div class="ad-card bg-white">
          <h2 class="title">Result:</h2>
          <div class="ad-input">
            <input type="text" name="" value="">
          </div>
        </div>

</div>
</div>
</div>
</section>

<!-- INPUT Lables -->

<section class="ad-section bg-white">
<div class="wrapper">
  <div class="ad-row">
    <div class="ad-cols-4">
      <div class="ad-card ad-flat">
        <h1 class="title text-normal">
        Input Labels (ad-label)
        </h1>
      </div>
    </div>

    <div class="ad-cols-8">

    <pre class="ad-code">
          <code>


            &lt;div class="ad-input ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;


            //customElement
            &lt;ad-input class="ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/ad-input&gt;
          </code>
        </pre>

        <div class="ad-card bg-white">
          <h2 class="title">Result:</h2>
          <div class="ad-input ad-label">
            <label for="name">Enter Fullame</label>
            <input type="text" name="name" value="">
          </div>
        </div>
    </div>
  </div>
</div>
</section>


<!-- INPUT TYPES -->

<section class="ad-section bg-white">
<div class="wrapper">
  <div class="ad-row">
    <div class="ad-cols-4">
      <div class="ad-card ad-flat">
        <h1 class="title">
        Input types
        </h1>
        <p>
          Like the buttons, forms also have blocky and curvy vertices. Adding <code><span class="color-pink">ad-round</span></code> or <code><span class="color-pink">ad-block</span></code> to the input div will do the trick.
        </p>
      </div>
    </div>

    <div class="ad-cols-8">
    <pre class="ad-code">
          <code>

            //ad-block
            &lt;div class="ad-input ad-block ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;

            //ad-round
            &lt;div class="ad-input ad-round ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;



            //customElement
            &lt;ad-input class="ad-block ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/ad-input&gt;
          </code>
        </pre>

    </div>
  </div>
</div>
</section>


<section class="ad-section">
<div class="wrapper">

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Ad-Block</h2>

              <div class="ad-input ad-block">
                <input type="text" placeholder="Normal Block Input with placeholder" name="" value="">
              </div>

              <div class="ad-input ad-block">
                <label for="">Without ad-label:</label>
                <input type="text" name="" value="">
              </div>

              <div class="ad-input ad-block ad-label">
                <label for="">With ad-label:</label>
                <input type="text" name="" value="">
              </div>

              <div class="ad-input ad-block ad-icon">
                <label for="">With ad-icon:</label>
                <span>
                  <i class="fa fa-google-plus"></i>
                </span>
                <input type="text" name="" value="">
                <span>
                  <i class="fa fa-microphone fa-sq"></i>
                </span>
              </div>

            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Ad-Round</h2>

              <div class="ad-input ad-round">
                <input type="text" placeholder="Normal Block Input with placeholder" name="" value="">
              </div>

              <div class="ad-input ad-round">
                <label for="">Without ad-label:</label>
                <input type="text" name="" value="">
              </div>

              <div class="ad-input ad-round ad-label">
                <label for="">With ad-label:</label>
                <input type="text" name="" value="">
              </div>

              <div class="ad-input ad-round ad-icon">
                <label for="">With ad-ad-icon:</label>
                <span>
                  <i class="fa fa-google-plus"></i>
                </span>
                <input type="text" name="" value="">
                <span>
                  <i class="fa fa-microphone"></i>
                </span>
              </div>

            </div>
          </div>
        </div>

        <div class="clearfix">  </div>

        <p>
          This input is not only limited to textbox, they aply to all input types including textarea and select elements.
          Here is an the input in action
        </p>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Contact Forms</h2>


              <div class="ad-input ad-block ad-label">
                <label for="">Fullname:</label>

                <input type="text" name="" value="" >

              </div>

              <div class="ad-input ad-block ad-label">
                <label for="">Email:</label>
                <input type="email" name="" value="">
              </div>

              <div class="ad-input ad-block ad-label">
                <label for="">Message:</label>
                <textarea name="name" rows="8" cols="80"></textarea>
              </div>

            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Other Inputs</h2>



              <div class="ad-input ad-block ad-label">
                <label for="">Country(Select Element):</label>
                <select class="" name="">

                  <option value="">Ghana</option>
                  <option value="">United Kingdom</option>
                  <option value="">United States</option>
                  <option value="">...</option>
                </select>
              </div>


              <div class="ad-input ad-block ad-label">
                <label for="">Range Input:</label>
                <input type="range" name="" value="">
              </div>
              <h2 class="title">Radio | Checkbox | Toggle</h2>
              <div class="ad-row">
                <div class="ad-cols-4">
                  <div class="ad-input">
                    <input type="radio" name=""  id="radio" value="">
                    <label for="radio" class="ad-radio"></label>

                  </div>
                </div>
                <div class="ad-cols-4">
                  <div class="ad-input ">
                    <input type="checkbox" name=""  class="hidden" id="checkbox" value="">
                    <label for="checkbox" class="ad-checkbox"></label>

                  </div>
                </div>
                <div class="ad-cols-4">
                  <div class="ad-input ad-label">
                    <input type="checkbox" name=""  id="checkbox2" value="">
                    <label for="checkbox2" class="ad-toggle"></label>

                  </div>
                </div>
              </div>




            </div>
          </div>
        </div>



  </div>
</section>



<!-- INPUT Colors -->

<section class="ad-section bg-white">
<div class="wrapper">
  <div class="ad-row">
    <div class="ad-cols-4">
      <div class="ad-card ad-flat">
        <h1 class="title">
        Input Colors
        </h1>
        <p>
          Input forms also have color highlights when its in focus. The default color is [prim] but this can be changed to match the template of your designs.

          Simply Adding <code><span class="color-pink">input-[color]</span></code>
          to the input div will do the trick.
          <br>
          <br>
          To apply a different input-color to a list of inputs in a form, add the class
          <code><span class="color-pink">ad-form input-[color]</span></code> to the form element.
          <br>
          This wil apply the highlight effect to all inputs that exists in the form
        </p>
      </div>

      <div class="ad-card bg-white ad-round">
        <h2 class='title'>Input Colors</h2>
        <div class="ad-input ad-label">
          <label for="">Default</label>
          <input type="text" name="" value="">
        </div>

        <div class="ad-input ad-label input-pink">
          <label for="">input-pink</label>
          <input type="text" name="" value="">
        </div>

        <form class="ad-form input-dark">

          <div class="ad-input ad-label ">
            <label for="">Enter Fullname</label>
            <input type="text" name="" value="">
          </div>
          <div class="ad-input ad-label ">
            <label for="">Message</label>
            <textarea name="name" rows="8" cols="80"></textarea>
          </div>

        </form>
      </div>
    </div>

    <div class="ad-cols-8">
    <pre >
          <code>

            //Default Input
            &lt;div class="ad-input ad-label"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;

            //input-pink
            &lt;div class="ad-input ad-label input-pink"&gt;
              &lt;label&gt; Enter Fullname: &lt;/label&gt;
              &lt;input type="text"/&gt;
            &lt;/div&gt;



            //To entire inputs in a form
            &lt;form class="ad-form input-dark"&gt;

              &lt;div class="ad-input ad-label"&gt;

                &lt;label&gt; Enter Fullname: &lt;/label&gt;
                &lt;input type="text"/&gt;

              &lt;/div&gt;

              &lt;div class="ad-input ad-label"&gt;

                &lt;label&gt;  Message: &lt;/label&gt;
                &lt;textarea&gt;
                &lt;/textarea&gt;

              &lt;/div&gt;


            &lt;/form&gt;
          </code>
        </pre>

    </div>
  </div>
</div>
</section>



<section>
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class="title">Input Outline</h2>
          <p>
            Adding the class <span class="color-pink">outline</span>
            to ad-input produces an outlined input design.
          </p>
        </div>


                <div class="ad-card ad-round bg-white">
                  <h2 class="title text-normal">ad-input outline</h2>

                  <div class="ad-input ad-block">
                    <input type="text" placeholder="Normal Block Input with placeholder" name="" value="">
                  </div>

                  <div class="ad-input outline">

                    <input type="text" name="" placeholder="Enter your name here" value="">
                  </div>

                  <div class="ad-input outline ad-block ad-label">
                    <label for="">With ad-label:</label>
                    <input type="text" name="" value="">
                  </div>

                  <div class="ad-input ad-round outline ad-icon">
                    <label for="">With ad-icon:</label>
                    <span>
                      <i class="fa fa-google-plus"></i>
                    </span>
                    <input type="text" name="" value="">
                  </div>

                  <div class="ad-input outline ad-label">
                    <label for="tester">Message</label>
                    <textarea name="tester"></textarea>
                  </div>
                  <p>

                  </p>
                </div>
      </div>
      <div class="ad-cols-8">

        <pre >
              <code>

                //Default Input
                &lt;div class="ad-input ad-label"&gt;
                  &lt;label&gt; Enter Fullname: &lt;/label&gt;
                  &lt;input type="text"/&gt;
                &lt;/div&gt;

                //outline
                &lt;div class="ad-input ad-label outline"&gt;
                  &lt;label&gt; Enter Fullname: &lt;/label&gt;
                  &lt;input type="text"/&gt;
                &lt;/div&gt;

              </code>
            </pre>


      </div>

      </div>
    </div>
  </div>
</section>

<ad-section class="bg-white">
  <ad-wrapper>
    <ad-row>
      <div class="ad-colx-12">
        <button type="button" name="button" routerLink="<?=BaseUrl;?>lists_items" class="ad-btn ad-flat ad-md btn-dark ad-round "><i class="fa fa-angle-left"></i> &nbsp; List & Items</button>
        <button type="button" name="button" routerLink="<?=BaseUrl;?>typography" class="ad-btn ad-flat ad-md btn-blue ad-round rFloat">Typography &nbsp; <i class="fa fa-angle-right"></i></button>
      </div>
    </ad-row>
  </ad-wrapper>
</ad-section>
