<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 16/02/2019
 * Time: 22:36
 */


namespace EventBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Class Evenement
 * @ORM\Entity
 */
class Evenement
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEvent;



    /**
     * @ORM\Column(type="string")
     */
    private $nomEvent;


    /**
     * @ORM\Column(type="string")
     */
    private $descriptionEvent;


    /**
     * @ORM\Column(type="date")
     */
    private $dateDebutEvent;


    /**
     * @ORM\Column(type="date")
     */
    private $dateFinEvent;


    /**
     * @ORM\Column(type="time")
     */
    private $heureDebutEvent;

    /**
     * @ORM\Column(type="time")
     */
    private $heureFinEvent;


    /**
     * @ORM\Column(type="string")
     */
    private $adresseEvent;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $privacyEvent;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="imaage event")
     * @Assert\File(mimeTypes={"image/png", "image/jpeg", "image/jpg",})
     */
    private $imageEvent;

    /**
     * @ORM\Column(type="float")
     */
    private $prixEvent;

    /**
     * @ORM\ManyToOne(targetEntity="EventCategorie")
     * @ORM\JoinColumn(referencedColumnName="id_event_categorie")
     */
    private $EventCategorie;


    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return mixed
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * @param mixed $nomEvent
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;
    }

    /**
     * @return mixed
     */
    public function getDescriptionEvent()
    {
        return $this->descriptionEvent;
    }

    /**
     * @param mixed $descriptionEvent
     */
    public function setDescriptionEvent($descriptionEvent)
    {
        $this->descriptionEvent = $descriptionEvent;
    }

    /**
     * @return mixed
     */
    public function getDateDebutEvent()
    {
        return $this->dateDebutEvent;
    }

    /**
     * @param mixed $dateDebutEvent
     */
    public function setDateDebutEvent($dateDebutEvent)
    {
        $this->dateDebutEvent = $dateDebutEvent;
    }

    /**
     * @return mixed
     */
    public function getDateFinEvent()
    {
        return $this->dateFinEvent;
    }

    /**
     * @param mixed $dateFinEvent
     */
    public function setDateFinEvent($dateFinEvent)
    {
        $this->dateFinEvent = $dateFinEvent;
    }

    /**
     * @return mixed
     */
    public function getHeureDebutEvent()
    {
        return $this->heureDebutEvent;
    }

    /**
     * @param mixed $heureDebutEvent
     */
    public function setHeureDebutEvent($heureDebutEvent)
    {
        $this->heureDebutEvent = $heureDebutEvent;
    }

    /**
     * @return mixed
     */
    public function getHeureFinEvent()
    {
        return $this->heureFinEvent;
    }

    /**
     * @param mixed $heureFinEvent
     */
    public function setHeureFinEvent($heureFinEvent)
    {
        $this->heureFinEvent = $heureFinEvent;
    }

    /**
     * @return mixed
     */
    public function getAdresseEvent()
    {
        return $this->adresseEvent;
    }

    /**
     * @param mixed $adresseEvent
     */
    public function setAdresseEvent($adresseEvent)
    {
        $this->adresseEvent = $adresseEvent;
    }

    /**
     * @return mixed
     */
    public function getPrivacyEvent()
    {
        return $this->privacyEvent;
    }

    /**
     * @param mixed $privacyEvent
     */
    public function setPrivacyEvent($privacyEvent)
    {
        $this->privacyEvent = $privacyEvent;
    }

    /**
     * @return mixed
     */
    public function getImageEvent()
    {
        return $this->imageEvent;
    }

    /**
     * @param mixed $imageEvent
     */
    public function setImageEvent($imageEvent)
    {
        $this->imageEvent = $imageEvent;
    }

    /**
     * @return mixed
     */
    public function getPrixEvent()
    {
        return $this->prixEvent;
    }

    /**
     * @param mixed $prixEvent
     */
    public function setPrixEvent($prixEvent)
    {
        $this->prixEvent = $prixEvent;
    }

    /**
     * @return mixed
     */
    public function getEventCategorie()
    {
        return $this->EventCategorie;
    }

    /**
     * @param mixed $EventCategorie
     */
    public function setEventCategorie($EventCategorie)
    {
        $this->EventCategorie = $EventCategorie;
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




}