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

use TADSNexcon\Webcar\CoreBundle\Entity\Brand;

class LoadBrandData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 6;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $brand = new Brand();
        $brand->setName("Toyota");
        $brand->setLogo($this->getReference('toyota-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Fiat");
        $brand->setLogo($this->getReference('fiat-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Ford");
        $brand->setLogo($this->getReference('ford-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Volkswagen");
        $brand->setLogo($this->getReference('volkswagen-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Mitsubishi");
        $brand->setLogo($this->getReference('mitsubishi-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Renault");
        $brand->setLogo($this->getReference('renault-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("");
        $brand->setLogo($this->getReference('toyota-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Chevrolet");
        $brand->setLogo($this->getReference('chevrolet-logo'));
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Pegeout");
        $brand->setLogo($this->getReference('pegeout-logo'));
        $manager->persist($brand);
        
        $manager->flush();
    }
}
