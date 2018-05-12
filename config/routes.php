<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 2018/5/12
 * Time: 16:54
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('mayuan', function() {
    echo "成功！";
});

Macaw::get('(:all)', function($fu) {
    echo '匹配all';
});

Macaw::get('(:any)', function($fu) {
    echo '匹配any';
});

Macaw::dispatch();