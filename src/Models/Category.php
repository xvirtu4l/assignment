<?php
namespace Asm\Final\Models;

use Asm\Final\Commons\Model;

class Category extends Model 
{
    protected string $tableName = 'categories';

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'c.id', 'c.name'
            )
            ->from($this->tableName, 'c')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('c.id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function countByCategory()
{
    return $this->queryBuilder
        ->select(
            'c.id as id',
            'c.name as name',
            'COUNT(p.id) as product_count'
        )
        ->from($this->tableName, 'c')
        ->innerJoin('c', 'products', 'p', 'c.id = p.category_id')
        ->groupBy('c.id', 'c.name')
        ->orderBy('c.id', 'asc')
        ->fetchAllAssociative();
}
}