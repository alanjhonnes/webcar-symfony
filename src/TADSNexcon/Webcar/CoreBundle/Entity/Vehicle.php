<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\VehicleRepository")
 */
class Vehicle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="date")
     */
    private $year;
    
    /**
     *
     * @var 
     * @///ORM\ManyToOne(targetEntity="Media")
     */
    private $mainImage;
    
    /**
     *
     * @var type 
     * @ORM\ManyToOne(targetEntity="Brand")
     */
    private $brand;
}
