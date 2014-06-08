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
use TADSNexcon\Webcar\CoreBundle\Entity\ModelColor;

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
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Azul', 'Branco', 'Laranja', 'Preto'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A3 Sportback");
        $model->setVehicle($this->getReference('A3-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Azul', 'Prata', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A3 Sedan");
        $model->setVehicle($this->getReference('A3-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Azul', 'Prata', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A4 Avant");
        $model->setVehicle($this->getReference('A4-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Preto', 'Vermelho', 'Azul'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("A4 Sedan");
        $model->setVehicle($this->getReference('A4-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Branco', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Celta");
        $model->setVehicle($this->getReference('Celta-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Branco', 'Preto', 'Vermelho', 'Azul'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Camaro SS");
        $model->setVehicle($this->getReference('Camaro-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Branco', 'Amarelo', 'Preto'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("C3");
        $model->setVehicle($this->getReference('C3-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Branco', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("C4");
        $model->setVehicle($this->getReference('C4-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Punto");
        $model->setVehicle($this->getReference('Punto-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Novo Palio");
        $model->setVehicle($this->getReference('Novo Palio-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Novo Focus");
        $model->setVehicle($this->getReference('Novo Focus-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Fusion");
        $model->setVehicle($this->getReference('Fusion-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("Fit");
        $model->setVehicle($this->getReference('Fit-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("City");
        $model->setVehicle($this->getReference('City-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Cinza Chumbo','Branco', 'Prata', 'Preto'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("HB20");
        $model->setVehicle($this->getReference('Hyundai Carros-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("HB20S");
        $model->setVehicle($this->getReference('Hyundai Carros-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Branco'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("HB20X");
        $model->setVehicle($this->getReference('Hyundai Carros-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Branco', 'Marrom', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Tucson Flex");
        $model->setVehicle($this->getReference('Hyundai SUV-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Picanto");
        $model->setVehicle($this->getReference('Kia Passeio-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Preto', 'Verde', 'Vermelho', 'Amarelo'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Soul");
        $model->setVehicle($this->getReference('Kia Passeio-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Cinza', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Sportage");
        $model->setVehicle($this->getReference('Kia SUV-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Laranja', 'Preto', 'Vermelho', 'Azul'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Lancer GT");
        $model->setVehicle($this->getReference('Lancer-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Lancer MT");
        $model->setVehicle($this->getReference('Lancer-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Branco', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("207");
        $model->setVehicle($this->getReference('207-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Cinza', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("208");
        $model->setVehicle($this->getReference('208-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Branco', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        
        $model = new Model();
        $model->setName("Clio");
        $model->setVehicle($this->getReference('Clio-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Branco', 'Prata', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Sandero");
        $model->setVehicle($this->getReference('Sandero-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Verde', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Sandero Stepway");
        $model->setVehicle($this->getReference('Sandero-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Verde', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Corolla do Bonini");
        $model->setPrice(999999);
        $model->setVehicle($this->getReference('Corolla-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
//        $model = new Model();
//        $model->setName("Corolla Altis");
//        $model->setPrice(80000);
//        $model->setVehicle($this->getReference('Corolla-vehicle'));
//        $this->setReference($model->getName() . '-model', $model);
//        $model->setMotorization('2.0 8V');
//        $this->addModelColors($model, array('Prata', 'Verde', 'Preto', 'Vermelho'));
//        $manager->persist($model);
//        
//        $model = new Model();
//        $model->setName("Corolla GLi");
//        $model->setPrice(85000);
//        $model->setVehicle($this->getReference('Corolla-vehicle'));
//        $this->setReference($model->getName() . '-model', $model);
//        $model->setMotorization('2.0 8V');
//        $this->addModelColors($model, array('Prata', 'Verde', 'Preto', 'Vermelho'));
//        $manager->persist($model);
//        
//        $model = new Model();
//        $model->setName("Corolla XEi");
//        $model->setPrice(87000);
//        $model->setVehicle($this->getReference('Corolla-vehicle'));
//        $this->setReference($model->getName() . '-model', $model);
//        $model->setMotorization('2.0 8V');
//        $this->addModelColors($model, array('Prata', 'Verde', 'Preto', 'Vermelho'));
//        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Hilux");
        $model->setPrice(60000);
        $model->setVehicle($this->getReference('Hilux-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Branco', 'Preto Eclipse', 'Preto Safira', 'Cinza Chumbo'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Etios Cross");
        $model->setVehicle($this->getReference('Etios-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Amarelo', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Etios Hatch");
        $model->setVehicle($this->getReference('Etios-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Gol");
        $model->setVehicle($this->getReference('Gol-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $model = new Model();
        $model->setName("Fox");
        $model->setVehicle($this->getReference('Fox-vehicle'));
        $this->setReference($model->getName() . '-model', $model);
        $model->setPrice(30000);
        $model->setMotorization('2.0 8V');
        $this->addModelColors($model, array('Prata', 'Azul', 'Preto', 'Vermelho'));
        $this->addKits($model);
        $this->addAcessories($model);
        $manager->persist($model);
        
        $manager->flush();
    }
    
    public function addModelColors(Model $model, $colors){
        $mainImage = false;
        foreach ($colors as $color) {
            $modelColor = new ModelColor();
            $modelColor->setColor($this->getReference($color . '-color'));
            $modelColor->setPrice(rand(0, 500));
            $modelColor->setModel($model);
            $modelColor->setImage($this->getReference($model->getName() . ' - ' . $color . '-model-image'));
            $model->addModelColor($modelColor);
            if(!$mainImage){
                $model->setMainImage($this->getReference($model->getName() . ' - ' . $color . '-model-image'));
                $mainImage = true;
            }
            
        }
    }
    
    public function addKits(Model $model, $kits = null){
        if(!$kits){
            $model->addKit($this->getReference('Kit 1-kit'));
            $model->addKit($this->getReference('Kit 2-kit'));
            $model->addKit($this->getReference('Kit 3-kit'));
            $model->addKit($this->getReference('Kit 4-kit'));
        }
        else {
            
        }
    }
    
    public function addAcessories(Model $model, $acessories = null){
        if(!$acessories){
            $model->addAcessory($this->getReference('Acessorio 1-acessory'));
            $model->addAcessory($this->getReference('Acessorio 2-acessory'));
            $model->addAcessory($this->getReference('Acessorio 3-acessory'));
            $model->addAcessory($this->getReference('Acessorio 4-acessory'));
            $model->addAcessory($this->getReference('Acessorio 5-acessory'));
            $model->addAcessory($this->getReference('Acessorio 6-acessory'));
        }
        else {
            
        }
    }
    
    
}
