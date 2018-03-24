<?php
namespace My\Project\Runner;
require __DIR__.'/vendor/autoload.php';
use Illuminate\Support\Collection;

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
	return strtoupper($name);
    });

    return $collection;
}