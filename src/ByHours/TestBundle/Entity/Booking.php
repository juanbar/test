<?php

namespace ByHours\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Booking
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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="bookings")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */        
    private $person;    
    
    /**
     * @ORM\ManyToOne(targetEntity="AccommodationUnit", inversedBy="bookings")
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
     * @var string
     *
     * @ORM\Column(name="to_datetime", type="datetime")
     */
    private $toDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=255)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="payby", type="string", length=255, columnDefinition="ENUM('bank', 'credit_card', 'paypal')")
     */
    private $payby;

    /**
     * @var string
     *
     * @ORM\Column(name="paybydata", type="string", length=255)
     */
    private $paybydata;

    /**
     * @var string
     *
     * @ORM\Column(name="created_datetime", type="datetime")
     */
    private $createdDatetime;    

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
     * @return Booking
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
     * @return Booking
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
     * Set amount
     *
     * @param string $amount
     * @return Booking
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set payby
     *
     * @param string $payby
     * @return Booking
     */
    public function setPayby($payby)
    {
        $this->payby = $payby;

        return $this;
    }

    /**
     * Get payby
     *
     * @return string 
     */
    public function getPayby()
    {
        return $this->payby;
    }

    /**
     * Set paybydata
     *
     * @param string $paybydata
     * @return Booking
     */
    public function setPaybydata($paybydata)
    {
        $this->paybydata = $paybydata;

        return $this;
    }

    /**
     * Get paybydata
     *
     * @return string 
     */
    public function getPaybydata()
    {
        return $this->paybydata;
    }

    /**
     * Set person
     *
     * @param \ByHours\TestBundle\Entity\Person $person
     * @return Booking
     */
    public function setPerson(\ByHours\TestBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \ByHours\TestBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set accommodationUnit
     *
     * @param \ByHours\TestBundle\Entity\AccommodationUnit $accommodationUnit
     * @return Booking
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
     * Set createdDatetime
     *
     * @param \DateTime $createdDatetime
     * @return Booking
     */
    public function setCreatedDatetime($createdDatetime)
    {
        $this->createdDatetime = $createdDatetime;

        return $this;
    }

    /**
     * Get createdDatetime
     *
     * @return \DateTime 
     */
    public function getCreatedDatetime()
    {
        return $this->createdDatetime;
    }
}
