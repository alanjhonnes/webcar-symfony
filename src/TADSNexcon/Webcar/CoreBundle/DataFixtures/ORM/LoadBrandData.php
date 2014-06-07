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
        $brand->setName("Audi");
        $brand->setLogo($this->getReference('audi-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
//        $brand = new Brand();
//        $brand->setName("BMW");
//        $brand->setLogo($this->getReference('bmw-logo'));
//        $this->setReference($brand->getName() . '-brand', $brand);
//        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Chevrolet");
        $brand->setLogo($this->getReference('chevrolet-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Citroen");
        $brand->setLogo($this->getReference('citroen-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Fiat");
        $brand->setLogo($this->getReference('fiat-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Ford");
        $brand->setLogo($this->getReference('ford-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Honda");
        $brand->setLogo($this->getReference('honda-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Hyundai");
        $brand->setLogo($this->getReference('hyundai-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Kia");
        $brand->setLogo($this->getReference('kia-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Mitsubishi");
        $brand->setLogo($this->getReference('mitsubishi-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Peugeot");
        $brand->setLogo($this->getReference('peugeot-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Renault");
        $brand->setLogo($this->getReference('renault-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Toyota");
        $brand->setLogo($this->getReference('toyota-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName("Volkswagen");
        $brand->setLogo($this->getReference('volkswagen-logo'));
        $this->setReference($brand->getName() . '-brand', $brand);
        $manager->persist($brand);
        
        
        $manager->flush();
    }
}
