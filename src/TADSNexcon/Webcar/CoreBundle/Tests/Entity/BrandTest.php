<?php

namespace TADSNexcon\Webcar\CoreBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TADSNexcon\Webcar\CoreBundle\Entity\Brand;

class BrandTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        
        $brand = new Brand();
        $brand->setName("Toyota");
        
        $this->assertEquals("Toyota", (string)$brand);
    }
}
