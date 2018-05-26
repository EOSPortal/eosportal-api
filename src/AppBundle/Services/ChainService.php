<?php

namespace AppBundle\Services;

use AppBundle\Entity\Chain;
use Doctrine\ORM\EntityRepository;
use EOSPHP\EOSClient;

class ChainService extends EntityRepository
{
    public function create(string $url): Chain
    {
        $url = rtrim($url,'/');
        $eosClient = new EOSClient($url);
        $block = $eosClient->chain()->getBlock(1);
        $chainId = $block->actionMroot();

        $chain = $this->findOneBy(['chainId' => $chainId]);

        if ($chain) {
            $chain->addNode($url);
        } else {
            $chain = new Chain($url, $chainId);
        }

        return $this->store($chain);
    }

    private function store(Chain $chain): Chain
    {
        $this->getEntityManager()->persist($chain);
        $this->getEntityManager()->flush($chain);

        return $chain;
    }
}
