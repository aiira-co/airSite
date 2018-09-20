<section class="ad-section bg-dark doc-banner" style="margin-top:-5px !important; background-image:url('<?=CDN;?>/images/banner/microsoft-surface-book-2-technastic-04.jpg');">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat text-center">
          <div class="logo">
            <img src="<?=CDN;?>images/logo/lynqWhite.png" class="img-responsive" alt="">
          </div>
          <br>
          <h2 class="title text-normal">
            LynqPHP Framework
          </h2>
          <p class="p-center">
            Develope Professional Web Applications with ease.
          </p>
          <br>
          <a href="https://github.com/air-Design/coreFramework" target="_blank" class="ad-btn ad-round ad-md btn-blue ">
            <i class="fa fa-download"></i>
            Download
          </a>
          <a href="https://github.com/ProjectAir/coreFramework" target="_blank" class="ad-btn ad-round ad-md btn-blue ">
            <i class="fa fa-gitlab"></i>
            Source Code
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ad-section bg-white" id="coreFramework">
    <div class="wrapper">
        <div class="ad-cols-12">

        <div class="ad-card ad-img ad-block center">
            <img src="<?=CDN;?>images/framework/framework.PNG"  class="img-responsive" alt="">
        </div>
        <br>
        <center>
            <a href="<?=BaseUrl;?>framework" class="ad-btn  ad-block ad-flat btn-tgreen">
                <i class="fa fa-play-circle"></i>Video Tutorials
            </a>
        </center>


        </div>
    </div>
</section>


<section class="ad-section ">
  <div class="wrapper">
    <div class="ad-colx-2">
      <div class="ad-card bg-white">
        <a href="#structure" class="ad-item">Folder Structure</a>
        <a href="#component" class="ad-item">Components</a>
        <a href="#routing" class="ad-item">Routing</a>
        <a href="#authguard" class="ad-item">AUTHGUARD</a>
        <a href="#coremodel" class="ad-item bg-dark">
          <span class='ad-btn btn-yellow ad-shadow'>
            Models & CoreModel
          </span>
        </a>
      </div>
    </div>
    <div class="ad-colx-10">
      <div class="ad-card bg-white">

        <h2 class="title">Getting Started</h2>
        <p>
          Core Framework is a PHP7 MVC framework. It follows a component based approach where a component contains the component file and its view. A separate file which is a model handles database queries which is used by the component to render data into the browser through the view file.
        </p>

        <p>
      </div>

      <div class="ad-card bg-white">

        <h2 class="title color-pink">INSTALLATION</h2>
        <p>

          Download the framework from this page, it comes bundled in a zip file format. Extract the files in the MyApp folder into a folder which is the name of the app you want to create. Copy the folder into your PHP7 server directory.
          <br>
          Eg. In XAMPP, copy the folder to the htdocs folder of the XAMPP directory.
          <br>
          <br>
          Now open the config.php file in the framework and set the variable $live_site to the corresponding name of the app on the server.
          <br>
          Eg. If the folder name was ‘MyApp’, change the value of the $live_site variable to ‘/MyAPP/’ or ‘http://localhost/MyApp/’.
          <br>
          <br>
          The value of the variable is used throughout the framework as a constant called BaseUrl. This is used to reference image directory, CSS and Script files, routing etc.
          <br>
          Open your browser and make sure your Server(Apache) is running and open the site or app.
          <br>
          Remember that the framework is written in PHP7 so your server must run PHP7 and above for your app to function.
        </p>


      </div>

      <div class="ad-card bg-white">

        <h2 class="title color-pink">SETTING UP THE DATABASE</h2>
        <p>

          The framework 2 pages which requires a database connection (person’s page and the login page).
          In the zip file, there is coreDB.sql file in a folder called Database. Open your database management studio. In XAMPP open the PHPMYADMIN page and create a database called coreDB. Import the sql file (coreDB.sql) into the database.
          Now open the config.php file and set the variables:
        </p>
      </div>


      <div class="ad-card bg-dark ">
        <p>

          •	$dbtype = meaning the database type,
          <br>
          &nbsp; o	if its MySQL or MySQLi, -> ‘mysqli’ .
          <br>
          &nbsp; o	Microsoft SQL -> ‘mssql’.
          <br>
          &nbsp; o	Oracle -> ‘oracle’
          <br>
          •	$host: where the database is hosted.
          <br>
          •	$db to the corresponding database name you just created, in this case coreDB.
          <br>
          •	$user, is the username to access your database (default is root).
          <br>
          •	$password is the password to access the database (leave empty if no password is related).
          <br>
          •	$db_prefix = the table prefix for the database if any.
          <p/>
        </div>
        <div class="ad-card bg-white">
          <p>
            Now go to the person’s page on the framework, if all things are properly set, the page should display correctly with some data from the database being displayed on the table. In this page, you can decide to add new person, edit person’s info, and delete a person. Try them.
            <br>
            <br>
            You can also go to the login page, just go back to the home page, scroll down and click on the account button. This should take you to the login page. Credentials are:
            •	Username: admin
            •	Password: admin123
            After authentication, you should be able to view the account page. Authentication to view a page is set at the app.router.php file.

          </p>

        </div>

    </div>

  </div>
