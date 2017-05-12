<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Pagerfanta\Pagerfanta;
use Hateoas\Representation\CollectionRepresentation;
use Hateoas\Representation\PaginatedRepresentation;

abstract class AbstractRepository extends EntityRepository
{
    protected function paginate(QueryBuilder $qb, $limit, $offset)
    {
        dump($qb);
        $collection = new CollectionRepresentation($qb);
        dump($collection);
        $paginated = new PaginatedRepresentation(
            $collection,
            'api_programmes_list',
            array(),
            '1',
            $limit,
            $offset
        );
        return $paginated;
    }
}