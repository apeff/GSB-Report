<?php

namespace GSB\DAO;

use GSB\Domain\Drug;

class DrugDAO extends DAO
{
    /**
     * @var \GSB\DAO\FamilyDAO
     */
    private $familyDAO;

    public function setFamilyDAO($familyDAO) {
        $this->familyDAO = $familyDAO;
    }

    /**
     * Returns the list of all drugs, sorted by trade name.
     *
     * @return array The list of all drugs.
     */
    public function findAll() {
        $sql = "select * from practitioner order by practitioner_name";
        $result = $this->getDb()->fetchAll($sql);
        
        // Converts query result to an array of domain objects
        $practitioners = array();
        foreach ($result as $row) {
            $practitionerId = $row['drug_id'];
            $practitioners[$practitionerId] = $this->buildDomainObject($row);
        }
        return $practitioners;
    }

    /**
     * Returns the list of all drugs for a given family, sorted by trade name.
     *
     * @param integer $familyDd The family id.
     *
     * @return array The list of drugs.
     */
    public function findAllByFamily($practitionerId) {
        $sql = "select * from practitioner where practitioner_id=? order by practitioner_name";
        $result = $this->getDb()->fetchAll($sql, array($practitionerId));
        
        // Convert query result to an array of domain objects
        $practitioners = array();
        foreach ($result as $row) {
            $practitionerId = $row['drug_id'];
            $practitioners[$practitionerId] = $this->buildDomainObject($row);
        }
        return $practitioners;
    }

    /**
     * Returns the drug matching a given id.
     *
     * @param integer $id The drug id.
     *
     * @return \GSB\Domain\Drug|throws an exception if no drug is found.
     */
    public function find($id) {
        $sql = "select * from practitioner where practitioner_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No drug found for id " . $id);
    }

    /**
     * Creates a Drug instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Drug
     */
    protected function buildDomainObject($row) {
        $familyId = $row['practitioner_type_id'];
        $type = $this->practitionerTypeDAO->find($typeId);

        $practitioner= new Practitioner();
        $practitioner->setId($row['practitioner_id']);
        $practitioner->setType_id($row['practitioner_type_id']);
        $practitioner->setFirst_Name($row['trade_name']);
        $practitioner->setAdress($row['content']);
        $practitioner->setZip_code($row['effects']);
        $practitioner->setContraindication($row['contraindication']);
        $practitioner->setSamplePrice($row['sample_price']);
        $practitioner->setFamily($family);
        return $drug;
    }
}