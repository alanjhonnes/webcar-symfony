<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelColor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\ModelColorRepository")
 */
class ModelColor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $color;
    
    /**
     * @var float
     * @ORM\Column(type="decimal", precision=2)
     */
    private $price;
    
    private $image;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
