<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accommodation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Accommodation
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Description", mappedBy="$accommodation", cascade={"persist"})
     */
    private $descriptions;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, columnDefinition="ENUM('hotel')")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Location", inversedBy="accommodations")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */    
    private $location;
    
    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="accommodation", cascade={"persist"})
     */
    private $images;        

    /**
     * @ORM\OneToMany(targetEntity="AccommodationUnit", mappedBy="accommodation", cascade={"persist"})
     */    
    private $accommodationUnits;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accommodationUnits = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Accommodation
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
     * @return Accommodation
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
     * Add descriptions
     *
     * @param \ByHours\TestBundle\Entity\Description $descriptions
     * @return Accommodation
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

    /**
     * Set location
     *
     * @param \ByHours\TestBundle\Entity\Location $location
     * @return Accommodation
     */
    public function setLocation(\ByHours\TestBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \ByHours\TestBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add images
     *
     * @param \ByHours\TestBundle\Entity\Image $images
     * @return Accommodation
     */
    public function addImage(\ByHours\TestBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \ByHours\TestBundle\Entity\Image $images
     */
    public function removeImage(\ByHours\TestBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add accommodationUnits
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnits
     * @return Accommodation
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
}
