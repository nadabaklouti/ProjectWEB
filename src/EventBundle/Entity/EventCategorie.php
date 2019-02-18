<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 16/02/2019
 * Time: 17:01
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EventCategorie
 * @ORM\Entity
 */
class EventCategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventCategorie;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $nomEventCategorie;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="imaage categorie")
     * @Assert\File(mimeTypes={"image/png", "image/jpeg", "image/jpg",})
     */
    private $imageEventCategorie;



    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdEventCategorie()
    {
        return $this->idEventCategorie;
    }

    /**
     * @param mixed $idEventCategorie
     */
    public function setIdEventCategorie($idEventCategorie)
    {
        $this->idEventCategorie = $idEventCategorie;
    }

    /**
     * @return mixed
     */
    public function getNomEventCategorie()
    {
        return $this->nomEventCategorie;
    }

    /**
     * @param mixed $nomEventCategorie
     */
    public function setNomEventCategorie($nomEventCategorie)
    {
        $this->nomEventCategorie = $nomEventCategorie;
    }

    /**
     * @return mixed
     */
    public function getImageEventCategorie()
    {
        return $this->imageEventCategorie;
    }

    /**
     * @param mixed $imageEventCategorie
     */
    public function setImageEventCategorie($imageEventCategorie)
    {
        $this->imageEventCategorie = $imageEventCategorie;
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