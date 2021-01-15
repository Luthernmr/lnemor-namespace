<?php
namespace lnemor;

function checkPassword($string){
    if(strlen($string) < 8){
        echo 'Le mot de passe doit avoir au moin 8 caratère';
    }
 
    else if(!preg_match('#^(?=.*[a-z])#', $string)) {
        echo 'Il doit y a voir au moin une minuscule';
    }
    else if(!preg_match('#^(?=.*[A-Z])#', $string)) {
        echo 'Il doit y a voir au moin une majuscule';
    }
    else if(!preg_match('#^(?=.*[0-9])#', $string)) {
        echo 'Il doit y a voir au moin un chiffre';
    }
    else if(!preg_match('#^(?=.*\W)#', $string)) {
        echo 'Il doit y a voir au moin un caractère spéciaux';
    }
    

    if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $string)) {
        echo 'Mot de passe conforme';
	}
    
    

}
    /*
        - créer un namespace (première lettre du prénom + nom | ex.: dhurtrel)
        - créer une fonction checkPassword permettant de vérifier la composition d'un mot de passe :
            - 8 caractères
            - 1 caractère spécial
            - 1 minuscule
            - 1 majuscule
            - 1 chiffre
        - afficher un message 
    */

?>