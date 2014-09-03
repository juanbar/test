<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Location
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
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=255)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal")
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="decimal")
     */
    private $lon;

    /**
     * @ORM\OneToMany(targetEntity="Accommodation", mappedBy="location", cascade={"persist"})
     */
    private $accommodations;    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accommodations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set city
     *
     * @param string $city
     * @return Location
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
     * Set province
     *
     * @param string $province
     * @return Location
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Location
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Location
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
     * Set lon
     *
     * @param string $lon
     * @return Location
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Add accommodations
     *
     * @param \ByHours\TestBundle\Entity\Accommodation $accommodations
     * @return Location
     */
    public function addAccommodation(\ByHours\TestBundle\Entity\Accommodation $accommodations)
    {
        $this->accommodations[] = $accommodations;

        return $this;
    }

    /**
     * Remove accommodations
     *
     * @param \ByHours\TestBundle\Entity\Accommodation $accommodations
     */
    public function removeAccommodation(\ByHours\TestBundle\Entity\Accommodation $accommodations)
    {
        $this->accommodations->removeElement($accommodations);
    }

    /**
     * Get accommodations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }
}
