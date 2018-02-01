<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Driver;

/**
 * Journey
 *
 * @ORM\Table(name="jou_journey")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JourneyRepository")
 */
class Journey
{
    /**
     * @var int
     *
     * @ORM\Column(name="jour_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jour_distance", type="integer")
     */
    private $distance;


    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set distance.
     *
     * @param integer $distance
     *
     * @return Journey
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance.
     *
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
