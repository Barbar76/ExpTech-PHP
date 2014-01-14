<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GdCountriesRepository extends EntityRepository
{
    public function CountAll()
    {
        $qb = $this->getEntityManager()->createQuery('
        SELECT COUNT (a) FROM ORMMainBundle:GdCountries a');
        return $qb->getResult();
    }
}

?>