</section>

<div class="clearfix">

</div>


<section class="ad-section menu" id="structure">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class='title text-normal'>Understanding the framework</h2>
          <p>
            When ever a page is requested or routed,
            the url is sent to the '<span class="color-pink">app.router.php</span>'
            file, which then checks if the '<span class="color-pink">path</span>' matches the url.
            <br>
            <br>
            if yes the framework now renders the coresponding component to the browser.
          </p>
        </div>
        <div class="ad-card ad-flat">
          <div class="ad-img center">
            <img src="<?=CDN;?>images/framework/folder.jpg" alt="">
          </div>
        </div>

      </div>


      <div class="ad-cols-8">


          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Component Folder </h2>
            <p>

              Folder contains all the components for the application. These components represent the individual pages of the application.
              <br>
              Every component must contain a <span class="color-pink">[name].component.php</span> and <span class="color-pink">[name].view.php</span>. (where <span class="color-pink">[name]</span> represent the name of the component or page).
              <br>
              o	For example, to create a page to display list of <span class="color-pink">users</span>, we could decide to name the component <span class="color-pink">users.component.php</span> and <span class="color-pink">users.view.php</span>, contained in a folder called users.
              <br>
              o	We advise that every component must be within a folder having the name of the component itself.
              <br>
              o	The <span class="color-pink">user.component.php</span> file here handles all the php logics and variable which are made available for the view file. It could be considered as the controller of the MVC framework.
              <br>
              o	The <span class="color-pink">users.view.php</span> file is rendered in the browser as the user’s page.
            </p>
          </div>
          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Models Folder </h2>
            <p>
              Folder contains all the models for the application. These models represent the individual database queries/entities of the application.
            </p>
          </div>
          <div class="ad-card ad-flat ad-block bg-white">

            <h3 class="title">Assets Folder </h3>
            <p>

              This contains the resource files and media content of the application. The sub-folders in this folder are css, js, fonts, images, videos and audio.
              <br>
              The logo and favicon of the application is stored in the images folder here. Images of the users, persons and items related to the database are also stored here I separate folders with their respective names.
              <br>
              This way all the media content are properly organized and optimized for future updates and backward compatibility if the need arise.
            </p>
          </div>

          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Templates Folder</h2>
            <p>
              This contains the templates or themes for the application or website.
              <br>
              The <span class="color-pink">config.php</span> files have a variable called template which tells the application which template to use. The value for the template variable must match the name of the template in the templates folder.
              <br>
              There are tutorials on creating your own templates, or you can decide to download some of our free templates here online.
            </p>
          </div>

          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Config.php</h2>
            <p>
              The file is the configuration file of the application. It’s a class with default varibales such as offline (to determine if the application is available to view or under development), host, dbname, dbuser, dbpass, dbprefix etc.
              <br>
              These values are used by the framework to run the application. Any changes made to these values must be valid else the app will turn off.
            </p>
          </div>

          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Index.php </h2>
            <p>
              <span class="color-pink">Index.php</span> files. This is the default file which check the <span class="color-pink">config.php</span> file for offline value, start the session and set CONSTANTS for the application.
              <br>
              You are advised not to alter this file except you know what you are about.
            </p>
          </div>
          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Core Folder </h2>
            <p>
              This folder contains the files for the framework and legacy file for the database and component management.
            </p>
          </div>
      </div>
    </div>
  </div>
</section>



<div class="clearfix">

</div>


