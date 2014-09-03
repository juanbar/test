<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rate
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
     * @ORM\ManyToOne(targetEntity="AccommodationUnit", inversedBy="accommodationUnitRates")
     * @ORM\JoinColumn(name="accommodationunit_id", referencedColumnName="id")
     */        
    private $accommodationUnit;    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from_datetime", type="datetime")
     */
    private $fromDatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to_datetime", type="datetime")
     */
    private $toDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal")
     */
    private $rate;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, columnDefinition="ENUM('closed', 'open')")
     */
    private $status;
    

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
     * Set fromDatetime
     *
     * @param \DateTime $fromDatetime
     * @return Rate
     */
    public function setFromDatetime($fromDatetime)
    {
        $this->fromDatetime = $fromDatetime;

        return $this;
    }

    /**
     * Get fromDatetime
     *
     * @return \DateTime 
     */
    public function getFromDatetime()
    {
        return $this->fromDatetime;
    }

    /**
     * Set toDatetime
     *
     * @param \DateTime $toDatetime
     * @return Rate
     */
    public function setToDatetime($toDatetime)
    {
        $this->toDatetime = $toDatetime;

        return $this;
    }

    /**
     * Get toDatetime
     *
     * @return \DateTime 
     */
    public function getToDatetime()
    {
        return $this->toDatetime;
    }

    /**
     * Set rate
     *
     * @param string $rate
     * @return Rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Rate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set accommodationUnit
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnit
     * @return Rate
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
