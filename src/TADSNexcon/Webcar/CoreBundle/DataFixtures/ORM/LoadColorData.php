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

use TADSNexcon\Webcar\CoreBundle\Entity\Color;

class LoadColorData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 2;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $color = new Color();
        $color->setName("Preto");
        $color->setRgb("000000");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Branco");
        $color->setRgb("ffffff");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Vermelho");
        $color->setRgb("ff0000");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Azul");
        $color->setRgb("0000ff");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Verde");
        $color->setRgb("00ff00");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Cinza");
        $color->setRgb("aaaaaa");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Prata");
        $color->setRgb("cccccc");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Laranja");
        $color->setRgb("ff9000");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Amarelo");
        $color->setRgb("f0ff00");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Marrom");
        $color->setRgb("703700");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Cinza Chumbo");
        $color->setRgb("999999");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Preto Eclipse");
        $color->setRgb("111111");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Preto Safira");
        $color->setRgb("222222");
        $this->setReference($color->getName() . '-color', $color);
        $manager->persist($color);
        
        $manager->flush();
    }
}
