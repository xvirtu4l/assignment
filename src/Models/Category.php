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
}