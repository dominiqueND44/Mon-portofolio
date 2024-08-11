<?php

if(isset($_POST['envoyer'])) {
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['subject']) 
    && !empty($_POST['subject']) && isset($_POST['email']) 
    && !empty($_POST['email'])&& isset($_POST['message']) && !empty($_POST['message']
    
    ))

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
       
      

     
        } else {
            $errorMessage = "Veuillez remplir tous les champs!";
            
        }
        
        ?>