<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">



        <h2 id="list">List & Items</h2>
        <p>
          To use the list, simple add the class <span class="colorPink">ad-list</span> to the ul element and <span class="colorPink">ad-list</span> to each child li element.
          <br>These classes are not limited to ul elements. They can also be used on divs. ad-items adapts to the font-color of the container its being called in.
        </p>
        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-list"</span>>Hello Friend</button>
          </code>
        </pre>

        Results:
        <br>
        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat pinkBG">
              <h2 class="title">White Background</h2>
              <ul class="ad-list ad-flat  ad-strip ">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat darkBG">
              <h2 class="title">Dark Background</h2>
              <ul class="ad-list">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
</section>


<!-- <section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">




      </div>
    </div>
  </div>
</section>

 -->


<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">


        <h3>Items Types</h3>
        <p>
          The class <span class="colorPink">ad-item</span> can be called without <span class="colorPink">ad-list</span>. This is only advicable when you want to add an item-type to the item.
          There are two types of items :
        </p>
        <div class="ad-card ad-flat whiteBG">
          <div class="ad-list ad-sm ad-flat">
            <div class="ad-item">
            <span class="colorPink">ad-avatar</span>: changes the size of the button to normal (as specified by airDesign). This is the default button size
          </div>
          <div class="ad-item">
            <span class="colorPink">ad-thumbnail</span>:  strecthes the button to the full with of its container.
          </div>
          </div>
        </div>
        <p>
          These types of items displays an image, title and a summary of what that list contains. In the case of listing persons, the item will show the avatar for the person, his or her name and summary(email or message).
        </p>
        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Avatar</h2>
              <div class="ad-list ">

                <div class="ad-item ad-avatar">
                  <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                  <h2>Chris Angel</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
                <div class="ad-item ad-avatar">
                  <img src="<?=BaseUrl;?>media/images/users/female.png" alt="">
                  <h2>Gladys Camerron</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
                <div class="ad-item ad-avatar">
                  <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                  <h2>Chris Angel</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
              </div>



            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Thumbnail</h2>

              <div class="ad-item ad-thumbnail">
                <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                <h2>Chris Angel</h2>
                <p>Hello prince, wanted to check ...</p>
              </div>
              <div class="ad-item ad-thumbnail">
                <img src="<?=BaseUrl;?>media/images/users/female.png" alt="">
                <h2>Gladys Camerron</h2>
                <p>Hello prince, wanted to check ...</p>
              </div>
              <div class="ad-item ad-thumbnail">
                <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                <h2>Chris Angel</h2>
                <p>Hello prince, wanted to check ...</p>
              </div>


            </div>
          </div>
        </div>

        <p>
          Items can also contain buttons and icons. Adding these classes to the <span class="colorPink">ad-item</span> element will do so.
        </p>

        <div class="ad-card ad-flat whiteBG">
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
            <span class="colorPink">ad-badge</span>: will look for an element with class <span class="colorPink">.badge</span>  to properly position it.
            </div>
            <div class="ad-item">
            <span class="colorPink">ad-icon</span>: will look for the element <span class="colorPink">i</span> class to properly position the icon.
            </div>
            <div class="ad-item">
            <span class="colorPink">ad-button</span>: will look for an element with class <span class="colorPink">.ad-btn</span> to properly position it.
          </div>
          </div>
        </div>

        <pre class="ad-code">
          <code>
            <!--For Buttons-->
            &splt;button <span class="class">class="ad-list"</span>>Hello Friend</button>
          </code>
        </pre>


        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Item Icons & Badges</h2>

              <div class=" ad-item  ad-block ad-icon">
                <i class="fa fa-calendar-o"></i>
                Schedules
              </div>
              <div class="ad-item ad-icon">
                <i class="fa fa-user"></i>
                My Profile
              </div>
              <div class="ad-item ad-badge">
                Hello prince, wanted to check .
                <span class="badge">This is the bade</span>
              </div>
              <div class="ad-item ad-icon ad-badge">
                <i class="fa fa-envelope"></i>
                Messages
                <span class="badge ">54 New</span>
              </div>




            </div>
          </div>

          <div class="ad-cols-6">
            <div class="ad-card ad-flat whiteBG">
              <h2 class="title">Item Buttons</h2>

              <div class="ad-item ad-button">
                Hello prince, wanted to check .
                <a class=" ad-btn"><i class="fa fa-phone"></i></a>
              </div>
              <div class="ad-item ad-avatar ad-button">
                <img src="<?=BaseUrl;?>media/images/users/female.png" alt="">
                <h2>Gladys Camerron</h2>
                <p>Hello prince, wanted to check ...</p>
                <a class="ad-btn ad-flat  btn-pink clear"><i class="fa fa-phone"></i></a>
              </div>
              <div class="ad-item ad-thumbnail ad-button">
                <img src="<?=BaseUrl;?>media/images/users/male.png" alt="">
                <h2>Chris Angel</h2>
                <p>Hello prince, wanted to check ...</p>
                <a class="ad-btn ad-flat   clear"><i class="fa fa-phone"></i></a>
              </div>


            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
