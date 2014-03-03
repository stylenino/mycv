<?php

namespace Cv\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Cv\UserBundle\Entity\Group
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="Cv\UserBundle\Entity\GroupRepository")
 *
 */
class Group implements RoleInterface
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(name="role", type="string", length=20, unique=true)
     */
    private $role;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="groups")
     */
    private $users;

    public function __construct()
    {
      $this->users = new ArrayCollection();
    }

    public function getRoleName()
    {
      return $this->role . ' : ' . $this->name;
    }

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
     * Set name
     *
     * @param string $name
     * @return Group
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Group
     */
    public function setRole($role)
    {
        $this->role = $role;

        return  $this->role;
    }

    /**
     * @param $role
     *
     * @return string
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * Add users
     *
     * @param \Cv\UserBundle\Entity\User $users
     * @return Group
     */
    public function addUser(\Cv\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this->users;
    }

    /**
     * Remove users
     *
     * @param \Cv\UserBundle\Entity\User $users
     */
    public function removeUser(\Cv\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
