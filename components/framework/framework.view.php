<section class="ad-section bg-dark" style="margin-top:-5px !important;">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <div class="ad-card ad-flat text-center">
          <div class="logo">
            <img src="<?=CDN;?>images/logo/coreframeworkWhite.png" class="img-responsive" alt="">
          </div>
          <br>
          <h2 class="title text-normal">
            CoreFramework: PHP 7.2+ Framework
          </h2>
          <p class="p-center">
            Develope Professional Website and Applications with ease:
  PHP 7 Framework with AirJax Framework, and airDesign in-the-box 'AirJax' is a lite javascript framework written for Single Page Application experience.
          </p>
          <br>
          <a href="https://github.com/air-Design/coreFramework" target="_blank" class="ad-btn ad-block ad-md btn-tgreen">Download Framework</a>
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
        <a href="#libraries" class="ad-item">Library Folder</a>
        <a href="#component" class="ad-item">Components</a>
        <a href="#models" class="ad-item">Models</a>
        <a href="#coremodel" class="ad-item">CoreModel</a>
        <a href="#routing" class="ad-item">Routing</a>
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


<section class="ad-section menu">
  <div class="wrapper">
    <div class="ad-row">

    </div>
  </div>
</section>


<section class="ad-section menu" id="structure">
  <div class="wrapper">
    <div class="ad-row">
      <div class="ad-cols-12">
        <h3>Folder Structure</h3>
        <div class="ad-card ad-flat">
          <div class="ad-img center">
            <img src="<?=BaseUrl;?>media/images/framework/structure.png" alt="">
          </div>
        </div>
      </div>
      <div class="ad-cols-6">
<div class="ad-card ad-flat ad-block bg-white">

  <h3 class="title">Component Folder </h3>
  <p>

    Folder contains all the components and models for the application. These components represent the individual pages of the application.
    <br>
    Every component must contain a [name].component.php and [name].view.php. (where [name] represent the name of the component or page).
      <br>
    o	For example, to create a page to display list of users, we could decide to name the component users.component.php and users.view.php, contained in a folder called users.
    <br>
    o	We advise that every component must be within a folder having the name of the component itself.
    <br>
    o	The user.component.php file here handles all the php logics and variable which are made available for the view file. It could be considered as the controller of the MVC framework.
    <br>
    o	The users.view.php file is rendered in the browser as the user’s page.
  </p>
</div>

<div class="ad-card ad-flat ad-block bg-white">

  <h3 class="title">Media Folder </h3>
  <p>

    This contains the media content of the application. The sub folder in this folder are images, videos and audio.
    <br>
    The logo and favicon of the application is stored in the images folder here. Images of the users, persons and items related to the database are also stored here I separate folders with their respective names.
    <br>
    This way all the media content are properly organized and optimized for future updates and backward compatibility if the need arise.
  </p>
</div>

<div class="ad-card ad-flat ad-block bg-white">

  <h3 class="title">Plugin Folder </h3>
  <p>

    This contains both primary and third party plugins that can be called within a component for practical use.
    <br>
    Calling a plugin for implementation will be handled the framework using a method. The way to install or use a plugin is to copy and past the plugin in its folder to the plugins folder, register the plugin in the index.php file in the folder then call it with the syntax –
    <br>
    CORE::getPlugin(‘name’)
  </p>
</div>



      </div>

      <div class="ad-cols-6">

        <div class="ad-card ad-flat ad-block bg-white">

          <h3 class="title">Templates Folder</h3>
          <p>
            This contains the templates or themes for the application or website.
            <br>
            The config.php files have a variable called template which tells the application which template to use. The value for the template variable must match the name of the template in the templates folder.
            <br>
            There are tutorials on creating your own templates, or you can decide to download some of our free templates here online.
          </p>
        </div>

        <div class="ad-card ad-flat ad-block bg-white">

          <h3 class="title">Config.php</h3>
          <p>
            The file is the configuration file of the application. It’s a class with default varibales such as offline (to determine if the application is available to view or under development), host, dbname, dbuser, dbpass, dbprefix etc.
            <br>
            These values are used by the framework to run the application. Any changes made to these values must be valid else the app will turn off.
          </p>
        </div>

        <div class="ad-card ad-flat ad-block bg-white">

          <h3 class="title">Index.php </h3>
          <p>
            Index.php files. This is the default file which check the config.php file for offline value, start the session and set CONSTANTS for the application.
            <br>
            You are advised not to alter this file except you know what you are about.
          </p>
        </div>
        <div class="ad-card ad-flat ad-block bg-white">

          <h3 class="title">Libraries Folder </h3>
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
      <div class="ad-cols-12">
        <h3>Components</h3>
        <p>
          Each component here represents a page in the website or application. Components are created in the components folder in an independent folder. This way, the application Is organized and the components are reusable in other applications.
        </p>

        <h4>Creating a component</h4>
        <p>
          Open the component folder and create a new folder. The folder name should match the name of the component you want to create. (Let us consider creating a component to view students in a class.) Hence the component folder should be named student.
        </p>
        <p>
          In the student folder, create two PHP files.
          <br>
          <br>
          (a).	student.component.php file: this file is the component class which controls what is displayed in the view. This file must have a class StudentComponent.
          <br>
          &nbsp; i.	Just for the sack of expirement, create a public $title variable in the component class, and assign the value ‘This is the student component’ as its value.
          This variable will be used in the view file to display in the browser.
          <br>
          <br>
          (b).	student.view.php file: this file is rendered as the page in the browser.
          This file contains mostly HTML elements and few PHP codes to echo variables from its component file.
          <br>
            &nbsp; i.	Create header tag, say h2 /h2 and echo the $title variable in the element like so: <span class="colorPink">h2 <=$title;> /h2</span>
            <br>
            &nbsp; ii.	Any variable called in the view must be a public variable which exists or is declared in its respective component class.
            <br>
              &nbsp; PHP will show error if the $title variable is not found in the component class.
            <br>
            &nbsp; iii.	Private variables in the component class will not be available for the view file to echo or print.

        </p>
        <p>
          (3).	Though the student component is created, we have not created any route to get to that component. To do so, we open the app.router.php file at the root directory of the framework.
          <br>
          <br>
          (4).	The app.router.php file registers a url to a component, so that whenever the url matches the one registered, the binding component (page) is displayed.
          <br>
          <br>
          (5).	Create a variable called $student. The variable must be an array with members
          <br>
            &nbsp; a.	Path: the url to bind the component to. In this case, input ‘students’ as the value for this array member.
            <br>
              &nbsp; b.	Component: this should correspond to the component folder name in the components folder. In this case, the folder name is ‘student’
              <br>
                &nbsp; c.	Title: this is the title that displayed at the browser’s tab when the component or page is view. This member can be omitted.
          <br>
          <br>
          (6).	The $student variable should look like:
          <br>
          <br>
          (7).	<span class="colorPink"></span>$student = array('path'=>'students', 'component'=>'student', 'title'=>'students page');
          <br>
          <br>
          (8).	The above variable is not yet registered as a route. To register the variable, add it as a parameter to the setRouter() argument. Like so:
          <br>
            &nbsp; a.	$router->setRouter($base, $..., $student);
          <br>
          <br>
          (9).	Now the student component is available to the router to view in the browser. Enter the server name to the App and add the path of the component (‘student’). I.e
          <br>
            &nbsp; a.	http://localhost/MyApp/student.
            <br>
              &nbsp; b.	This should display the student component and the $title variable should be echo-ed to the screen.
          <br>
          <br>
          (10).	To learn more about routing, click here

        </p>
      </div>
    </div>
  </div>
</section>
