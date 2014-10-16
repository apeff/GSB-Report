<?php

namespace GSB\Domain;

class Visitor implements \Symfony\Component\Security\Core\User\UserInterface {

    private $id;
    private $sectorId;
    private $laboratyId;
    private $lastName;
    private $firstName;
    private $adress;
    private $zipCode;
    private $city;
    private $date;
    private $userName;
    private $password;
    private $salt;
    private $role;
    private $type;

    public function getId() {
        return $this->id;
    }

    public function getSectorId() {
        return $this->sectorId;
    }

    public function getLaboratyId() {
        return $this->laboratyId;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function getCity() {
        return $this->city;
    }

    public function getDate() {
        return $this->date;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getRole() {
        return $this->role;
    }

    public function getType() {
        return $this->type;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSectorId($sectorId) {
        $this->sectorId = $sectorId;
    }

    public function setLaboratyId($laboratyId) {
        $this->laboratyId = $laboratyId;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function eraseCredentials() {
        
    }

   /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

}
