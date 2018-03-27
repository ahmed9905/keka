<?php
namespace Master\Albom;
require_once "conectbd.php";

$tableSource = \Master\Conectbd\inputAllTableSource();

print_r($tableSource);