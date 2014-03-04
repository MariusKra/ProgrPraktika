<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatroomPartisipants
 */
class ChatroomPartisipants
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \KTU\CoreBundle\Entity\Users
     */
    private $usersusers;


    /**
     * Set id
     *
     * @param integer $id
     * @return ChatroomPartisipants
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set usersusers
     *
     * @param \KTU\CoreBundle\Entity\Users $usersusers
     * @return ChatroomPartisipants
     */
    public function setUsersusers(\KTU\CoreBundle\Entity\Users $usersusers)
    {
        $this->usersusers = $usersusers;

        return $this;
    }

    /**
     * Get usersusers
     *
     * @return \KTU\CoreBundle\Entity\Users 
     */
    public function getUsersusers()
    {
        return $this->usersusers;
    }
}
