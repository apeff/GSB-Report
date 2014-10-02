<?php

namespace GSB\DAO;

use GSB\Domain\PractitionerType;

class FamilyDAO extends DAO
{
    /**
     * Returns the list of all families, sorted by name.
     *
     * @return array The list of all families.
     */
    public function findAll() {
        $sql = "select * from practitioner_type order by practitioner_type_name";
        $result = $this->getDb()->fetchAll($sql);
        
        // Converts query result to an array of domain objects
        $families = array();
        foreach ($result as $row) {
            $typeId = $row['practitioner_type_id'];
            $types[$typeId] = $this->buildDomainObject($row);
        }
        return $types;
    }

    /**
     * Returns the family matching the given id.
     *
     * @param integer $id The family id.
     *
     * @return \GSB\Domain\Family|throws an exception if no family is found.
     */
    public function find($id) {
        $sql = "select * from practitioner_type where practitioner_type_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No family found for id " . $id);
    }

    /**
     * Creates a Family instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Family
     */
    protected function buildDomainObject($row) {
        $type= new practitioner_type();
        $type->setId($row['practitioner_type_id']);
        $type->setName($row['practitioner_type_name']);
        return $practitioner;
    }
}