<?php

    

     if (isset($_GET['plan'])) {

        $myplan = $_GET['plan'];
       
        
      } else {
    
          header('Location: pricing.php');
      }



      
                   
        if ($myplan == 'basic') {
            echo "This is basic";
        }elseif ($myplan == 'pro' ) {
            echo "This is pro";
        }elseif ($myplan == 'premium' ) {
            echo "This is premium";

        }elseif ($myplan == 'license' ) {
            echo "This is license";
        }


?>