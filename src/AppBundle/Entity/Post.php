<?php
/**
 * Created by PhpStorm.
 * User: lilikovac
 * Date: 28.10.16
 * Time: 16:18
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Post")
 * @package AppBundle\Entity
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *  @ORM\column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    protected $Name;


    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     *     )
     * @ORM\column(type="string")
     */
    protected $Mail;

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    protected $Nachricht;

    /**
     * @return mixed
     */
    public function getNachricht()
    {
        return $this->Nachricht;
    }

    /**
     * @param mixed $Nachricht
     */
    public function setNachricht($Nachricht)
    {
        $this->Nachricht = $Nachricht;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }



    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
{
    $this->Name = $Name;
}




}