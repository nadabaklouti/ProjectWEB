<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 17/02/2019
 * Time: 17:40
 */

namespace EventBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Evenement
 * @ORM\Entity
 */
class EventParticipation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventParticipation;


    /**
     * @ORM\Column(type="datetime")
     */
    private $dateParticipation;




    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;


    /**
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumn(referencedColumnName="id_event")
     */
    private $Evenement;

    /**
     * @return mixed
     */
    public function getIdEventParticipation()
    {
        return $this->idEventParticipation;
    }

    /**
     * @param mixed $idEventParticipation
     */
    public function setIdEventParticipation($idEventParticipation)
    {
        $this->idEventParticipation = $idEventParticipation;
    }

    /**
     * @return mixed
     */
    public function getDateParticipation()
    {
        return $this->dateParticipation;
    }

    /**
     * @param mixed $dateParticipation
     */
    public function setDateParticipation($dateParticipation)
    {
        $this->dateParticipation = $dateParticipation;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->Evenement;
    }

    /**
     * @param mixed $Evenement
     */
    public function setEvenement($Evenement)
    {
        $this->Evenement = $Evenement;
    }





}