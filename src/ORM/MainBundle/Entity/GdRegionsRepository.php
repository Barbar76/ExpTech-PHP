<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GdRegionsRepository extends EntityRepository
{
    public function CountAll()
    {
        $qb = $this->getEntityManager()->createQuery('
        SELECT COUNT (a) FROM ORMMainBundle:GdRegions a');
        return $qb->getResult();
    }
}

?>