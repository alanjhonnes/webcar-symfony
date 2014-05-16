<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Model
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\ModelRepository")
 */
class Model
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
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @var float
     * @ORM\Column(type="decimal", precision=2)
     */
    private $price;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $motorization;
    
    
    private $acessories;
    
    private $kits;
    
    private $modelColors;


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
