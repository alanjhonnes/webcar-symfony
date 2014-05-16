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
    
    /**
     *
     * @var Color
     * @ORM\ManyToOne(targetEntity="Color")
     */
    private $color;
    
    /**
     *
     * @var Model
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="modelColors")
     */
    private $model;
    
    /**
     * @var float
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $price;
    
    /**
     *
     * @var Application\Sonata\MediaBundle\Entity
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     */
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

    /**
     * Set price
     *
     * @param string $price
     * @return ModelColor
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
     * Set color
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Color $color
     * @return ModelColor
     */
    public function setColor(\TADSNexcon\Webcar\CoreBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Color 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set model
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Model $model
     * @return ModelColor
     */
    public function setModel(\TADSNexcon\Webcar\CoreBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Model 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     * @return ModelColor
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }
    
    public function __toString() {
        return $this->color;
    }
}
