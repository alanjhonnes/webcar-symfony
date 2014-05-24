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

use TADSNexcon\Webcar\CoreBundle\Entity\Model;

class LoadModelData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 10;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $model = new Model();
        $model->setName("A1 Sportback");
        $model->setVehicle($this->getReference('A1-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A3 Sportback");
        $model->setVehicle($this->getReference('A3-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A3 Sedan");
        $model->setVehicle($this->getReference('A3-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A4 Sedan");
        $model->setVehicle($this->getReference('A4-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Série 1");
        $model->setVehicle($this->getReference('BMW-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Série 3");
        $model->setVehicle($this->getReference('BMW-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Celta");
        $model->setVehicle($this->getReference('Chevrolet-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Camaro");
        $model->setVehicle($this->getReference('Chevrolet-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("C3");
        $model->setVehicle($this->getReference('Citroen-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("C4");
        $model->setVehicle($this->getReference('Citroen-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Punto");
        $model->setVehicle($this->getReference('Fiat-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Novo Palio");
        $model->setVehicle($this->getReference('Fiat-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Focus");
        $model->setVehicle($this->getReference('Ford-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Fusion");
        $model->setVehicle($this->getReference('Ford-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("Fit");
        $model->setVehicle($this->getReference('Honda-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Civic");
        $model->setVehicle($this->getReference('Honda-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Hyndai Carros");
        $model->setVehicle($this->getReference('Hyundai-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Hyndai SUV's");
        $model->setVehicle($this->getReference('Hyundai-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Picanto");
        $model->setVehicle($this->getReference('Kia-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Soul");
        $model->setVehicle($this->getReference('Kia-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Lancer");
        $model->setVehicle($this->getReference('Mitsubishi-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Mirage");
        $model->setVehicle($this->getReference('Mitsubishi-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("207");
        $model->setVehicle($this->getReference('Peugeot-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("208");
        $model->setVehicle($this->getReference('Peugeot-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("Clio");
        $model->setVehicle($this->getReference('Renault-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Sandero");
        $model->setVehicle($this->getReference('Renault-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("Corolla Altis");
        $model->setPrice(80000);
        $model->setVehicle($this->getReference('Corolla-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Corolla GLi");
        $model->setPrice(85000);
        $model->setVehicle($this->getReference('Corolla-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Corolla XEi");
        $model->setPrice(87000);
        $model->setVehicle($this->getReference('Corolla-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Hylux");
        $model->setPrice(60000);
        $model->setVehicle($this->getReference('Toyota-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Etios");
        $model->setVehicle($this->getReference('Toyota-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Gol");
        $model->setVehicle($this->getReference('Volkswagen-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Fox");
        $model->setVehicle($this->getReference('Volkswagen-vehicle'));
        $model->setMainImage($this->getReference($model->getName() . '-model-image'));
        $this->setReference($model->getName() . '-model', $model);
        $manager->persist($model);
        
        
        $manager->flush();
    }
}
