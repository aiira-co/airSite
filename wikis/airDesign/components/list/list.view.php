<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">



        <h2 id="list">List & Items</h2>
        <p>
          Lists are used to display rows of information, such as a contact list, playlist, or menu. Or maybe something crazy we don’t even know exists yet!
        </p>
        <p>
          To use the list, simple add the class <code><span class="color-pink">ad-list</span></code> to the ul element and <code><span class="color-pink">ad-list</span></code> to each child li element.
          <br>These classes are not limited to ul elements. They can also be used on divs. ad-items adapts to the font-color of the container its being called in.
        </p>
        <h4>Basic Usage</h4>
        <pre class="ad-code">
          <code>
            &lt;div class="ad-list"&gt;

              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;

            &lt;/div&gt;

            //customElement
            &lt;ad-list &gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
            &lt;/ad-list&gt;
          </code>
        </pre>

        Results:
        <br>
        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card  bg-white">
              <h2 class="title">White Background</h2>
              <ul class="ad-list ">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card bg-dark">
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

        <div class="clearfix">

        </div>


        <!-- AD_FLAT -->
        <h4>No Line (ad-flat)</h4>
        <p>
          Adding the <code>ad-flat</code> class will hide the lines between list items. This class can also be used on individual items:
        </p>
        <pre class="ad-code">
          <code>
            &lt;div class="ad-list ad-flat"&gt;

              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;

            &lt;/div&gt;

            //customElement
            &lt;ad-list ad-flat&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
            &lt;/ad-list&gt;
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card bg-white">
              <h2 class="title">White Background</h2>
              <ul class="ad-list ad-flat ">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card bg-dark">
              <h2 class="title">Dark Background</h2>
              <ul class="ad-list ad-flat ">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
        </div>


        <!-- STRIPPING -->
        <div class="clearfix">

        </div>

        <h4>Stripped Design (ad-strip)</h4>
        <p>
          Adding the <code>ad-strip</code> class will hide the lines between list items. Its best used with <code>ad-flat</code> on the items.
          For a dark background use <code>ad-strip-white</code>
        </p>
        <pre class="ad-code">
          <code>
            &lt;div class="ad-list ad-flat ad-strip "&gt;

              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;

            &lt;/div&gt;

            //customElement
            &lt;ad-list ad-flat ad-strip&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
            &lt;/ad-list&gt;
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card bg-white">
              <h2 class="title">White Background</h2>
              <ul class="ad-list ad-flat ad-strip">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card bg-dark">
              <h2 class="title">Dark Background</h2>
              <ul class="ad-list ad-flat ad-strip-white">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
        </div>



        <!-- AD_SM -->
        <div class="clearfix">

        </div>

        <h4>Small Items (ad-sm)</h4>
        <p>
          Adding the <code>ad-sm</code> class will reduce the margin between list items. This class can also be used on individual items
        </p>
        <pre class="ad-code">
          <code>
            &lt;div class="ad-list ad-sm "&gt;

              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;
              &lt;div class="ad-item"&gt;  First Member  &lt;/div&gt;

            &lt;/div&gt;

            //customElement
            &lt;ad-list ad-sm&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
              &lt;ad-item &gt;  First Member  &lt;/ad-item&gt;
            &lt;/ad-list&gt;
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card bg-white">
              <h2 class="title">White Background</h2>
              <ul class="ad-list  ad-sm">
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>
                <li class="ad-item">First Member</li>

              </ul>
            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card bg-dark">
              <h2 class="title">Dark Background</h2>
              <ul class="ad-list ad-sm">
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




