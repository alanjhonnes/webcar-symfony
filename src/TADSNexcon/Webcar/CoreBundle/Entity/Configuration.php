<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    private $price;
    
    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $date;
    
    /**
     * @var Model
     * @ORM\ManyToOne(targetEntity="Model")
     */
    private $model;
    
    /**
     * @var ModelColor
     * @ORM\ManyToOne(targetEntity="ModelColor")
     */
    private $modelColor;
    
    /**
     * @ORM\ManyToMany(targetEntity="Kit")
     */
    private $kits;
    
    /**
     * @ORM\ManyToMany(targetEntity="Acessory")
     */
    private $acessories;
    
    /**
     *
     * @var Lead
     * @ORM\ManyToOne(targetEntity="Lead", inversedBy="configurations")
     */
    private $lead;
    
    /**
     *
     * @var Concessionary
     * @ORM\ManyToOne(targetEntity="Concessionary", inversedBy="configurations")
     */
    private $concessionary;


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
        $this->kits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->acessories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime();
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Configuration
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
     * Set date
     *
     * @param \DateTime $date
     * @return Configuration
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set model
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Model $model
     * @return Configuration
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
     * Set modelColor
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColor
     * @return Configuration
     */
    public function setModelColor(\TADSNexcon\Webcar\CoreBundle\Entity\ModelColor $modelColor = null)
    {
        $this->modelColor = $modelColor;

        return $this;
    }

    /**
     * Get modelColor
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\ModelColor 
     */
    public function getModelColor()
    {
        return $this->modelColor;
    }

    /**
     * Add kits
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Kit $kits
     * @return Configuration
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
     * Add acessories
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Acessory $acessories
     * @return Configuration
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
     * Set lead
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Lead $lead
     * @return Configuration
     */
    public function setLead(\TADSNexcon\Webcar\CoreBundle\Entity\Lead $lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Lead 
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Set concessionary
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Concessionary $concessionary
     * @return Configuration
     */
    public function setConcessionary(\TADSNexcon\Webcar\CoreBundle\Entity\Concessionary $concessionary = null)
    {
        $this->concessionary = $concessionary;

        return $this;
    }

    /**
     * Get concessionary
     *
     * @return \TADSNexcon\Webcar\CoreBundle\Entity\Concessionary 
     */
    public function getConcessionary()
    {
        return $this->concessionary;
    }
    
    public function __toString() {
        return "$this->id";
    }
    
    /** @ORM\PrePersist */
    public function onPrePersist()
    {
        $total = 0;
        
        $total += $this->getModel()->getPrice();
        $total += $this->getModelColor()->getPrice();
        
        $kitAcessories = array();
        
        foreach ($this->getKits() as $kit) {
            $total += $kit->getCalculatedPrice();
            foreach ($kit->getAcessories() as $acessory) {
                $kitAcessories[] = $acessory->getId();
            }
        }
        
        foreach ($this->getAcessories() as $acessory) {
            if(!array_key_exists($acessory->getId(), $kitAcessories)){
                $total += $acessory->getPrice();
            }
        }
        
        $this->setPrice($total);     
                
    }
    
    /** @ORM\PreUpdate */
    public function onPreUpdate()
    {
        $total = 0;
        
        $kitAcessories = array();
        
        foreach ($this->getKits() as $kit) {
            $total += $kit->getCalculatedPrice();
            foreach ($kit->getAcessories() as $acessory) {
                $kitAcessories[] = $acessory->getId();
            }
        }
        
        foreach ($this->getAcessories() as $acessory) {
            if(!array_key_exists($acessory->getId(), $kitAcessories)){
                $total += $acessory->getPrice();
            }
        }
        
        $this->setPrice($total); 
    }
    
    
}
