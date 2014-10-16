<?php

namespace GSB\DAO;

use GSB\Domain\VisitReport;

class VisitReportDAO extends DAO {

    private $visitorDAO;
    private $practitionerDAO;

    public function setVisitorDAO($visitorDAO) {
        $this->visitorDAO = $visitorDAO;
    }

    public function setPractitionerDAO($practitionerDAO) {
        $this->practitionerDAO = $practitionerDAO;
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

        $practitioner = $row['practitioner_id'];
        $practitioner = $this->practitionerDAO->find($practitioner);

        $visitor = $row['visitor_id'];
        $visitor = $this->visitorDAO->find($visitor);

        $visitReport = new VisitReport();
        $visitReport->setReportId($row['report_id']);
        $visitReport->setPractitioner($practitioner);
        $visitReport->setVisitor($visitor);
        $visitReport->setReportingDate($row['reporting_date']);
        $visitReport->setAssessment($row['assessment']);
        $visitReport->setPurpose($row['purpose']);

        return $visitReport;
    }

}
