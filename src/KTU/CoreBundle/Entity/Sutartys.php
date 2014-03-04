<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sutartys
 */
class Sutartys
{
    /**
     * @var \DateTime
     */
    private $nuoKurios;

    /**
     * @var \DateTime
     */
    private $ikiKurios;

    /**
     * @var integer
     */
    private $kaina;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \KTU\CoreBundle\Entity\Nuomininkai
     */
    private $nuomininkasid;

    /**
     * @var \KTU\CoreBundle\Entity\Kambariai
     */
    private $kambarysid;

    /**
     * @var \KTU\CoreBundle\Entity\Darbuotojai
     */
    private $darbuotojasid;


    /**
     * Set nuoKurios
     *
     * @param \DateTime $nuoKurios
     * @return Sutartys
     */
    public function setNuoKurios($nuoKurios)
    {
        $this->nuoKurios = $nuoKurios;

        return $this;
    }

    /**
     * Get nuoKurios
     *
     * @return \DateTime 
     */
    public function getNuoKurios()
    {
        return $this->nuoKurios;
    }

    /**
     * Set ikiKurios
     *
     * @param \DateTime $ikiKurios
     * @return Sutartys
     */
    public function setIkiKurios($ikiKurios)
    {
        $this->ikiKurios = $ikiKurios;

        return $this;
    }

    /**
     * Get ikiKurios
     *
     * @return \DateTime 
     */
    public function getIkiKurios()
    {
        return $this->ikiKurios;
    }

    /**
     * Set kaina
     *
     * @param integer $kaina
     * @return Sutartys
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
     * Set nuomininkasid
     *
     * @param \KTU\CoreBundle\Entity\Nuomininkai $nuomininkasid
     * @return Sutartys
     */
    public function setNuomininkasid(\KTU\CoreBundle\Entity\Nuomininkai $nuomininkasid = null)
    {
        $this->nuomininkasid = $nuomininkasid;

        return $this;
    }

    /**
     * Get nuomininkasid
     *
     * @return \KTU\CoreBundle\Entity\Nuomininkai 
     */
    public function getNuomininkasid()
    {
        return $this->nuomininkasid;
    }

    /**
     * Set kambarysid
     *
     * @param \KTU\CoreBundle\Entity\Kambariai $kambarysid
     * @return Sutartys
     */
    public function setKambarysid(\KTU\CoreBundle\Entity\Kambariai $kambarysid = null)
    {
        $this->kambarysid = $kambarysid;

        return $this;
    }

    /**
     * Get kambarysid
     *
     * @return \KTU\CoreBundle\Entity\Kambariai 
     */
    public function getKambarysid()
    {
        return $this->kambarysid;
    }

    /**
     * Set darbuotojasid
     *
     * @param \KTU\CoreBundle\Entity\Darbuotojai $darbuotojasid
     * @return Sutartys
     */
    public function setDarbuotojasid(\KTU\CoreBundle\Entity\Darbuotojai $darbuotojasid = null)
    {
        $this->darbuotojasid = $darbuotojasid;

        return $this;
    }

    /**
     * Get darbuotojasid
     *
     * @return \KTU\CoreBundle\Entity\Darbuotojai 
     */
    public function getDarbuotojasid()
    {
        return $this->darbuotojasid;
    }
}
