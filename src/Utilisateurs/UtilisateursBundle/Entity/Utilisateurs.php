<?php
namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="name_company", type="string", length=255, nullable=true)
     *
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The company name is too short.",
     *     maxMessage="The company name is too long."
     * )
     */
    protected $nameCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="type_account", type="string", length=30)
     */
    protected $typeAccount;

    public function getNameCompany() {
        return $this->nameCompany;
    }

    public function getTypeAccount() {
        return $this->typeAccount;
    }

    public function setNameCompany($nameCompany) {
        $this->nameCompany = $nameCompany;
    }

    public function setTypeAccount($typeAccount) {
        $this->typeAccount = $typeAccount;
    }

        
    public function __construct()
    {
        parent::__construct();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->roles
        //if ($this->getTypeAccount() == ''
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;
    
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

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
     * Add commandes
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\Ecommerce\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     */
    public function removeAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
