<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nuomininkai
 */
class Nuomininkai
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
     * @var integer
     */
    private $id;


    /**
     * Set vardas
     *
     * @param string $vardas
     * @return Nuomininkai
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
     * @return Nuomininkai
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
