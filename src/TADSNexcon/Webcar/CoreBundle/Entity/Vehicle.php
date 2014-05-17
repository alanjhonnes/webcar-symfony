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
     * @var Application\Sonata\MediaBundle\Entity
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media",cascade={"persist"})
     */
    private $mainImage;
    
    /**
     *
     * @var Brand 
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="vehicles")
     */
    private $brand;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Model", mappedBy="vehicle")
     */
    private $models;
    
    
    
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
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Vehicle
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
     * Set year
     *
     * @param \DateTime $year
     * @return Vehicle
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set mainImage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $mainImage
     * @return Vehicle
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
     * Set brand
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Brand $brand
     * @return Vehicle
     */
    public function setBrand(\TADSNexcon\Webcar\CoreBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Add models
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Model $models
     * @return Vehicle
     */
    public function addModel(\TADSNexcon\Webcar\CoreBundle\Entity\Model $models)
    {
        $this->models[] = $models;

        return $this;
    }

    /**
     * Remove models
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Model $models
     */
    public function removeModel(\TADSNexcon\Webcar\CoreBundle\Entity\Model $models)
    {
        $this->models->removeElement($models);
    }

    /**
     * Get models
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModels()
    {
        return $this->models;
    }
    
    public function __toString() {
        return $this->name;
    }
}