<section class="ad-section">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-colx-12">


        <h3>Items Types</h3>
        <p>
          The class <code><span class="color-pink">ad-item</span></code> can be called without <code><span class="color-pink">ad-list</span></code>. This is only advicable when you want to add an item-type to the item.
          There are two types of items :
        </p>
        <div class="ad-card ad-flat bg-white">
          <div class="ad-list ad-sm ad-flat">
            <div class="ad-item">
            <code><span class="color-pink">ad-avatar</span></code> : changes the size of the button to normal (as specified by airDesign). This is the default button size
          </div>
          <div class="ad-item">
            <code><span class="color-pink">ad-thumbnail</span></code>  :  strecthes the button to the full with of its container.
          </div>
          </div>
        </div>
        <p>
          These types of items displays an image, title and a summary of what that list contains. In the case of listing persons, the item will show the avatar for the person, his or her name and summary(email or message).
        </p>

        <pre class="ad-code">
          <code>
            &lt;div class="ad-list"&gt;

            //Avatar
              &lt;div class="ad-avatar"&gt;

                &lt;img src="image.png"/&gt;
                &lt;h2&gt; Chris Angel&lt;/h2&gt;
                &lt;p&gt; Hello prince, wanted to check...&lt;/p&gt;

              &lt;/div&gt;


                //Thumbnail
              &lt;div class="ad-thumbnail"&gt;

                &lt;img src="image.png"/&gt;
                &lt;h2&gt; Chris Angel&lt;/h2&gt;
                &lt;p&gt; Hello prince, wanted to check...&lt;/p&gt;

              &lt;/div&gt;

            &lt;/div&gt;


            //Or


              &lt;div class="ad-thumbnail"&gt;

                  &lt;div class="ad-img".&gt;
                    &lt;img src="image.png"/&gt;
                  &lt;/div&gt;
                  &lt;h2&gt; Chris Angel&lt;/h2&gt;
                  &lt;p&gt; Hello prince, wanted to check...&lt;/p&gt;

              &lt;/div&gt;


            //customElement
            &lt;ad-list &gt;

            //Avatar airlement
              &lt;ad-avatar&gt;

                &lt;img src="image.png"/&gt;
                &lt;h2&gt; Chris Angel&lt;/h2&gt;
                &lt;p&gt; Hello prince, wanted to check...&lt;/p&gt;

              &lt;/ad-avatar&gt;


                //Thumbnail airlement
              &lt;ad-thumbnail&gt;

                &lt;img src="image.png"/&gt;
                &lt;h2&gt; Chris Angel&lt;/h2&gt;
                &lt;p&gt; Hello prince, wanted to check...&lt;/p&gt;

              &lt;/ad-thumbnail&gt;

            &lt;/ad-list&gt;
          </code>
        </pre>

        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Avatar</h2>
              <div class="ad-list ">

                <div class="ad-avatar">
                  <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                  <h2>Chris Angel</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
                <div class="ad-avatar">
                  <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                  <h2>Gladys Camerron</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
                <div class="ad-avatar">
                  <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                  <h2>Chris Angel</h2>
                  <p>Hello prince, wanted to check ...</p>
                </div>
              </div>



            </div>
          </div>
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Thumbnail</h2>

              <div class="ad-thumbnail">
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                 <h2>Wonderland 3012</h2>
                 <p>airNews announces the renoveation of the massive
                  <br>
                  opening the wonderlland fair on Kumasi ...</p>
              </div>
              <div class="ad-thumbnail">
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                <h2>Wonderland 3012</h2>
                <p>airNews announces the renoveation of the massive
                  <br>
                  opening the wonderlland fair on Kumasi ...</p>
              </div>
              <div class="ad-thumbnail">
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                 <h2>Wonderland 3012</h2>
                 <p>airNews announces the renoveation of the massive
                  <br>
                  opening the wonderlland fair on Kumasi ...</p>
              </div>


            </div>
          </div>
        </div>

        <div class="clearfix">

        </div>

        <h4>Adding Icons, Badges and Buttons to Lists</h4>
        <p>
          Items can also contain buttons and icons. Adding these classes to the <code><span class="color-pink">ad-item</span></code> element will do so.
        </p>

        <div class="ad-card ad-flat bg-white">
          <div class="ad-list ad-sm ad-strip ad-flat">
            <div class="ad-item">
              <code><span class="color-pink">ad-badge</span></code> : will look for an element with class <span class="color-pink">.badge</span>  to properly position it.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-icon</span></code>  : will look for the element <span class="color-pink">i</span> class to properly position the icon.
            </div>
            <div class="ad-item">
              <code><span class="color-pink">ad-button</span></code>  : will look for an element with class <span class="color-pink">.ad-btn</span> to properly position it.
          </div>
          </div>
        </div>

        <pre class="ad-code">
          <code>
              &lt;div class="ad-item ad-icon"&gt;
                &lt;i class="fa fa-calender-o"&gt;&lt;i&gt;
                 Shedules
              &lt;/div&gt;

              &lt;div class="ad-item ad-icon"&gt;
                &lt;i class="fa fa-user-o"&gt;&lt;i&gt;
                 My Profile
              &lt;/div&gt;

              &lt;div class="ad-item ad-badge"&gt;
                 Hello Prince, wanted to check.
                &lt;span class="badge"&gt;
                  This is the badge
                &lt;span &gt;
              &lt;/div&gt;

              &lt;div class="ad-item ad-icon ad-badge"&gt;
              &lt;i class="fa fa-envelope-o"&gt;&lt;i&gt;
               Messages
              &lt;span class="badge"&gt;
                54 New
                &lt;span &gt;
              &lt;/div&gt;

              //Avatar with button

                &lt;div class="ad-avatar ad-button"&gt;
                  &lt;img src="image.png"/&gt;
                  &lt;h2&gt; Chris Angel&lt;/h2&gt;
                  &lt;p&gt;
                     Message here
                  &lt;/p&gt;
                  &lt;button class="ad-btn ad-flat"&gt;
                    &lt;i class="fa fa-telephone"&gt;&lt;i&gt;
                  &lt;button &gt;
                &lt;/div&gt;
          </code>
        </pre>


        <div class="ad-row">
          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Item Icons & Badges</h2>

              <div class=" ad-item  ad-block ad-icon">
                <i class="fa fa-calendar-o"></i>
                Schedules
              </div>
              <div class="ad-item ad-icon">
                <i class="fa fa-user-o"></i>
                My Profile
              </div>
              <div class="ad-item ad-badge">
                Hello prince, wanted to check .
                <span class="badge">This is the badge</span>
              </div>
              <div class="ad-item ad-icon ad-badge ad-flat">
                <i class="fa fa-envelope-o"></i>
                Messages
                <span class="badge ">54 New</span>
              </div>




            </div>
          </div>

          <div class="ad-cols-6">
            <div class="ad-card ad-flat bg-white">
              <h2 class="title">Item Buttons</h2>

              <div class="ad-item">
                Hello prince, wanted to check .
                <button class=" ad-btn ad-round btn-pink outline rFloat" style="margin-top:-4px;"><i class="fa fa-phone"></i>Dail </button>
              </div>
              <div class="ad-avatar ad-button">
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                <h2>Gladys Camerron</h2>
                <p>Hello prince, wanted to check ...</p>
                <a class="ad-btn ad-flat  btn-pink clear"><i class="fa fa-phone"></i></a>
              </div>
              <div class="ad-thumbnail ad-button ad-flat bg-dark">
                <div class="ad-index">
                  1
                </div>
                <img src="<?=CDN;?>images/users/user1.jpg" alt="">
                <h2>Wonderland 3012</h2>
                <p>airNews announces the renoveation of the massive
                  <br>
                  opening the wonderlland fair on Kumasi ...</p>
                <a class="ad-btn ad-flat ad-round outline btn-blue">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>


            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>



 <ad-section class="bg-white">
   <ad-wrapper>
     <ad-row>
       <div class="ad-colx-12">
         <button type="button" name="button" routerLink="<?=BaseUrl;?>cards_tiles" class="ad-btn ad-flat ad-md btn-dark ad-round "><i class="fa fa-angle-left"></i> &nbsp; Cards & Tiles </button>
         <button type="button" name="button" routerLink="<?=BaseUrl;?>input_forms" class="ad-btn ad-flat ad-md btn-blue ad-round rFloat">Input Forms &nbsp; <i class="fa fa-angle-right"></i></button>
       </div>
     </ad-row>
   </ad-wrapper>
 </ad-section>
