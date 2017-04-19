<?php

require '../Include/Config.php';
require '../Include/Functions.php';

//Security
if (!isset($_SESSION['iUserID'])) {
    Redirect('Login.php');
    exit;
}

// This file is generated by Composer
require_once dirname(__FILE__).'/../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__.'/../Include/slim/settings.php';
$app = new \Slim\App();
$container = $app->getContainer();

// Set up
require __DIR__.'/dependencies.php';
require __DIR__.'/../Include/slim/error-handler.php';

// system routes
require __DIR__.'/routes/database.php';
require __DIR__.'/routes/issues.php';

// people routes
require __DIR__.'/routes/search.php';
require __DIR__.'/routes/persons.php';
require __DIR__.'/routes/properties.php';
require __DIR__.'/routes/users.php';
require __DIR__.'/routes/families.php';
require __DIR__.'/routes/groups.php';

// finance routes
require __DIR__.'/routes/deposits.php';
require __DIR__.'/routes/payments.php';

// other
require __DIR__.'/routes/calendar.php';

//timer jobs
require __DIR__.'/routes/timerjobs.php';

//self-upgrade tasks
require __DIR__.'/routes/systemupgrade.php';

//registration
require __DIR__.'/routes/register.php';

//cart
require __DIR__.'/routes/cart.php';

//assets
require __DIR__.'/routes/assets.php';

// Run app
$app->run();
