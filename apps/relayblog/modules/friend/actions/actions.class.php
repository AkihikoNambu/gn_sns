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
  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $blog = new Blog();
    }
    else
    {
      $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($blog);
    }

    $fileName = $this->getRequest()->getFileName('file');
    $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);

    $blog->setId($this->getRequestParameter('id'));
    $blog->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    $blog->setTitle($this->getRequestParameter('title'));
    $blog->setImage($fileName);
    $blog->setBody($this->getRequestParameter('body'));
    

    $blog->save();

    return $this->redirect('blog/show?id='.$blog->getId());
  }
}
