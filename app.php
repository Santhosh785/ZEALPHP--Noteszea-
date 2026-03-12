<?php

require 'vendor/autoload.php';

use ZealPHP\App;

use function ZealPHP\elog;

$app = App::init('0.0.0.0', 8080);

elog(App::$superglobals ? "[*] Superglobals Enabled" : "[*] Superglobals Disabled");



# Define routes here

$app->route('/hello/{name}', function ($name) {
    App::render('/hello', ['name' => $name]);
});

$app->route('/hello', function () {
    App::render('check');
});

# Additional routes can be added in `route` directory also

$app->run();
