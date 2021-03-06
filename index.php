<?php
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

// debug(['hello','world']);
// exit;
echo '<h1>hello</h1>';


//definition de la page courante
if (isset($_GET['page']) and !empty($_GET['page'])) {

    $page = trim(strtolower($_GET['page'])); //HOME

} else {

    $page = 'home';
}

//array contenant toutes les pages
$allpages = scandir('controllers/');
// var_dump($allpages);

if (in_array($page . '_controller.php', $allpages)) {

    //inclusion de la page
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';
} else {
    //return error
    echo 'Erreur 404';
}