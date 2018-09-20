<section class="ad-section bg-dark doc-banner" style="margin-top:-5px !important; background-image:url('<?=CDN;?>/images/banner/microsoft-surface-book-2-technastic-04.jpg');">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat text-center">
          <div class="logo">
            <br>
            <img src="<?=CDN;?>images/logo/cquredWhite.png" class="img-responsive" alt="">
          </div>
          <br>
          <h2 class="title text-normal">
            CQured MVC Web API(PHP 7.2+)
          </h2>
          <p class="p-center">
            Develope your WebAPI with ease.
            Its Simple, Easy and CQured.
          </p>
          <br>
          <a href="https://github.com/air-Design/cqured" target="_blank" class="ad-btn ad-round ad-md btn-pink ">
            <i class="fa fa-download"></i>
            Download
          </a>
          <a href="https://github.com/ProjectAir/cqured" target="_blank" class="ad-btn ad-round ad-md btn-pink ">
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
        <a href="#controller" class="ad-item">Controllers</a>
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
          This is a PHP 7.2+ MVC Framework for Web API to partner client-side applications like Angular, Ionic, etc.
        </p>
        <div class="ad-list">
          <div class="ad-item">
            Simple and Easy to use.
          </div>
          <div class="ad-item">
            Extensible with PHP's Composer
          </div>
          <div class="ad-item">
            Use JSON Web Tokens (JWT) the easy way with composer(visit www.jwt.io).
          </div>
          <div class="ad-item">
            Easily query your database with CoreModel.
          </div>

        </div>

        <p>
      </div>

      <div class="ad-card bg-white">

        <h2 class="title color-pink">INSTALLATION & Set-up</h2>
        <p>
          Download the the API from this repo, unzip it and place it at the directory of your PHP Server. eg. For XAMPP, place it at the 'htdocs' folder. You can rename the folder if you desire.
        </p>
        <p>
          Setting this framework up is very easy. Simply open the 'config.php' file; this file contains the configuration for the framework.
        </p>
      </div>
      <pre>
        <code class="php">
            &lt;?php

          class AdConfig
          {
          	// General
              public $offline = 0;
              public $offline_message = 'This site is down for maintenance. Please check back again soon.';
              public $display_offline_message = '1';
              public $offline_image = '';
              public $sitename = 'airCore';
              public $captcha = '0';
              public $list_limit = '20';
              public $access = '1';

              // Database Connection
              public $dbtype = 'mysqli';
              public $host = 'localhost';
              public $user = 'root';
              public $password = '';
              public $db = 'airDB';
              public $dbprefix = '';

              // Header & Cross Origin Setting
              public $allow_origin = "http://localhost:4200";
              public $allow_methods ='GET, POST, PUT, DELETE, OPTIONS';
              public $max_age='86400'; //cache for 1 day

              // Routing
              public $secret = 'Pi1gS3vrtWvNq3O0';
              public $routerPath="./app.router.php";
          }
        </code>
      </pre>

      <div class="ad-card bg-white">
        <p>
          The General Section are for handling the name and the offline mode of the api (similar to coreFramework's config file );
        </p>
        <div class="ad-list">
          <div class="ad-item">
            Database Connection Section: is for configuring the your database.
            <div class="ad-list bg-dark">
              <div class="ad-item">
                <span class='color-yellow'>$dbtype</span> : means the database server type,
                <div class="ad-list ad-sm">
                  <div class="ad-item">
                    For MySQL, MySQLi or MariaDB, use 'mysqli'
                  </div>
                  <div class="ad-item">
                    For Oracle , use 'oracle'
                  </div>
                  <div class="ad-item">
                    For MSSQL , use 'mssql'
                  </div>

                </div>
              </div>

              <div class="ad-item">
                The rest are self explanatory,
              </div>
              <div class="ad-item">
                <span class='color-yellow'>$host</span>: where the database is hosted
              </div>
              <div class="ad-item">
                <span class='color-yellow'>$user</span>: the username to access the database
              </div>
              <div class="ad-item">
                <span class='color-yellow'>$password</span>: the user password to access the database
              </div>
              <div class="ad-item">
                <span class='color-yellow'>$db</span>: the database name
              </div>
              <div class="ad-item">
                <span class='color-yellow'>$dbprefix</span>: the prefix for the tables in the database.
              </div>

            </div>
          </div>

          <div class="ad-item">
            Headers & Cross Origin Settings: This is to set the client apps to allow, the REQUEST_METHODS to accepts and the expire of the connection.
          </div>
          <div class="ad-item">
            Routing Section: this is to point the routing file for the navigation of the api to get to the controls.
          </div>
        </div>
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
            When ever a is request sent the the api or routed,
            the uri is sent to the '<span class="color-pink">app.router.php</span>'
            file, which then checks if the '<span class="color-pink">path</span>' matches the url.
            <br>
            <br>
            if yes the framework now renders the coresponding controller and its respective request-method as a response.
          </p>
        </div>
        <div class="ad-card ad-flat">
          <div class="ad-img center">
            <img src="<?=CDN;?>images/framework/cqured_folders.jpg" alt="">
          </div>
        </div>

      </div>


      <div class="ad-cols-8">


          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Controllers Folder </h2>
            <p>

              Folder contains all the controllers for the API. These controllers represent the URIs of the API.
              <br>
              o	For example, to create a controller to display data of <span class="color-pink">users</span>, we could decide to name the controller <span class="color-pink">users.controller.php</span>
              <br>
              o	The <span class="color-pink">user.controllers.php</span> file here handles the URI requests and  all the php logics and variable which are made available for renders response.

            </p>
          </div>
          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Models Folder </h2>
            <p>
              Folder contains all the models for the API. These models represent the individual database queries/entities of the API.
            </p>
          </div>
          <div class="ad-card ad-flat ad-block bg-white">

            <h3 class="title">Assets Folder </h3>
            <p>

              This contains the resource files and media content of the application. Some sub-folders in this folder are  images, videos and audio.
              <br>
              Images of the users, persons and items related to the database are stored here I separate folders with their respective names.
              <br>
              This way all the media content are properly organized and optimized for future updates and backward compatibility if the need arise.
            </p>
          </div>

          <div class="ad-card ad-flat ad-block bg-white">

            <h2 class="title">Config.php</h2>
            <p>
              The file is the configuration file of the API. It’s a class with default varibales such as offline (to determine if the api is available to view or under development), host, dbname, dbuser, dbpass, dbprefix etc.
              <br>
              These values are used by the framework to run the application. Any changes made to these values must be valid else the API will turn off.
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
              This folder contains the files for the framework and legacy file for the database and controller management.
            </p>
          </div>
      </div>
    </div>
  </div>
</section>



<div class="clearfix">

</div>


<section class="ad-section bg-white" id="controller">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-4">
          <div class="ad-card ad-flat">
            <h2 class="title">Controller</h2>
            <p>
              Controllers represents the routes that are called when a request is made.
              <br>
              For example,
              if i get users from my client side app, the uri to the api would probably be http://api.com/user.

            </p>
          </div>

          <pre>
            <code >
  getUsers():Observable<IUsers>{
    return this.http.get('http://api.com/user')
    .map(response => response.json());
  }
            </code>
          </pre>

          <div class="ad-card ad-flat">
            <div class="ad-item">
              For the above example, the request is sent to the api via http://api.com
            </div>
            <div class="ad-item">
              The '/user' here is used in web-api for routing to the a controller which will then return a response.
            </div>
            <div class="ad-item">
              Routing of the url to a controller is set at the 'app.router.php' file (which can be changed at the config.php)
            </div>
          </div>


          <pre>
            <code class='php'>
&lt;?php

  $apiRoutes = [
      ['path'=>'user', 'controller'=>'user'],
      ['path'=>'client', 'controller'=>'person']
      ];

  $apiRouterModule = CORE::getInstance('Router');
  $apiRouterModule->setRouter($apiRoutes);
            </code>
          </pre>


          <div class="ad-card ad-flat">
            <div class="ad-item">
              The 'path' represents the url path
            </div>
            <div class="ad-item">
              'Controller' is the controller to point to when the path mathes the url.
            </div>
            <div class="ad-item">
              For example, the 'person.controller.php' will be called if path is 'client; i.e.<span class='bg-dark color-yellow'>&nbsp;  http://api.com/client &nbsp;</span>
            </div>
          </div>

      </div>
      <div class="ad-cols-8">

        <div class="ad-card ad-flat">
          <h3 class="title">Default</h3>
          <p>
            By default, we only have a values.controller in the controllers folder, and in the app.router.php file, we have mapped the path values to the controller.
            <br>
            To view this in action, run your php server and open your browser and
enter the api path and the router path: <span class='bg-dark color-yellow'>&nbsp; http://localhost/cqured/values  &nbsp;</span>
  <br>
  You should see (That value is returned from the 'httpGet()' method in the controller.)
          </p>

          <pre>
            <code class='json'>
              ["value1","value2"]
            </code>
          </pre>

        </div>

        <div class="ad-card ad-flat">
          <h3 class="title">Controller Structure</h3>
          <pre>
            <code>
&lt;?php

use CoreModel as DB;

class ValuesController
{



    function __construct()
    {
    }


    // method called to handle a GET request

    function httpGet(int ...$id): ?array
    {

        return ['value1','value2'];
    }


    // method called to handle a POST request
    function httpPost(array $form)
    {
        $postId=null;

      // code here
        return ['success'=>true,'alert'=>'We have it at post','id'=>$postId];
    }


    // method called to handle a PUT request
    function httpPut(array $form, int $id)
    {


      // code here
        return ['success'=>true,'alert'=>'We have it at put'];
    }


    // method called to handle a DELETE request
    function httpDelete(int $id)
    {
      // code here
        return ['id'=>2];
    }
}
            </code>
          </pre>

          <div class="ad-item">
            Each time a request is sent to a controller, the api checks if the request method is allowed in the api (see config.php; Headers & Cross Origin Setting).
          </div>

          <div class="ad-item">
            Then it check the app.router.php to map the url path to the controller.

          </div>

          <div class="ad-item">
            When its found, the controller checks if it has a method to handle that Requested Method, else, an error is returned.

          </div>
        </div>

        <div class="ad-card ad-flat">
          <h3 class="title">Creating a controller</h3>
          <p>
            Open the controllers folder and create a new php file. The file name should match the name of the controller you want to create.
            <br>
             (Let us consider creating a controller for users.) Hence the controller file should be named <span class="color-pink">users.controller.php</span>
          </p>

        </div>
        <div class="ad-card">
          <p>
            In the <span class='bg-dark color-yellow'>&nbsp; users &nbsp;</span> folder, create two PHP files.
            <br>
            <i class='fa fa-exclamation'></i> Every controller must be named as <span class="color-pink">[name].controller.php</span> (where [name] represent the<span class="color-pink"> name</span> of the controller or URI).
            <br>
            The <span class="color-pink">user.controller.php</span> file here handles all the php logics and variable which are made available for the client app as JSON. It could be considered as the controller of the MVC framework.
            </p>

            <p>
              This is how the users.controller.php will look like:(The class name must match the name of the controller)
            </p>


            <pre>
              <code class="php">
&lt;?php

class UsersController
{

  function __construct()
  {
  }


  // method called to handle a GET request

  function httpGet(int ...$id): ?array
  {

      return ['value1','value2'];
  }


  // method called to handle a POST request
  function httpPost(array $form)
  {
      $postId=null;

    // code here
      return ['success'=>true,'alert'=>'We have it at post','id'=>$postId];
  }


  // method called to handle a PUT request
  function httpPut(array $form, int $id)
  {


    // code here
      return ['success'=>true,'alert'=>'We have it at put'];
  }


  // method called to handle a DELETE request
  function httpDelete(int $id)
  {
    // code here
      return ['id'=>2];
  }
}
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
          Though the users controller is created, we have not created any route to get to that controller.
            <br>
            To do so, we open the app.router.php file at the root directory of the framework.
          </p>
        </div>

        <div class="ad-card ad-flat">
          <div class="ad-img center">
            <img src="<?=CDN;?>images/framework/controller.jpg" alt="">
          </div>
        </div>

      </div>

      <div class="ad-cols-8">
        <div class="ad-card">
          <p>
            The <span class="color-pink">app.router.php</span> file registers a url to a controller, so that whenever the url matches the one registered, the binding controller (page) is displayed.
                </p>
                <div class="ad-list">
                  <div class="ad-item">
                    Create a variable called $users. The variable must be an array with members
                    <div class="ad-list ad-sm bg-dark">
                      <div class="ad-item">
                        <span class="color-yellow">path</span> : the url to bind the controller to. In this case, input ‘students’ as the value for this array member.
                      </div>
                      <div class="ad-item">
                        <span class="color-yellow">controller</span> : this should correspond to the controller name in the controllers folder. In this case, the folder name is ‘users’
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
                        'controller'=>'users'
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
     'path'=>'users', // http://127.0.0.1/users the router looks if the url matches the path, hence users. i.e http://api.com/{{path}}
     'controller'=>'users' // controller to go when the path matches the url given
    ];

    $appRouter = [
     ['path'=>'values', 'controller'=>'values'],
    $users

    ];

    $appRouterModule = CORE::getInstance('Router'); //creates an instance of the router class
    $appRouterModule->setRouter($appRouter); //registers the routers
            </code>
          </pre>
          <p>
            Now the users controller is available to the router to view in the browser. Enter the server name to the App and add the path of the controller ('users'). I.e
            <div class="ad-item ad-sm">
              <p>
                http://localhost/api/users.
                <br>
                This should display the users controller data as JSON from the httpGet() method.
              </p>
            </div>

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
            Authentication and Authorization is key in Application development and  cQured Web API already has this feature implemented for you.
          <br>
          '<span class="color-pink">authguard</span>' is also a member of the routes and takes arrays of models name as strings which are used to authorize clients to access the controller.
        </p>
      </div>

      <div class="ad-card ad-flat">
        <h3 class="title">Example</h3>

  <pre>
    <code class='php'>
      $appRouter = [
        //App controller does not contain any Authorization
        [
        'path'=>'values',
        'controller'=>'values'
        ],

        //Users controller contains Authorization
        [
        'path'=>'users',
        'controller'=>'users',
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
          If the   <span class="color-pink">canActivate</span> method returns   <span class="color-pink">TRUE</span>, then the controller or page loads
        </div>

        <div class="ad-item">
          if <span class="color-pink">FALSE</span>, page does not loads and the developer has the freedom to redirect the user to a differenct controller or show a 404 error.
        </div>
      </div>

      <div class="ad-card ad-flat">
        <h2 class='title'>Example of the authenticate model is as follows:</h2>
        <pre>
          <code class='php'>
  &lt;?php

  class AuthenticateModel{

    // This method is used by the routing class to allow or disallow a route to the controller
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
          The <span class="color-pink">$url</span> parameter of the method is automatically passed in by cQured API: That is, the path you are trying to access.
        </div>
        <div class="ad-item">
          <span class="color-pink">CoreSession::IsLoggedIn()</span> is a static method in coreFramework used to check if a users is LoggedIn.
          <div class="ad-list ad-sm bg-dark">
            <div class="ad-item">
              This method specifically checks if the <span class="color-yellow">$_SESSION['id']</span> isset.
            </div>
            <div class="ad-item">
              Apart from using the in-build authentication at CoreSession you could write your own code to check if a user is logged in or Use JWT with it.
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>


</div>
</section>
