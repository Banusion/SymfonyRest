<?php

namespace AppBundle\Repository;

class ArticleRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit, $offset)
    {
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
        ;
        if ($term) {
            $qb
                ->where('a.title LIKE ?1')
                ->setParameter(1, '%'.$term.'%')
            ;
        }
        return $this->paginate($qb, $limit, $offset);
    }
}