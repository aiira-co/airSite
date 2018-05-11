<!DOCTYPE html>

<html>
    <?php
    require_once 'features/title.php';

    require_once 'features/menu.php';


    ?>
    <!-- <ad-right> -->
      
      <?php
      echo AirJax?'<router-outlet  animate="true" >':null;
        CORE::CoreApp();
        echo AirJax?'</router-outlet>':null;
        require_once 'features/footer.php';

        ?>
    <!-- </ad-right> -->


    </body>
</html>
