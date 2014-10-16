<?php

namespace GSB\Domain;

class VisitReport {
    
  private $reportId;
  private $practitionerId;
  private $visitorId;
  private $reportingDate;
  private $assessment;
  private $purpose;
  
  public function getReportId() {
      return $this->reportId;
  }

  public function getPractitionerId() {
      return $this->practitionerId;
  }

  public function getVisitorId() {
      return $this->visitorId;
  }

  public function getReportingDate() {
      return $this->reportingDate;
  }

  public function getAssessment() {
      return $this->assessment;
  }

  public function getPurpose() {
      return $this->purpose;
  }

  public function setReportId($reportId) {
      $this->reportId = $reportId;
  }

  public function setPractitionerId($practitionerId) {
      $this->practitionerId = $practitionerId;
  }

  public function setVisitorId($visitorId) {
      $this->visitorId = $visitorId;
  }

  public function setReportingDate($reportingDate) {
      $this->reportingDate = $reportingDate;
  }

  public function setAssessment($assessment) {
      $this->assessment = $assessment;
  }

  public function setPurpose($purpose) {
      $this->purpose = $purpose;
  }


}