<section class="ad-section bg-white" id="component">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
          <div class="ad-card ad-flat">
            <h2 class="title">Components</h2>
            <p>
              Each component here represents a page in the website or application.
              <br>
              Components are created in the components folder in an independent folder.
              <br>
              This way, the application Is organized and the components are reusable in other applications.
            </p>
          </div>

          <div class="ad-card ad-flat">
            <div class="ad-img center">
              <img src="<?=CDN;?>images/framework/component.jpg" alt="">
            </div>
          </div>

      </div>
      <div class="ad-cols-8">

        <div class="ad-card ad-flat">
          <h3 class="title">Creating a component</h3>
          <p>
            Open the component folder and create a new folder. The folder name should match the name of the component you want to create.
            <br>
            (Let us consider creating a component to view users in a class.) Hence the component folder should be named users.
          </p>

        </div>
        <div class="ad-card">
          <p>
            In the <span class='bg-dark color-yellow'>&nbsp; users &nbsp;</span> folder, create two PHP files.
            <br>
            <i class='fa fa-exclamation'></i> Every component must contain a <span class="color-pink">[name].component.php</span> and <span class="color-pink">[name].view.php</span>. (where [name] represent the<span class="color-pink"> name</span> of the component or page).
</p>
            <div class="ad-list">
              <div class="ad-item">
                (a).	<span class="color-pink">users.component.php</span> file: this file is the component class which controls what is displayed in the view. This file must have a class <span class="color-pink">UsersComponent</span>.
                <br>
                &nbsp; i.	Just for the sack of expirement, create a <span class="color-pink">public $title</span> variable in the component class, and assign the value ‘<span class="color-pink">Users component works!</span>’ as its value.
                This variable will be used in the view file to display in the browser.
              </div>
              <div class="ad-item ad-flat">
                (b).	<span class="color-pink">users.view.php</span> file: this file is rendered as the page in the browser.
                This file contains mostly HTML elements and few PHP codes to echo variables from its component file.
                <div class="ad-item">
                  i.	Create header tag, say h2 /h1 and echo the <span class="color-pink">$title</span> variable in the element like so: <span class="color-pink">&lt;h2> <=$title;> &lt;/h2></span>
                </div>
                <div class="ad-item">
                  ii.	Any variable called in the view must be a public variable which exists or is declared in its respective component class.
                  PHP will show error if the <span class="color-pink">$title</span> variable is not found in the component class.
                </div>
                <div class="ad-item">
                  iii.	Private variables in the component class will not be available for the view file to echo or print.
                </div>


              </div>

            </div>


        </div>

        <div class="ad-card ad-flat">
          <p>
            This is how the users.component.php will look like.
            <br>
          The class name must match the name of the component.
          </p>
          <pre>
            <code class='php'>
              &lt;?php

              class UsersComponent
              {

                  public $title="Users component works!";

                  function onInit()
                  {
                  }
              }
            </code>
          </pre>

          <p>
            then the 'users.view.php' file could look like so:
          </p>

          <pre>
            <code class='html'>
                &lt;h2>&lt;?=$title;?>&lt;/h2>
            </code>
          </pre>
        </div>


      </div>
    </div>
  </div>
</section>


<section class='ad-section bg-white' id='routing'>
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
        <div class="ad-card ad-flat">
          <h2 class="title">Routing</h2>
          <p>
          Though the users component is created, we have not created any route to get to that component.
            <br>
            To do so, we open the app.router.php file at the root directory of the framework.
          </p>
        </div>

        <div class="ad-card ad-flat">
          <div class="ad-img center">
            <img src="<?=CDN;?>images/framework/component.jpg" alt="">
          </div>
        </div>

      </div>

      <div class="ad-cols-8">
        <div class="ad-card">
          <p>
            The <span class="color-pink">app.router.php</span> file registers a url to a component, so that whenever the url matches the one registered, the binding component (page) is displayed.
                </p>
                <div class="ad-list">
                  <div class="ad-item">
                    Create a variable called $users. The variable must be an array with members
                    <div class="ad-list ad-sm bg-dark">
                      <div class="ad-item">
                        <span class="color-yellow">path</span> : the url to bind the component to. In this case, input ‘students’ as the value for this array member.
                      </div>
                      <div class="ad-item">
                        <span class="color-yellow">component</span> : this should correspond to the component folder name in the components folder. In this case, the folder name is ‘users’
                      </div>
                      <div class="ad-item">
                        <span class="color-yellow">title</span> : this is the title that displayed at the browser’s tab when the component or page is view. This member can be omitted.
                      </div>

                    </div>
                  </div>

                  <div class="ad-item">
                    The $users variable should look like:
                  </div>
                </div>

          <pre>
            <code class='php'>
              $users = [
                        'path'=>'users',
                        'component'=>'users',
                        'title'=>'users page'
                        ];
            </code>
          </pre>
          <p>
            The above variable is not yet registered as a route. To register the variable, add it as a member to the '$appRoutes' array . Like so:
          </p>
          <pre>
            <code class='php'>
              $appRoutes=[..., $users];
            </code>
          </pre>
          <p>

          </p>

          <pre>
            <code class='php'>
    $users = [
     'path'=>'users', // http://127.0.0.1/users the router looks if the url matches the path, hence users. i.e http://domain.com/{{path}}
     'component'=>'users', // Component to go when the path matches the url given
     'title'=>'users page' // Page title to display at the browsers tab
    ];

    $appRouter = [
     ['path'=>'/', 'component'=>'app', 'title'=>'Welcome Home'],
    $users

    ];

    $appRouterModule = CORE::getInstance('Router'); //creates an instance of the router class
    $appRouterModule->setRouter($appRouter); //registers the routers
            </code>
          </pre>
          <p>
            Now the users component is available to the router to view in the browser. Enter the server name to the App and add the path of the component ('users'). I.e
            <div class="ad-item ad-sm">
              <p>
                http://localhost/MyApp/users.
                <br>
                This should display the users component and the $title variable should be echo-ed to the screen.
              </p>
            </div>

          </p>

        </div>

        <div class="ad-card bg-pink">
          <p>
            Note: every public variable in the component class can be directory called it's view file. you will see the string
            'Users component works!' when the page is viewed at that component.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>


