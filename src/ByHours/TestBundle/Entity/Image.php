<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Image
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
    
    /**
     * @ORM\ManyToOne(targetEntity="Accommodation", inversedBy="images")
     * @ORM\JoinColumn(name="accommodation_id", referencedColumnName="id")
     */        
    private $accommodation;

    /**
     * @ORM\ManyToOne(targetEntity="AccommodationUnit", inversedBy="images")
     * @ORM\JoinColumn(name="accommodationunit_id", referencedColumnName="id")
     */        
    private $accommodationUnit;
    

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
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set accommodation
     *
     * @param \ByHours\TestBundle\Entity\Accommodation $accommodation
     * @return Image
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
     * @return Image
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
}
