<?php
  
function getPage($twig){
    var_dump($_GET);

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['formulaire'] = "formulaireControleur";
    
    if (isset($_GET['page'])){        
        $page = $_GET['page'];    
    }    
    else{        
        $page = 'accueil';
    }    
    if (isset($lesPages[$page])){        
        $contenu = $lesPages[$page];    
    }    
    else{        
        $contenu = $lesPages['accueil'];   
    } 

    $contenu = $lesPages[$_GET['page']];
    return $contenu; 
}
?>