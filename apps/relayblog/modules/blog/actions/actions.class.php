<?php

/**
 * blog actions.
 *
 * @package    gn_sns
 * @subpackage blog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class blogActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('blog', 'list');
  }

  public function executeList()
  {
    $this->blogs = BlogPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->blog);
  }

  public function executeCreate()
  {
    $this->blog = new Blog();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->blog);
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



  public function executeDelete()
  {
    $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($blog);

    $blog->delete();

    return $this->redirect('blog/list');
  }
}
