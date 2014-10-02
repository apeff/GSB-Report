<?php

namespace GSB\Domain;

class Practitioner
{
    private $id;
    private $type_id;
    private $name;
    private $first_name;
    private $adress;
    private $zip_code;
    private $city;
    private $notoriety_coefficient;
    
    public function getId() {
        return $this->id;
    }

    public function getType_id() {
        return $this->type_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getZip_code() {
        return $this->zip_code;
    }

    public function getCity() {
        return $this->city;
    }

    public function getNotoriety_coefficient() {
        return $this->notoriety_coefficient;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setType_id($type_id) {
        $this->type_id = $type_id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function setZip_code($zip_code) {
        $this->zip_code = $zip_code;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setNotoriety_coefficient($notoriety_coefficient) {
        $this->notoriety_coefficient = $notoriety_coefficient;
    }

 
}
