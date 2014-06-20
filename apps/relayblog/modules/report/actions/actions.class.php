<?php

/**
 * report actions.
 *
 * @package    gn_sns
 * @subpackage report
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class reportActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }
  public function executeShow()
  {
    $this->report = ReportPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->report);
  }
  public function executeShowmore()
  {
    
  }
}
