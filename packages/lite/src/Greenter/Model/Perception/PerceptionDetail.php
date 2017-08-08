<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 08/08/2017
 * Time: 11:28 AM
 */

namespace Greenter\Model\Perception;

use Greenter\Model\Retention\Exchange;
use Greenter\Model\Retention\Payment;
use Greenter\Xml\Validator\PerceptionDetailValidator;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PerceptionDetail
 * @package Greenter\Model\Perception
 */
class PerceptionDetail
{
    use PerceptionDetailValidator;

    /**
     * Tipo de documento Relacionado.
     *
     * @Assert\NotBlank()
     * @Assert\Length(max="2")
     * @var string
     */
    private $tipoDoc;

    /**
     * Numero del documento relacionado (Serie-Correlativo).
     *
     * @Assert\NotBlank()
     * @Assert\Length(max="13")
     * @var string
     */
    private $numDoc;

    /**
     * Fecha de Emision del documento relacionado.
     *
     * @Assert\NotBlank()
     * @Assert\Date()
     * @var \DateTime
     */
    private $fechaEmision;

    /**
     * Importe total documento Relacionado.
     *
     * @Assert\NotBlank()
     * @var float
     */
    private $impTotal;

    /**
     * Moneda del docoumento relacionado.
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="3", max="3")
     * @var string
     */
    private $moneda;

    /**
     * Datos del Cobro.
     *
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @var Payment[]
     */
    private $cobros;

    /**
     * Fecha de Retención.
     *
     * @Assert\NotBlank()
     * @Assert\Date()
     * @var \DateTime
     */
    private $fechaPercepcion;

    /**
     * Importe Percibido.
     *
     * @Assert\NotBlank()
     * @var float
     */
    private $impPercibido;

    /**
     * Importe total a cobrar (neto).
     *
     * @Assert\NotBlank()
     * @var float
     */
    private $impCobrar;

    /**
     * @Assert\Valid()
     * @var Exchange
     */
    private $tipoCambio;

    /**
     * @return mixed
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * @param mixed $tipoDoc
     * @return PerceptionDetail
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumDoc()
    {
        return $this->numDoc;
    }

    /**
     * @param mixed $numDoc
     * @return PerceptionDetail
     */
    public function setNumDoc($numDoc)
    {
        $this->numDoc = $numDoc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * @param mixed $fechaEmision
     * @return PerceptionDetail
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;
        return $this;
    }

    /**
     * @return float
     */
    public function getImpTotal()
    {
        return $this->impTotal;
    }

    /**
     * @param float $impTotal
     * @return PerceptionDetail
     */
    public function setImpTotal($impTotal)
    {
        $this->impTotal = $impTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * @param mixed $moneda
     * @return PerceptionDetail
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCobros()
    {
        return $this->cobros;
    }

    /**
     * @param mixed $cobros
     * @return PerceptionDetail
     */
    public function setCobros($cobros)
    {
        $this->cobros = $cobros;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaPercepcion()
    {
        return $this->fechaPercepcion;
    }

    /**
     * @param \DateTime $fechaPercepcion
     * @return PerceptionDetail
     */
    public function setFechaPercepcion($fechaPercepcion)
    {
        $this->fechaPercepcion = $fechaPercepcion;
        return $this;
    }

    /**
     * @return float
     */
    public function getImpPercibido()
    {
        return $this->impPercibido;
    }

    /**
     * @param float $impPercibido
     * @return PerceptionDetail
     */
    public function setImpPercibido($impPercibido)
    {
        $this->impPercibido = $impPercibido;
        return $this;
    }

    /**
     * @return float
     */
    public function getImpCobrar()
    {
        return $this->impCobrar;
    }

    /**
     * @param float $impCobrar
     * @return PerceptionDetail
     */
    public function setImpCobrar($impCobrar)
    {
        $this->impCobrar = $impCobrar;
        return $this;
    }

    /**
     * @return Exchange
     */
    public function getTipoCambio()
    {
        return $this->tipoCambio;
    }

    /**
     * @param Exchange $tipoCambio
     * @return PerceptionDetail
     */
    public function setTipoCambio($tipoCambio)
    {
        $this->tipoCambio = $tipoCambio;
        return $this;
    }
}