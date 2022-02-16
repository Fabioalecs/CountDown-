<?php

$today = time();

$event = mktime(0,0,0,6,1,2022);

$countdown = round(($event - $today)/86400);

echo "Faltam $countdown dias para o dia 01/06/2022";

?>