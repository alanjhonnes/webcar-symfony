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
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Branco");
        $color->setRgb("ffffff");
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Vermelho");
        $color->setRgb("ff0000");
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Azul");
        $color->setRgb("0000ff");
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Verde");
        $color->setRgb("00ff00");
        $manager->persist($color);
        
        $color = new Color();
        $color->setName("Cinza");
        $color->setRgb("aaaaaa");
        $manager->persist($color);
        
        $manager->flush();
    }
}
