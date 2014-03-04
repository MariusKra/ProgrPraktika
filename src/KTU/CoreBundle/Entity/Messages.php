<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 */
class Messages
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var integer
     */
    private $idmessages;

    /**
     * @var \KTU\CoreBundle\Entity\Chatroom
     */
    private $chatroom;

    /**
     * @var \KTU\CoreBundle\Entity\Users
     */
    private $sender;


    /**
     * Set message
     *
     * @param string $message
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Messages
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set idmessages
     *
     * @param integer $idmessages
     * @return Messages
     */
    public function setIdmessages($idmessages)
    {
        $this->idmessages = $idmessages;

        return $this;
    }

    /**
     * Get idmessages
     *
     * @return integer 
     */
    public function getIdmessages()
    {
        return $this->idmessages;
    }

    /**
     * Set chatroom
     *
     * @param \KTU\CoreBundle\Entity\Chatroom $chatroom
     * @return Messages
     */
    public function setChatroom(\KTU\CoreBundle\Entity\Chatroom $chatroom)
    {
        $this->chatroom = $chatroom;

        return $this;
    }

    /**
     * Get chatroom
     *
     * @return \KTU\CoreBundle\Entity\Chatroom 
     */
    public function getChatroom()
    {
        return $this->chatroom;
    }

    /**
     * Set sender
     *
     * @param \KTU\CoreBundle\Entity\Users $sender
     * @return Messages
     */
    public function setSender(\KTU\CoreBundle\Entity\Users $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \KTU\CoreBundle\Entity\Users 
     */
    public function getSender()
    {
        return $this->sender;
    }
}
