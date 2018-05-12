<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 2018/5/12
 * Time: 11:00
 */

require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'admin\demo@index');
Macaw::get('page', 'admin\demo@page');
Macaw::get('view/(:num)', 'admin\demo@view');

Macaw::dispatch();