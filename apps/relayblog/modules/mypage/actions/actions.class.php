<?php

/**
 * mypage actions.
 *
 * @package    gn_sns
 * @subpackage mypage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class mypageActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }

  public function executeTop()
  {
  	$user = new Criteria();
  	$user->setUserName();
  	$user->
  }
}