<section class='ad-section bg-white' id='authguard'>
<div class="wrapper">

  <div class="ad-row">
    <div class="ad-cols-4">
      <div class="ad-card ad-flat">
        <h2 class="title">AUTHGUARD</h2>
        <p>
            Authentication and Authorization is key in Application development and coreFramework already has this feature implemented for you.
          <br>
          '<span class="color-pink">authguard</span>' is also a member of the routes and takes arrays of models name as strings which are used to authorize clients to access the component.
        </p>
      </div>

      <div class="ad-card ad-flat">
        <h3 class="title">Example</h3>

  <pre>
    <code class='php'>
      $appRouter = [
        //App Component does not contain any Authorization
        [
        'path'=>'/',
        'component'=>'app',
        'title'=>'Welcome Home'
        ],

        //Users Component contains Authorization
        [
        'path'=>'users',
        'component'=>'users',
        'title'=>'users page',
        'authguard'=>['authenticate'] // authguard checks a method 'canActivate():bool' in the model authenticate.model
        ];

      ];

      $appRouterModule = CORE::getInstance('Router'); //creates an instance of the router class
      $appRouterModule->setRouter($appRouter); //registers the routers
    </code>
  </pre>
      </div>
    </div>

    <div class="ad-cols-8">

      <div class="ad-card ad-flat">
        <p>
          The authguard member checks the method '<span class="color-pink">canActivate():bool</span>' in the model
          <span class="color-pink">authenticate.model</span> which expects a boolean return.
        </p>
        <div class="ad-item">
          If the   <span class="color-pink">canActivate</span> method returns   <span class="color-pink">TRUE</span>, then the component or page loads
        </div>

        <div class="ad-item">
          if <span class="color-pink">FALSE</span>, page does not loads and the developer has the freedom to redirect the user to login page or home.
        </div>
      </div>

      <div class="ad-card ad-flat">
        <h2 class='title'>Example of the authenticate model is as follows:</h2>
        <pre>
          <code class='php'>
  &lt;?php

  class AuthenticateModel{

    // This method is used by the routing class to allow or disallow a route to the component
    function canActivate(string $url):bool{
      if (CoreSession::IsLoggedIn()) {
        return true;
      }else{
          Core::redirect(BaseUrl.'account/login',$url);
          return false;
      }
    }


  }
          </code>
        </pre>

      </div>

      <div class="ad-card ad-flat">
        <div class="ad-item">
          The <span class="color-pink">$url</span> parameter of the method is automatically passed in by coreFramework: That is, the path you are trying to access.
        </div>
        <div class="ad-item">
          <span class="color-pink">CoreSession::IsLoggedIn()</span> is a static method in coreFramework used to check if a users is LoggedIn.
          <div class="ad-list ad-sm bg-dark">
            <div class="ad-item">
              This method specifically checks if the <span class="color-yellow">$_SESSION['id']</span> isset.
            </div>
            <div class="ad-item">
              Apart from using the in-build authentication at CoreSession you could write your own code to check if a user is logged in.
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>


</div>
</section>
