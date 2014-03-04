<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chatroom
 */
class Chatroom
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $idchatroom;

    /**
     * @var \KTU\CoreBundle\Entity\ChatroomPartisipants
     */
    private $chatroomParticipants;


    /**
     * Set name
     *
     * @param string $name
     * @return Chatroom
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
     * Get idchatroom
     *
     * @return integer 
     */
    public function getIdchatroom()
    {
        return $this->idchatroom;
    }

    /**
     * Set chatroomParticipants
     *
     * @param \KTU\CoreBundle\Entity\ChatroomPartisipants $chatroomParticipants
     * @return Chatroom
     */
    public function setChatroomParticipants(\KTU\CoreBundle\Entity\ChatroomPartisipants $chatroomParticipants = null)
    {
        $this->chatroomParticipants = $chatroomParticipants;

        return $this;
    }

    /**
     * Get chatroomParticipants
     *
     * @return \KTU\CoreBundle\Entity\ChatroomPartisipants 
     */
    public function getChatroomParticipants()
    {
        return $this->chatroomParticipants;
    }
}
