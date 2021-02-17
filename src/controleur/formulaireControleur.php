<?php
function formualireControleur($twig){    
    $form = array();     
    if (isset($_POST['btInTP'])){      
        $titre = $_POST['titre'];      
        $textArea = $_POST['textArea'];         
        $form['valide'] = true;      
        if (!exec){       
            $form['valide'] = false;          
            $form['message'] = 'Les mots de passe sont différents';
        }      
        $form['textArea'] = $textArea;      
        $form['titre'] = $titre;    
    }

    echo $twig->render('formulaire.html.twig', array());
    }
?>