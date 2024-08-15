<?php

// Importation de ficher contenant la connexion avec notre base de donner
require './../config/Database.php';
// Importation du ficher ou nous allons trouver toute le route qui vas nous mener dans le different page
require_once './../route/web.php';

// @requestUri es une variable qui prend url qui sera afficher dans le navigateur
$requestUri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

dispatch($requestUri);