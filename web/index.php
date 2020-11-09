<?php

// Initialisation de l'environnement
include('./config/config_init.php');

// Gestion de Routing

// Affichage des templates
$smarty->display(_TPL_ . 'header.tpl'); //affiche le header partout

if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl'))
{
    $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
}
else
{
    $smarty->display(_TPL_ . 'pages/index.tpl');
}

$smarty->display(_TPL_ . 'footer.tpl'); //affiche le footer partout
?>