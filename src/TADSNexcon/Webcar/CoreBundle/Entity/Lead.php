<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lead
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\LeadRepository")
 */
class Lead
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
     * @var string
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $email;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=1)
     */
    private $sex;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $birthday;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=8)
     */
    private $cep;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $city;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    private $uf;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $street;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $neighborhood;
    
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $ddd;
    
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $phone;
    
    
    private $configurations;


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
