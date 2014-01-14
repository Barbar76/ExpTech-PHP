<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PersonRepository extends EntityRepository
{
    public function CountByBirthDate($start)
    {
        $qb = $this->getEntityManager()->createQuery('
            SELECT COUNT (p) FROM ORMMainBundle:Person p
            WHERE p.birth = :date')
            ->setParameter('date', $start);

        return $qb->getResult();
    }

    public function CountAll()
    {
        $qb = $this->getEntityManager()->createQuery('
        SELECT COUNT (p) FROM ORMMainBundle:Person p');
        return $qb->getResult();
    }


}
?>