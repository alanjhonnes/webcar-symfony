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
    
    /**
     * @ORM\OneToMany(targetEntity="Configuration", mappedBy="lead")
     */
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
     * @return Lead
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
     * Set email
     *
     * @param string $email
     * @return Lead
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Lead
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     * @return Lead
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Lead
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Lead
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
     * Set uf
     *
     * @param string $uf
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * Set ddd
     *
     * @param integer $ddd
     * @return Lead
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * Get ddd
     *
     * @return integer 
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Lead
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add configurations
     *
     * @param \TADSNexcon\Webcar\CoreBundle\Entity\Configuration $configurations
     * @return Lead
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
}
