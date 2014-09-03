<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facility
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Facility
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
     * @ORM\ManyToMany(targetEntity="AccommodationUnit", mappedBy="facilities")
     */    
    private $accommodationUnits;    
    
    /**
     * @ORM\OneToMany(targetEntity="Description", mappedBy="$facility", cascade={"persist"})
     */
    private $descriptions;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;


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
     * Set name
     *
     * @param string $name
     * @return Facility
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
     * Set type
     *
     * @param string $type
     * @return Facility
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
     * Set price
     *
     * @param string $price
     * @return Facility
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
     * Constructor
     */
    public function __construct()
    {
        $this->accommodationUnits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add accommodationUnits
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnits
     * @return Facility
     */
    public function addAccommodationUnit(\ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnits)
    {
        $this->accommodationUnits[] = $accommodationUnits;

        return $this;
    }

    /**
     * Remove accommodationUnits
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnits
     */
    public function removeAccommodationUnit(\ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnits)
    {
        $this->accommodationUnits->removeElement($accommodationUnits);
    }

    /**
     * Get accommodationUnits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccommodationUnits()
    {
        return $this->accommodationUnits;
    }

    /**
     * Add descriptions
     *
     * @param \ByHours\TestBundle\Entity\Description $descriptions
     * @return Facility
     */
    public function addDescription(\ByHours\TestBundle\Entity\Description $descriptions)
    {
        $this->descriptions[] = $descriptions;

        return $this;
    }

    /**
     * Remove descriptions
     *
     * @param \ByHours\TestBundle\Entity\Description $descriptions
     */
    public function removeDescription(\ByHours\TestBundle\Entity\Description $descriptions)
    {
        $this->descriptions->removeElement($descriptions);
    }

    /**
     * Get descriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
}
