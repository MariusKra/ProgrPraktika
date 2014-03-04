<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kambariai
 */
class Kambariai
{
    /**
     * @var integer
     */
    private $nr;

    /**
     * @var integer
     */
    private $kaina;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \KTU\CoreBundle\Entity\Viesbuciai
     */
    private $viesbutisid;


    /**
     * Set nr
     *
     * @param integer $nr
     * @return Kambariai
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return integer 
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set kaina
     *
     * @param integer $kaina
     * @return Kambariai
     */
    public function setKaina($kaina)
    {
        $this->kaina = $kaina;

        return $this;
    }

    /**
     * Get kaina
     *
     * @return integer 
     */
    public function getKaina()
    {
        return $this->kaina;
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
     * Set viesbutisid
     *
     * @param \KTU\CoreBundle\Entity\Viesbuciai $viesbutisid
     * @return Kambariai
     */
    public function setViesbutisid(\KTU\CoreBundle\Entity\Viesbuciai $viesbutisid = null)
    {
        $this->viesbutisid = $viesbutisid;

        return $this;
    }

    /**
     * Get viesbutisid
     *
     * @return \KTU\CoreBundle\Entity\Viesbuciai 
     */
    public function getViesbutisid()
    {
        return $this->viesbutisid;
    }
}
