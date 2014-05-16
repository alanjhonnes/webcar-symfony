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
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $basePrice;
    
    /**
     * @var float
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $calculatedPrice;
    
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
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Acessory")
     */
    private $acessories;


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
     * Constructor
     */
    public function __construct()
    {
        $this->acessories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set basePrice
     *
     * @param string $basePrice
     * @return Kit
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * Get basePrice
     *
     * @return string 
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Set calculatedPrice
     *
     * @param string $calculatedPrice
     * @return Kit
     */
    public function setCalculatedPrice($calculatedPrice)
    {
        $this->calculatedPrice = $calculatedPrice;

        return $this;
    }

    /**
     * Get calculatedPrice
     *
     * @return string 
     */
    public function getCalculatedPrice()
    {
        return $this->calculatedPrice;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Kit
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Kit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add acessories
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories
     * @return Kit
     */
    public function addAcessory(\TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories)
    {
        $this->acessories[] = $acessories;

        return $this;
    }

    /**
     * Remove acessories
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories
     */
    public function removeAcessory(\TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories)
    {
        $this->acessories->removeElement($acessories);
    }

    /**
     * Get acessories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcessories()
    {
        return $this->acessories;
    }
    
    public function __toString() {
        return $this->name;
    }
}
