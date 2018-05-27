<?php

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ChainFixtures extends Fixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /** @var  ContainerInterface */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $service = $this->container->get('eosportal.chains.chain_service');
        $urls = [
            'http://dev.cryptolions.io:38888',
            'http://35.180.46.228:8888',
            'http://37.139.15.114:8800/',
            'http://initg.n3.eosargentina.io:8888',
        ];

        foreach ($urls as $url) {
            try {
                $service->create($url);
            } catch (\Exception $ex) {

            }
        }
    }

    public function getOrder()
    {
        return 1;
    }
}
