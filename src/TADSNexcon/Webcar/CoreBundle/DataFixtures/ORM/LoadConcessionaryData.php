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

use TADSNexcon\Webcar\CoreBundle\Entity\Concessionary;

class LoadConcessionaryData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 7;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas');
        $concessionary->setCep("03243000");
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat('-23.624429');
        $concessionary->setLng('-46.640123');
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas 2');
        $concessionary->setCep('03243000');
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat($this->getLat());
        $concessionary->setLng($this->getLng());
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas 3');
        $concessionary->setCep('03243000');
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat($this->getLat());
        $concessionary->setLng($this->getLng());
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas 4');
        $concessionary->setCep(03243000);
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat($this->getLat());
        $concessionary->setLng($this->getLng());
        
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas 5');
        $concessionary->setCep(03243000);
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat($this->getLat());
        $concessionary->setLng($this->getLng());
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $concessionary = new Concessionary();
        $concessionary->setName('Concessionária Multimarcas 6');
        $concessionary->setCep(03243000);
        $concessionary->setCity("São Paulo");
        $concessionary->setCnpj("00.000.000/0001-00");
        $concessionary->setUf("SP");
        $concessionary->setNeighborhood("Bairro test");
        $concessionary->setStreet("Rua tal");
        $concessionary->setSite("http://alanjhonnes.com");
        $concessionary->setNumber(rand(10, 2000));
        $concessionary->setLat($this->getLat());
        $concessionary->setLng($this->getLng());
        $this->addBrands($concessionary);
        $manager->persist($concessionary);
        
        $manager->flush();
    }
    
    public function getLat(){
        return "-23." . rand(300000, 700000);
    }
    
    public function getLng(){
        return "-46." . rand(500000, 999999);
    }
    
    public function addBrands(Concessionary $concessionary, $brands = null){
        if($brands){
            foreach ($brands as $brand) {
                $concessionary->addBrand($this->getReference($brand . '-brand'));
            }
        }
        else {
            $concessionary->addBrand($this->getReference('Audi-brand'));
            $concessionary->addBrand($this->getReference('Chevrolet-brand'));
            $concessionary->addBrand($this->getReference('Citroen-brand'));
            $concessionary->addBrand($this->getReference('Fiat-brand'));
            $concessionary->addBrand($this->getReference('Ford-brand'));
            $concessionary->addBrand($this->getReference('Honda-brand'));
            $concessionary->addBrand($this->getReference('Hyundai-brand'));
            $concessionary->addBrand($this->getReference('Kia-brand'));
            $concessionary->addBrand($this->getReference('Mitsubishi-brand'));
            $concessionary->addBrand($this->getReference('Peugeot-brand'));
            $concessionary->addBrand($this->getReference('Renault-brand'));
            $concessionary->addBrand($this->getReference('Toyota-brand'));
            $concessionary->addBrand($this->getReference('Volkswagen-brand'));
        }
        
    }
}
