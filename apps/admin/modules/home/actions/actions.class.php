<?php

/**
 * home actions.
 *
 * @package    gn_sns
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('home', 'list');
  }

  public function executeList()
  {
  	// $blog = new Blog();
  	// $blog->setTitle($this->getRequestParameter('title'));
  	// $blog->setBody($this->getRequestParameter('body'));
  	// $blog->save();


  }
}
