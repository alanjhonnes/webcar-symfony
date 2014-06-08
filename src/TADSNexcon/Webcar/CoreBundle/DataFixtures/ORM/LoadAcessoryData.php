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

use TADSNexcon\Webcar\CoreBundle\Entity\Acessory;

class LoadAcessoryData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 0;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 1");
        $acessory->setPrice(100);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 2");
        $acessory->setPrice(150);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 3");
        $acessory->setPrice(200);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 4");
        $acessory->setPrice(300);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 5");
        $acessory->setPrice(500);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 6");
        $acessory->setPrice(50);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 7");
        $acessory->setPrice(50);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 8");
        $acessory->setPrice(50);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 9");
        $acessory->setPrice(50);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $acessory = new Acessory();
        $acessory->setName("Acessorio 10");
        $acessory->setPrice(50);
        $this->addReference($acessory->getName() . '-acessory', $acessory);
        $manager->persist($acessory);
        
        $manager->flush();
    }
}
