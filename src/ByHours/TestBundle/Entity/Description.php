<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Description
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
     *
     * @ORM\Column(name="type", type="string", length=255, columnDefinition="ENUM('name', 'short_desc', 'long_desc')")
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Accommodation", inversedBy="descriptions")
     * @ORM\JoinColumn(name="accommodation_id", referencedColumnName="id")
     */        
    private $accommodation;

    /**
     * @ORM\ManyToOne(targetEntity="AccommodationUnit", inversedBy="descriptions")
     * @ORM\JoinColumn(name="accommodationunit_id", referencedColumnName="id")
     */        
    private $accommodationUnit;    
    
    /**
     * @ORM\ManyToOne(targetEntity="Facility", inversedBy="descriptions")
     * @ORM\JoinColumn(name="facility_id", referencedColumnName="id")
     */        
    private $facility;    


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
     * Set type
     *
     * @param string $type
     * @return Description
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Description
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Description
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
     * Set accommodation
     *
     * @param \ByHours\TestBundle\Entity\Accommodation $accommodation
     * @return Description
     */
    public function setAccommodation(\ByHours\TestBundle\Entity\Accommodation $accommodation = null)
    {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Get accommodation
     *
     * @return \ByHours\TestBundle\Entity\Accommodation 
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Set accommodationUnit
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnit
     * @return Description
     */
    public function setAccommodationUnit(\ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnit = null)
    {
        $this->accommodationUnit = $accommodationUnit;

        return $this;
    }

    /**
     * Get accommodationUnit
     *
     * @return \ByHours\TestBundle\Entity\AccommodationUnit 
     */
    public function getAccommodationUnit()
    {
        return $this->accommodationUnit;
    }

    /**
     * Set facility
     *
     * @param \ByHours\TestBundle\Entity\Facility $facility
     * @return Description
     */
    public function setFacility(\ByHours\TestBundle\Entity\Facility $facility = null)
    {
        $this->facility = $facility;

        return $this;
    }

    /**
     * Get facility
     *
     * @return \ByHours\TestBundle\Entity\Facility 
     */
    public function getFacility()
    {
        return $this->facility;
    }
}
