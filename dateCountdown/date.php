<?php
        $today = date('w');
      
        switch ($today) {
            case 1:
            echo 'It is Monday <br> Lundi en francais' ;
                break;
            case 2:
            echo 'It is Tuesday <br> Mardi en francais' ;
                break;
            case 3:
            echo 'It is Wednesday <br> Mercredi en francais' ;
                break;
            case 4:
            echo 'It is Thursday <br> Jeudi en francais' ;
                break;
            case 5:
            echo 'It is Friday <br> Vendredi en francais' ;
                break;
            case 6:
            echo 'It is Saturday <br> Samedi en francais' ;
                break;
            case 0:
            echo 'It is Sunday <br> Dimanche en francais' ;
                break;
            
        }