<?php

function dispatch($uri) {

    $routes = [
        // A gauche on trouve le chemin qui se trouve dans l'url, on peut aussi l'utiliser dans la balise <a> pour se deplacer de page en page
        // A droit c'est le chemin pour trouver notre ficher qui contient notre page.
        '/solola/public/index.php' => './../view/user/index.php',
    ];

    if (array_key_exists($uri, $routes)) {
        $page = $routes[$uri];
        require $page;
    }
    else{
        // La page 404 qui apparait lorsque la page exiger n'existe pas
        http_response_code(404);
        require './../view/404.php';
    }
}