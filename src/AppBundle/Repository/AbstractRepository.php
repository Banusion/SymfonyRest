<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

abstract class AbstractRepository extends EntityRepository
{
    protected function paginate(QueryBuilder $qb, $limit = 1, $offset = 1)
    {
        /*if (0 == $limit || 0 == $offset) {
            throw new \LogicException('$limit & $offset must be greater than 0.');
        }
        $result = new DoctrineORMAdapter($qb);
        dump($result);*/
        $pager = new Pagerfanta(new DoctrineORMAdapter($qb));
        /*dump($pager);*/
        $pager->setCurrentPage(1);
        /*dump($pager);*/
        $pager->setMaxPerPage((int) $limit);
        return $pager;
    }
}