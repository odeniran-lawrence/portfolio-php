<?php
/** 
 * le routeur est chargé d'écouter les 
 * requêtes HTTP provenant du client web 
 * puis d'y répondre avec le contenu approprié.
*/


/**  if($_SERVER['REQUEST_URI'] === '/'){
 *header("Location: https://www.google.com/", true, 301);
 *};
 */

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
    case '/':
        echo "Page d'accueil";
        break;
    case '/about':
        echo "Page de présentation";
        break;
    case '/skills':
        echo "Page de compétences";
        break;
    case '/projects':
        echo "Page de projects";
        break;
    case '/contact':
        include "./templates/contact.php";
        break;
    default:
        echo "Page 404, introuvable";
        break;
}
