<?php

/**
 * @author      Daniele Bicelli <d.bicelli89@gmail.com>
 * @authorUrl   http://www.bicelli.me
 */

namespace Digirati;

/**
 * BoardingCard  class
 *
 */
class BoardingCard {

    /**
     * @var string $origin
     */
    protected $origin;

    /**
     * @var string $destination
     */
    protected $destination;

    /**
     * @var string $transportType
     */
    protected $transportType;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $allocatedSeat
     */
    protected $allocatedSeat;

    /**
     * Constructor.
     * @param string $origin
     * @param string $destination
     * @param string $transportType
     * @param string $name
     * @param string $allocatedSeat
     */
    public function __construct($origin = null, $destination = null, $transportType = null, $name = null, $allocatedSeat = null) {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->transportType = $transportType;
        $this->name = $name;
        $this->allocatedSeat = $allocatedSeat;
    }

    /**
     * @return $origin
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     *  @param string $origin
     */
    public function setOrigin($origin) {
        $this->origin = $origin;
    }

    /**
     * @return $destination
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     *  @param string $destination
     */
    public function setDestination($destination) {
        $this->destination = $destination;
    }

    /**
     * @return $transportType
     */
    public function getTransportType() {
        return $this->transportType;
    }

    /**
     *  @param string $transportType
     */
    public function setTransportType($transportType) {
        $this->transportType = $transportType;
    }

    /**
     * @return $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     *  @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return $allocatedSeat
     */
    public function getAllocatedSeat() {
        return $this->allocatedSeat;
    }

    /**
     *  @param string $allocatedSeat
     */
    public function setAllocatedSeat($allocatedSeat) {
        $this->allocatedSeat = $allocatedSeat;
    }

    /**
     *  @return string
     */
    public function getOutput() {
        $output = $this->transportType . " ";
        $output .=!empty($this->name) ? $this->name . " " : "";
        $output .= "From ";
        $output .=!empty($this->origin) ? $this->origin . " " : "";
        $output .= "to ";
        $output .=!empty($this->destination) ? $this->destination : "";
        $output .=!empty($this->allocatedSeat) ? ", Seat number " . $this->allocatedSeat : "";
        return $output;
    }

}
