<?php

use App\DB\Builder;
use App\DB\Connection;

require_once __DIR__ . '/autoload.php';

$connection = Connection::getInstance();
$builder = Builder::table('catalog');

$filter = $_POST['filter'] ?? [];
$sort = $_POST['sort'] ?? null;
$order = $_POST['order'] ?? null;

$category = $_POST['category'] ?? null;

if ($category !== null) {
    $builder->where('category', '=', $category);
}

$page = $_POST['page'] ?? 1;
$perPage = $_POST['per_page'] ?? 4;

if (empty($filter) === false) {
    foreach ($filter as $key => $value) {
        switch ($key) {
            case 'price': {
                if (isset($value['from'])) {
                    $builder->where($key, '>=', $value['from']);
                }
                if (isset($value['to'])) {
                    $builder->where($key, '<=', $value['to']);
                }
            }
            break;
            case 'color': $builder->where('color_id', 'in', is_array($value) ? $value : [$value]); break;
            case 'bluetooth': $builder->where('bluetooth', '=', $value); break;
        };
    } 
}

if ($sort === null) {
    $builder->order('id');
} else {
    $builder->order($sort, $order ?? 'desc');
}
$allBuilder = clone $builder;
$builder->paginate($page, $perPage);
$queryResult = $connection->execute($builder->toSql());
$totalCountsResult = $connection->execute($allBuilder->select('count(*)')->toSql());

echo json_encode([
    'items' => $queryResult,
    'totalItems' => (int) $totalCountsResult[0]['count(*)'],
]);