<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPais
 *
 * @ORM\Table(name="ctl_pais", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_pais_dominio2_key", columns={"dominio2"}), @ORM\UniqueConstraint(name="ctl_pais_dominio3_key", columns={"dominio3"}), @ORM\UniqueConstraint(name="ctl_pais_isonumero_key", columns={"isonumero"})})
 * @ORM\Entity
 */
class CtlPais
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"comment"="Identificador de país"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_pais_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false, options={"comment"="Descripción nombre del país"})
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dominio2", type="string", length=2, nullable=true, options={"comment"="abreviatura dominio2 según ISO 3166-1 alfa-2"})
     */
    private $dominio2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dominio3", type="string", length=3, nullable=true, options={"comment"="Abreviatura de dominio3 según ISO 3166-1 alfa-3"})
     */
    private $dominio3;

    /**
     * @var int
     *
     * @ORM\Column(name="isonumero", type="integer", nullable=false, options={"comment"="Identificador númerico de país según ISO 3166-1"})
     */
    private $isonumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_usuario_reg", type="string", length=50, nullable=true, options={"comment"="Auditoría usuario ingreso el registro"})
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_hora_reg", type="datetime", nullable=true, options={"comment"="Auditoría fecha y hora ingreso de registro"})
     */
    private $fechaHoraReg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_usuario_mod", type="string", length=50, nullable=true, options={"comment"="Auditoría usuario modificó el registro"})
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_hora_mod", type="datetime", nullable=true, options={"comment"="Auditoría fecha y hora modificación del registro"})
     */
    private $fechaHoraMod;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false, options={"comment"="Identificador estado del país true o false"})
     */
    private $activo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDominio2(): ?string
    {
        return $this->dominio2;
    }

    public function setDominio2(?string $dominio2): self
    {
        $this->dominio2 = $dominio2;

        return $this;
    }

    public function getDominio3(): ?string
    {
        return $this->dominio3;
    }

    public function setDominio3(?string $dominio3): self
    {
        $this->dominio3 = $dominio3;

        return $this;
    }

    public function getIsonumero(): ?int
    {
        return $this->isonumero;
    }

    public function setIsonumero(int $isonumero): self
    {
        $this->isonumero = $isonumero;

        return $this;
    }

    public function getIdUsuarioReg(): ?string
    {
        return $this->idUsuarioReg;
    }

    public function setIdUsuarioReg(?string $idUsuarioReg): self
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    public function getFechaHoraReg(): ?\DateTimeInterface
    {
        return $this->fechaHoraReg;
    }

    public function setFechaHoraReg(?\DateTimeInterface $fechaHoraReg): self
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    public function getIdUsuarioMod(): ?string
    {
        return $this->idUsuarioMod;
    }

    public function setIdUsuarioMod(?string $idUsuarioMod): self
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    public function getFechaHoraMod(): ?\DateTimeInterface
    {
        return $this->fechaHoraMod;
    }

    public function setFechaHoraMod(?\DateTimeInterface $fechaHoraMod): self
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }


}
