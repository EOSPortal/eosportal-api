<?php

namespace AppBundle\Services;

use AppBundle\Entity\Chain;
use Doctrine\ORM\EntityRepository;

class ChainService extends EntityRepository
{
    public function store(Chain $chain): Chain
    {
        $this->getEntityManager()->persist($chain);
        $this->getEntityManager()->flush($chain);

        return $chain;
    }

}
