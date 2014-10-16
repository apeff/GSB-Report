<?php
namespace GSB\Domain;

class Practitioner {

    //PROPERTIES
    private $id;
    private $typeId;
    private $name;
    private $firstName;
    private $address;
    private $zipCode;
    private $city;
    private $notorietyCoefficient;
    
    
    // GETTERS/SETTERS
    
    
     public function getId() {
        return $this->id;
    }

    public function getTypeId() {
        return $this->typeId;
    }

    public function getName() {
        return $this->name;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function getCity() {
        return $this->city;
    }

    public function getNotorietyCoefficient() {
        return $this->notorietyCoefficient;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTypeId($typeId) {
        $this->typeId = $typeId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setNotorietyCoefficient($notorietyCoefficient) {
        $this->notorietyCoefficient = $notorietyCoefficient;
    }
}
