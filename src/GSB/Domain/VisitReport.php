<?php

namespace GSB\Domain;

class VisitReport {
    
  private $reportId;
  private $practitioner;
  private $visitor;
  private $reportingDate;
  private $assessment;
  private $purpose;
  
  public function getReportId() {
      return $this->reportId;
  }

  public function getPractitioner() {
      return $this->practitioner;
  }

  public function getVisitor() {
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

  public function setPractitioner($practitioner) {
      $this->practitioner = $practitioner;
  }

  public function setVisitor($visitor) {
      $this->visitor= $visitor;
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

