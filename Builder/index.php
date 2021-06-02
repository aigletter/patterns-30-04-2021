<?php

use patterns\Builder\QueryBuilder;

include '../../vendor/autoload.php';

//$query = new patterns\Builder\Query('users', '*', null, null, null, 'user = 1');
$builder = new QueryBuilder();

$get['orderBy'] = 'name';

/*$builder->setTable('user');
$builder->setSelect('*');
$builder->setWhere('id = 1');
$query = $builder->build();*/

$builder->setTable('users')
    ->setWhere('id = 2')
    ->setSelect('*');

if (isset($get['orderBy'])) {
    $builder->setOrderBy($get['orderBy']);
}

$query = $builder->setJoin('join')->build();

print_r($query);