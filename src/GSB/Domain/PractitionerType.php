<?php

namespace GSB\Domain;

class PractitionerType
{

 private $id;
  private $lib;
   private $lieu;
   
       public function getId() {
        return $this->id;
    }

    public function getLib() {
        return $this->lib;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLib($lib) {
        $this->lib = $lib;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }
   
}
   