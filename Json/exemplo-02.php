<?php

$json = '[{"nome":"Jo\u00e3o","idade":21},{"nome":"Matheus","idade":23}]';


$data = json_decode($json, true);


var_dump($data);




  ?>