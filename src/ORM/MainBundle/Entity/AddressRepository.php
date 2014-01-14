<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AddressRepository extends EntityRepository
{
    public function CountAll()
    {
        $qb = $this->getEntityManager()->createQuery('
        SELECT COUNT (a) FROM ORMMainBundle:Address a');
        return $qb->getResult();
    }
}

?>