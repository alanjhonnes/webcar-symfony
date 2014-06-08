<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Bundle\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use TADSNexcon\Webcar\CoreBundle\Entity\Kit;

class LoadKitData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 5;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $kit = new Kit();
        $kit->setName("Kit 1");
        $kit->setBasePrice(0);
        $kit->setDescription('Descrição kit 1');
        $kit->addAcessory($this->getReference('Acessorio 1-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 2-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 3-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 4-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 5-acessory'));
        $this->addReference($kit->getName() . '-kit', $kit);
        $manager->persist($kit);
        
        $kit = new Kit();
        $kit->setName("Kit 2");
        $kit->setBasePrice(100);
        $kit->setDescription('Descrição kit 2');
        $kit->addAcessory($this->getReference('Acessorio 6-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 7-acessory'));
        $this->addReference($kit->getName() . '-kit', $kit);
        $manager->persist($kit);
        
        
        $kit = new Kit();
        $kit->setName("Kit 3");
        $kit->setBasePrice(200);
        $kit->setDescription('Descrição kit 3');
        $kit->addAcessory($this->getReference('Acessorio 8-acessory'));
        $kit->addAcessory($this->getReference('Acessorio 9-acessory'));
        $this->addReference($kit->getName() . '-kit', $kit);
        $manager->persist($kit);
        
        $kit = new Kit();
        $kit->setName("Kit 4");
        $kit->setBasePrice(500);
        $kit->setDescription('Descrição kit 4 sem acessorios');
        $this->addReference($kit->getName() . '-kit', $kit);
        $manager->persist($kit);
        
        $manager->flush();
    }
}
