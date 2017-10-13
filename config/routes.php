<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('hello', function() {
  echo "Hello,这是一个简单的框架！";
});
Macaw::get('', 'app\controllers\HomeController@home');
Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();
