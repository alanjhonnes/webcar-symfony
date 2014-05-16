<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\KitRepository")
 */
class Kit
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
     * @var float
     * @ORM\Column(type="decimal", precision=2)
     */
    private $price;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    
    private $acessories;
    
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
