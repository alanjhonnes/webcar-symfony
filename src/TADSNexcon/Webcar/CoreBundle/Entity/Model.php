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
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    private $price;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $motorization;
    
    /**
     *
     * @var Vehicle 
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="models")
     */
    private $vehicle;
    
    /**
     *
     * @var Application\Sonata\MediaBundle\Entity
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     */
    private $mainImage;
    
    /**
     * @ORM\ManyToMany(targetEntity="Acessory")
     */
    private $acessories;
    
    /**
     * @ORM\ManyToMany(targetEntity="Kit")
     */
    private $kits;
    
    /**
     *
     * @var ModelColor
     * @ORM\OneToMany(targetEntity="ModelColor", mappedBy="model",cascade={"persist"})
     */
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
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acessories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->kits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modelColors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Model
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
     * Set price
     *
     * @param string $price
     * @return Model
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set motorization
     *
     * @param string $motorization
     * @return Model
     */
    public function setMotorization($motorization)
    {
        $this->motorization = $motorization;

        return $this;
    }

    /**
     * Get motorization
     *
     * @return string 
     */
    public function getMotorization()
    {
        return $this->motorization;
    }

    /**
     * Set vehicle
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Vehicle $vehicle
     * @return Model
     */
    public function setVehicle(\TADSNexcon\Webcar\CoreBundle\Entity\Vehicle $vehicle = null)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Vehicle 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set mainImage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $mainImage
     * @return Model
     */
    public function setMainImage(\Application\Sonata\MediaBundle\Entity\Media $mainImage = null)
    {
        $this->mainImage = $mainImage;

        return $this;
    }

    /**
     * Get mainImage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     * Add acessories
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories
     * @return Model
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

    /**
     * Add kits
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Kit $kits
     * @return Model
     */
    public function addKit(\TADSNexcon\Webcar\CoreBundle\Entity\Kit $kits)
    {
        $this->kits[] = $kits;

        return $this;
    }

    /**
     * Remove kits
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Kit $kits
     */
    public function removeKit(\TADSNexcon\Webcar\CoreBundle\Entity\Kit $kits)
    {
        $this->kits->removeElement($kits);
    }

    /**
     * Get kits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKits()
    {
        return $this->kits;
    }

    /**
     * Add modelColors
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColors
     * @return Model
     */
    public function addModelColor(\TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColor)
    {
        $this->modelColors[] = $modelColor;
        $modelColor->setModel($this);
        return $this;
    }
    
    public function setModelColors($modelColors){
        if (gettype($modelColors) == "array") {
            $modelColors = new ArrayCollection($modelColors);
        }

        foreach($modelColors as $modelColor)
        {
            $modelColor->setModel($this);
        }

        $this->modelColors = $modelColors;
    }

    /**
     * Remove modelColors
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColors
     */
    public function removeModelColor(\TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColor)
    {
        $this->modelColors->removeElement($modelColor);
        $modelColor->setModel(null);
    }

    /**
     * Get modelColors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModelColors()
    {
        return $this->modelColors;
    }
    
    public function __toString() {
        return $this->name;
    }
}
