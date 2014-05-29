<?php

/**
 * friend actions.
 *
 * @package    gn_sns
 * @subpackage friend
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class friendActions extends sfActions
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
    $this->friends = FriendPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->friend = FriendPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->friend);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $friend = new Friend();
    }
    else
    {
      $friend = FriendPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($friend);
    }

    $friendfileName = $this->getRequest()->getFileName('file');
    $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);

    $friend->setId($this->getRequestParameter('id'));
    $friend->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    // $friend->setTitle($this->getRequestParameter('title'));
    $friend->setImage($friendfileName);
    $friend->setBody($this->getRequestParameter('body'));
    

    $friend->save();

    return $this->redirect('friend/show?id='.$friend->getId());
  }
}
