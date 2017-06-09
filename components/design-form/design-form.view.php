<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">


        <h2 id="forms">Forms</h2>
        <p>
          Our input classes defaults the elements to full width of its constainer, hence, to use it in sequence, they must be declared in columns (Grid System). To use the input class, create a div with the class
          <span class="colorPink">ad-input</span>. The input element is placed in this div without any class.
        </p>
        <p>
          You might want to know why we did not just add the <span class="colorPink">ad-input</span> straight away to the input elements, this is so because of the input types and styles we want to achieve as part of our roadmap.
          This way, labels, error messages, icons etc. are nicely wrapped within the input div.
        </p>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-list"</span>>Hello Friend</button>
          </code>
        </pre>
        Results:
        <br>

        <div class="ad-input">
          <input type="text" name="" value="">
        </div>

        <p>
          Like the buttons, forms also have blocky and curvy vertices. Adding <span class="colorPink">ad-round</span> or <span class="colorPink">ad-block</span> to the input div will do the trick.
        </p>
        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
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

              <div class="ad-input ad-block ad-flaot">
                <label for="">With ad-float:</label>
                <input type="text" name="" value="">
              </div>

            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
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

              <div class="ad-input ad-round ad-flaot">
                <label for="">With ad-float:</label>
                <input type="text" name="" value="">
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
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Contact Forms</h2>


              <div class="ad-input ad-block ad-label ">
                <label for="">Fullname:</label>
                <input type="text" name="" value="" class="shine-pink">
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
            <div class="ad-card ad-flat whiteBG">
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
                  <div class="ad-input">
                    <input type="checkbox" name=""  id="checkbox2" value="">
                    <label for="checkbox2" class="ad-toggle"></label>

                  </div>
                </div>
              </div>




            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
