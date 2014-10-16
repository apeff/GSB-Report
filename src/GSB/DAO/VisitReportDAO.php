<?php

namespace GSB\DAO;

use GSB\Domain\VisitReport;

class VisitReportDAO extends DAO {

    private $visitorDAO;
    private $practitionnerDAO;

    public function setVisitorDAO($visitorDAO) {
        $this->visitorDAO = $visitorDAO;
    }

    public function setPractitionnerDAO($practitionnerDAO) {
        $this->practitionnerDAO = $practitionnerDAO;
    }

    /**
     * Returns the list of all PractitionerTypes, sorted by name.
     *
     * @return array The list of all PractitionerTypes.
     */
    public function findAll() {
        $sql = "select * from visit_report";
        $result = $this->getDb()->fetchAll($sql);

        // Converts query result to an array of domain objects
        $visitReports = array();
        foreach ($result as $row) {
            $visitReportId = $row['report_id'];
            $visitReports[$visitReportId] = $this->buildDomainObject($row);
        }
        return $visitReports;
    }

    protected function buildDomainObject($row) {

        $practitionerId = $row['practitioner_id '];
        $practitioner = $this->practitionerDAO->find($practitionerId);

        $visitorId = $row['visitor_id'];
        $visitor = $this->visitorDAO->find($visitorId);

        $visitReport = new VisitReport();
        $visitReport->setPractitionerId($row['report_id']);
        $visitReport->setName($practitioner);
        $visitReport->setVisitorId($visitor);
        $visitReport->setReportingDate($row['reporting_date']);
        $visitReport->setAssessment($row['assessment']);
        $visitReport->setPurpose($row['purpose']);

        return $visitReport;
    }

}
