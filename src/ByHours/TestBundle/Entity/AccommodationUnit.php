<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccommodationUnit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AccommodationUnit
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
     * @ORM\ManyToOne(targetEntity="Accommodation", inversedBy="accommodationUnits")
     * @ORM\JoinColumn(name="accommodation_id", referencedColumnName="id")
     */        
    private $accommodation;    

    /**
     * @ORM\OneToMany(targetEntity="Description", mappedBy="$accommodationUnit", cascade={"persist"})
     */
    private $descriptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_persons", type="integer")
     */
    private $maxPersons;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="$accommodationUnit", cascade={"persist"})
     */
    private $images;        
    
    /**
     * @ORM\OneToMany(targetEntity="Rate", mappedBy="$accommodationUnit", cascade={"persist"})
     */    
    private $accommodationUnitRates;
    
    /**
     * @ORM\ManyToMany(targetEntity="Facility", inversedBy="$accommodationUnits")
     * @ORM\JoinTable(name="accommodationunits_facilities",
     *      joinColumns={@ORM\JoinColumn(name="accommodationunit_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="facility_id", referencedColumnName="id")}
     *      )
     */    
    private $facilities;
    
    /**
     * @ORM\OneToMany(targetEntity="Booking", mappedBy="$accommodationUnit", cascade={"persist"})
     */    
    private $bookings;    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accommodationUnitRates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->facilities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bookings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set maxPersons
     *
     * @param integer $maxPersons
     * @return AccommodationUnit
     */
    public function setMaxPersons($maxPersons)
    {
        $this->maxPersons = $maxPersons;

        return $this;
    }

    /**
     * Get maxPersons
     *
     * @return integer 
     */
    public function getMaxPersons()
    {
        return $this->maxPersons;
    }

    /**
     * Set accommodation
     *
     * @param \ByHours\TestBundle\Entity\Accommodation $accommodation
     * @return AccommodationUnit
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
     * Add descriptions
     *
     * @param \ByHours\TestBundle\Entity\Description $descriptions
     * @return AccommodationUnit
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
     * Add images
     *
     * @param \ByHours\TestBundle\Entity\Image $images
     * @return AccommodationUnit
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
     * Add accommodationUnitRates
     *
     * @param \ByHours\TestBundle\Entity\Rate $accommodationUnitRates
     * @return AccommodationUnit
     */
    public function addAccommodationUnitRate(\ByHours\TestBundle\Entity\Rate $accommodationUnitRates)
    {
        $this->accommodationUnitRates[] = $accommodationUnitRates;

        return $this;
    }

    /**
     * Remove accommodationUnitRates
     *
     * @param \ByHours\TestBundle\Entity\Rate $accommodationUnitRates
     */
    public function removeAccommodationUnitRate(\ByHours\TestBundle\Entity\Rate $accommodationUnitRates)
    {
        $this->accommodationUnitRates->removeElement($accommodationUnitRates);
    }

    /**
     * Get accommodationUnitRates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccommodationUnitRates()
    {
        return $this->accommodationUnitRates;
    }

    /**
     * Add facilities
     *
     * @param \ByHours\TestBundle\Entity\Facility $facilities
     * @return AccommodationUnit
     */
    public function addFacility(\ByHours\TestBundle\Entity\Facility $facilities)
    {
        $this->facilities[] = $facilities;

        return $this;
    }

    /**
     * Remove facilities
     *
     * @param \ByHours\TestBundle\Entity\Facility $facilities
     */
    public function removeFacility(\ByHours\TestBundle\Entity\Facility $facilities)
    {
        $this->facilities->removeElement($facilities);
    }

    /**
     * Get facilities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Add bookings
     *
     * @param \ByHours\TestBundle\Entity\Booking $bookings
     * @return AccommodationUnit
     */
    public function addBooking(\ByHours\TestBundle\Entity\Booking $bookings)
    {
        $this->bookings[] = $bookings;

        return $this;
    }

    /**
     * Remove bookings
     *
     * @param \ByHours\TestBundle\Entity\Booking $bookings
     */
    public function removeBooking(\ByHours\TestBundle\Entity\Booking $bookings)
    {
        $this->bookings->removeElement($bookings);
    }

    /**
     * Get bookings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBookings()
    {
        return $this->bookings;
    }
}
