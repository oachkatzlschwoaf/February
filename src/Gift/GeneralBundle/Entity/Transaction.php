<?php

namespace Gift\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gift\GeneralBundle\Entity\Transaction
 */
class Transaction
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $tid
     */
    private $tid;

    /**
     * @var integer $service_id
     */
    private $service_id;

    /**
     * @var string $uid
     */
    private $uid;

    /**
     * @var string $mailiki_price
     */
    private $mailiki_price;

    /**
     * @var integer $other_price
     */
    private $other_price;

    /**
     * @var integer $profit
     */
    private $profit;

    /**
     * @var boolean $debug
     */
    private $debug;


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
     * Set tid
     *
     * @param string $tid
     * @return Transaction
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    
        return $this;
    }

    /**
     * Get tid
     *
     * @return string 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set service_id
     *
     * @param integer $serviceId
     * @return Transaction
     */
    public function setServiceId($serviceId)
    {
        $this->service_id = $serviceId;
    
        return $this;
    }

    /**
     * Get service_id
     *
     * @return integer 
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Set uid
     *
     * @param string $uid
     * @return Transaction
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return string 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set mailiki_price
     *
     * @param string $mailikiPrice
     * @return Transaction
     */
    public function setMailikiPrice($mailikiPrice)
    {
        $this->mailiki_price = $mailikiPrice;
    
        return $this;
    }

    /**
     * Get mailiki_price
     *
     * @return string 
     */
    public function getMailikiPrice()
    {
        return $this->mailiki_price;
    }

    /**
     * Set other_price
     *
     * @param integer $otherPrice
     * @return Transaction
     */
    public function setOtherPrice($otherPrice)
    {
        $this->other_price = $otherPrice;
    
        return $this;
    }

    /**
     * Get other_price
     *
     * @return integer 
     */
    public function getOtherPrice()
    {
        return $this->other_price;
    }

    /**
     * Set profit
     *
     * @param integer $profit
     * @return Transaction
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;
    
        return $this;
    }

    /**
     * Get profit
     *
     * @return integer 
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Set debug
     *
     * @param boolean $debug
     * @return Transaction
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    
        return $this;
    }

    /**
     * Get debug
     *
     * @return boolean 
     */
    public function getDebug()
    {
        return $this->debug;
    }
}