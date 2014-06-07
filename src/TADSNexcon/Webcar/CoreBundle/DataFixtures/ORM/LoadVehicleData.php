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

use TADSNexcon\Webcar\CoreBundle\Entity\Vehicle;

class LoadVehicleData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 9;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $vehicle = new Vehicle();
        $vehicle->setName("A1");
        $vehicle->setBrand($this->getReference('Audi-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("A3");
        $vehicle->setBrand($this->getReference('Audi-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("A4");
        $vehicle->setBrand($this->getReference('Audi-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $vehicle = new Vehicle();
        $vehicle->setName("Celta");
        $vehicle->setBrand($this->getReference('Chevrolet-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Camaro");
        $vehicle->setBrand($this->getReference('Chevrolet-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("C3");
        $vehicle->setBrand($this->getReference('Citroen-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("C4");
        $vehicle->setBrand($this->getReference('Citroen-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Punto");
        $vehicle->setBrand($this->getReference('Fiat-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Novo Palio");
        $vehicle->setBrand($this->getReference('Fiat-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Novo Focus");
        $vehicle->setBrand($this->getReference('Ford-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Fusion");
        $vehicle->setBrand($this->getReference('Ford-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $vehicle = new Vehicle();
        $vehicle->setName("Fit");
        $vehicle->setBrand($this->getReference('Honda-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("City");
        $vehicle->setBrand($this->getReference('Honda-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Carros");
        $vehicle->setBrand($this->getReference('Hyundai-brand'));
        $vehicle->setMainImage($this->getReference('Hyundai '. $vehicle->getName() . '-vehicle-image'));
        $this->setReference('Hyundai ' .$vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("SUV");
        $vehicle->setBrand($this->getReference('Hyundai-brand'));
        $vehicle->setMainImage($this->getReference('Hyundai ' . $vehicle->getName() . '-vehicle-image'));
        $this->setReference('Hyundai ' . $vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Passeio");
        $vehicle->setBrand($this->getReference('Kia-brand'));
        $vehicle->setMainImage($this->getReference('Kia ' . $vehicle->getName() . '-vehicle-image'));
        $this->setReference('Kia ' . $vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("SUV");
        $vehicle->setBrand($this->getReference('Kia-brand'));
        $vehicle->setMainImage($this->getReference('Kia ' . $vehicle->getName() . '-vehicle-image'));
        $this->setReference('Kia ' . $vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Lancer");
        $vehicle->setBrand($this->getReference('Mitsubishi-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $vehicle = new Vehicle();
        $vehicle->setName("207");
        $vehicle->setBrand($this->getReference('Peugeot-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("208");
        $vehicle->setBrand($this->getReference('Peugeot-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $vehicle = new Vehicle();
        $vehicle->setName("Clio");
        $vehicle->setBrand($this->getReference('Renault-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Sandero");
        $vehicle->setBrand($this->getReference('Renault-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $vehicle = new Vehicle();
        $vehicle->setName("Corolla");
        $vehicle->setBrand($this->getReference('Toyota-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Hilux");
        $vehicle->setBrand($this->getReference('Toyota-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Etios");
        $vehicle->setBrand($this->getReference('Toyota-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Gol");
        $vehicle->setBrand($this->getReference('Volkswagen-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        $vehicle = new Vehicle();
        $vehicle->setName("Fox");
        $vehicle->setBrand($this->getReference('Volkswagen-brand'));
        $vehicle->setMainImage($this->getReference($vehicle->getName() . '-vehicle-image'));
        $this->setReference($vehicle->getName() . '-vehicle', $vehicle);
        $manager->persist($vehicle);
        
        
        $manager->flush();
    }
    
    
    
}
