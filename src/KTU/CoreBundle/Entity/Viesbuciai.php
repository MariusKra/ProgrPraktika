<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viesbuciai
 */
class Viesbuciai
{
    /**
     * @var string
     */
    private $adresas;

    /**
     * @var integer
     */
    private $kambariai;

    /**
     * @var string
     */
    private $pavadinimas;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set adresas
     *
     * @param string $adresas
     * @return Viesbuciai
     */
    public function setAdresas($adresas)
    {
        $this->adresas = $adresas;

        return $this;
    }

    /**
     * Get adresas
     *
     * @return string 
     */
    public function getAdresas()
    {
        return $this->adresas;
    }

    /**
     * Set kambariai
     *
     * @param integer $kambariai
     * @return Viesbuciai
     */
    public function setKambariai($kambariai)
    {
        $this->kambariai = $kambariai;

        return $this;
    }

    /**
     * Get kambariai
     *
     * @return integer 
     */
    public function getKambariai()
    {
        return $this->kambariai;
    }

    /**
     * Set pavadinimas
     *
     * @param string $pavadinimas
     * @return Viesbuciai
     */
    public function setPavadinimas($pavadinimas)
    {
        $this->pavadinimas = $pavadinimas;

        return $this;
    }

    /**
     * Get pavadinimas
     *
     * @return string 
     */
    public function getPavadinimas()
    {
        return $this->pavadinimas;
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
}
