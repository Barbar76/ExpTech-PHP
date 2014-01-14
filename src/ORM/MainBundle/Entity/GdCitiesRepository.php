<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GdCitiesRepository extends EntityRepository
{
    public function CountAll()
    {
        $qb = $this->getEntityManager()->createQuery('
        SELECT COUNT (a) FROM ORMMainBundle:GdCities a');
        return $qb->getResult();
    }
}

?>