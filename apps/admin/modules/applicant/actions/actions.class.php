<?php

/**
 * applicant actions.
 *
 * @package    gn_sns
 * @subpackage applicant
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class applicantActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }

  public function executeList()
  {
    $this->applicants = ApplicantPeer::doSelect(new Criteria());
  }

  public function executeDelete()
  {
    $applicant = ApplicantPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($applicant);

    $applicant->delete();

    return $this->redirect('applicant/list');
  }

  public function executeApproval()
  {
  	
  }
}
