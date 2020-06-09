<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticias_enventos
 *
 * @ORM\Table(name="noticias_eventos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Noticias_eventosRepository")
 */
class Noticias_eventos
{

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idEventos", type="integer")
     */
    private $idEventos;

    /**
     * @var int
     *
     * @ORM\Column(name="idNoticias", type="integer")
     */
    private $idNoticias;


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
     * Set idEventos
     *
     * @param integer $idEventos
     *
     * @return Noticias_eventos
     */
    public function setIdEventos($idEventos)
    {
        $this->idEventos = $idEventos;

        return $this;
    }

    /**
     * Get idEventos
     *
     * @return integer
     */
    public function getIdEventos()
    {
        return $this->idEventos;
    }

    /**
     * Set idNoticias
     *
     * @param integer $idNoticias
     *
     * @return Noticias_eventos
     */
    public function setIdNoticias($idNoticias)
    {
        $this->idNoticias = $idNoticias;

        return $this;
    }

    /**
     * Get idNoticias
     *
     * @return integer
     */
    public function getIdNoticias()
    {
        return $this->idNoticias;
    }
}
