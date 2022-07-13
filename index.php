<?php
// On génère une constante qui contiendra le chemin vers index.php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

# Relier le vendor
require ROOT.'vendor/autoload.php';

# Relier les Models
require ROOT.'models/PortfolioModel.php';

# Relier les Controllers
require ROOT.'controllers/PortfolioHomeController.php';


# Initialisation du router
$router = new AltoRouter();


# DEBUT DES ROUTES

#Home
$router->map('GET',"/myPorfolio/",function()
{   
    $model = new PortfolioHomeController;
    $model->index();
});

# MATCHING DES ROUTES
$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) 
{
    call_user_func_array( $match['target'], $match['params'] ); 
} 
else 
{
// no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}