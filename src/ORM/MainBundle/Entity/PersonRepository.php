<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PersonRepository extends EntityRepository
{
    public function fBirth($start)
    {
        $qb = $this->getEntityManager()->createQuery('
            SELECT p FROM ORMMainBundle:Person p
            WHERE p.birth = :date')
            ->setParameter('date', $start);

        return $qb->getResult();
    }
}

?>