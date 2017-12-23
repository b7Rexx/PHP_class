<?php

$new_time = mktime(12,12,20, 12,20,2017);


date_default_timezone_set('Asia/Kathmandu');


echo date_default_timezone_get();

echo '<br>';
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y-m-d H:i:s',$new_time);

