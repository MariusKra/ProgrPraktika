<?php

namespace KTU\CoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Chatroom
 *
 * @ORM\Table(name="chatroom")
 * @ORM\Entity
 */
class Chatroom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="chatroom_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $chatroom_id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true, unique=false)
     */
    private $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Message", mappedBy="chatroom")
     */
    private $messages;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="chatrooms")
     * @ORM\JoinTable(name="users__messages",
     *      joinColumns={@ORM\JoinColumn(name="chatroom_id", referencedColumnName="chatroom_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="user_id")}
     *      )
     */
    private $users;

    public function __construct() {
        $this->messages = new ArrayCollection();
        $this->users = new ArrayCollection();
    }
}
