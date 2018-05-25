<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Chain;
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
        $entity = new Chain('url');
        $this->container->get('doctrine.orm.entity_manager')->persist($entity);
        $this->container->get('doctrine.orm.entity_manager')->flush($entity);
    }

    public function getOrder()
    {
        return 1;
    }
}
