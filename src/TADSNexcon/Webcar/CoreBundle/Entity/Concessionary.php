<?php

namespace TADSNexcon\Webcar\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Oh\GoogleMapFormTypeBundle\Validator\Constraints as OhAssert;

/**
 * Concessionary
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TADSNexcon\Webcar\CoreBundle\Entity\ConcessionaryRepository")
 */
class Concessionary
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
     */
    private $cnpj;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=9)
     */
    private $cep;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $city;
    
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $number;
    
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
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $site;
    
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Configuration", mappedBy="concessionary")
     */
    private $configurations;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Brand")
     */
    private $brands;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lat;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lng;

    public function setLatLng($latlng)
    {
        $this->setLat($latlng['lat']);
        $this->setLng($latlng['lng']);
        return $this;
    }

    /**
     * @Assert\NotBlank()
     * @OhAssert\LatLng()
     */
    public function getLatLng()
    {
        return array('lat'=>$this->getLat(),'lng'=>$this->getLng());
    }
    
    


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
        $this->configurations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Concessionary
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
     * Set cnpj
     *
     * @param string $cnpj
     * @return Concessionary
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set cep
     *
     * @param integer $cep
     * @return Concessionary
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return integer 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Concessionary
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Concessionary
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set uf
     *
     * @param string $uf
     * @return Concessionary
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Concessionary
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set neighborhood
     *
     * @param string $neighborhood
     * @return Concessionary
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return string 
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Concessionary
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add configurations
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Configuration $configurations
     * @return Concessionary
     */
    public function addConfiguration(\TADSNexcon\Webcar\CoreBundle\Entity\Configuration $configurations)
    {
        $this->configurations[] = $configurations;

        return $this;
    }

    /**
     * Remove configurations
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Configuration $configurations
     */
    public function removeConfiguration(\TADSNexcon\Webcar\CoreBundle\Entity\Configuration $configurations)
    {
        $this->configurations->removeElement($configurations);
    }

    /**
     * Get configurations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConfigurations()
    {
        return $this->configurations;
    }
    
    public function __toString() {
        return $this->name;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Concessionary
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return Concessionary
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Add brands
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Brand $brands
     * @return Concessionary
     */
    public function addBrand(\TADSNexcon\Webcar\CoreBundle\Entity\Brand $brands)
    {
        $this->brands[] = $brands;

        return $this;
    }

    /**
     * Remove brands
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Brand $brands
     */
    public function removeBrand(\TADSNexcon\Webcar\CoreBundle\Entity\Brand $brands)
    {
        $this->brands->removeElement($brands);
    }

    /**
     * Get brands
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBrands()
    {
        return $this->brands;
    }
}
