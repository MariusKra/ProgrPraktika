<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Darbuotojai
 */
class Darbuotojai
{
    /**
     * @var string
     */
    private $vardas;

    /**
     * @var string
     */
    private $pavarde;

    /**
     * @var string
     */
    private $pareigos;

    /**
     * @var \DateTime
     */
    private $dirbaNuo;

    /**
     * @var integer
     */
    private $atlyginimas;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \KTU\CoreBundle\Entity\Viesbuciai
     */
    private $viesbutisid;


    /**
     * Set vardas
     *
     * @param string $vardas
     * @return Darbuotojai
     */
    public function setVardas($vardas)
    {
        $this->vardas = $vardas;

        return $this;
    }

    /**
     * Get vardas
     *
     * @return string 
     */
    public function getVardas()
    {
        return $this->vardas;
    }

    /**
     * Set pavarde
     *
     * @param string $pavarde
     * @return Darbuotojai
     */
    public function setPavarde($pavarde)
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    /**
     * Get pavarde
     *
     * @return string 
     */
    public function getPavarde()
    {
        return $this->pavarde;
    }

    /**
     * Set pareigos
     *
     * @param string $pareigos
     * @return Darbuotojai
     */
    public function setPareigos($pareigos)
    {
        $this->pareigos = $pareigos;

        return $this;
    }

    /**
     * Get pareigos
     *
     * @return string 
     */
    public function getPareigos()
    {
        return $this->pareigos;
    }

    /**
     * Set dirbaNuo
     *
     * @param \DateTime $dirbaNuo
     * @return Darbuotojai
     */
    public function setDirbaNuo($dirbaNuo)
    {
        $this->dirbaNuo = $dirbaNuo;

        return $this;
    }

    /**
     * Get dirbaNuo
     *
     * @return \DateTime 
     */
    public function getDirbaNuo()
    {
        return $this->dirbaNuo;
    }

    /**
     * Set atlyginimas
     *
     * @param integer $atlyginimas
     * @return Darbuotojai
     */
    public function setAtlyginimas($atlyginimas)
    {
        $this->atlyginimas = $atlyginimas;

        return $this;
    }

    /**
     * Get atlyginimas
     *
     * @return integer 
     */
    public function getAtlyginimas()
    {
        return $this->atlyginimas;
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
     * @return Darbuotojai
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
