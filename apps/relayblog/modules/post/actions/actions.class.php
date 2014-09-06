<?php

/**
 * post actions.
 *
 * @package    gn_sns
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class postActions extends sfActions
{
  
  public function executeList()
  {
    $this->posts = PostPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->post = PostPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->post);
  }

  public function executeCreate()
  {
    $this->post = new Post();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->post = PostPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->post);
  }

  public function executeUpdate()
  {
    //新規ポストの作成か、既存ポストの編集か
    //ポストのidがnullならばインスタンスを生成
    if (!$this->getRequestParameter('id'))
    {
      $post = new Post();
    }
    //idが存在するなら
    else
    {
      //postの主キーに沿って、レコードを取り出す
      $post = PostPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($post);
    }
      $subscriber_id = $this->getUser()->getSubscriberId();
      $post->setUserId($subscriber_id);
      $post->setTitle($this->getRequestParameter('title'));
      //ファイルアップローd
      $fileName = $this->getRequest()->getFileName('file');
      $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName); 

      $post->setImage($fileName);
      $post->setBody($this->getRequestParameter('body'));
      $post->setCategory($this->getRequestParameter('category'));
      $post->setId($this->getRequestParameter('id'));

      $post->save();

      return $this->redirect('post/show?id='.$post->getId());
  }

  public function executeDelete()
  {
    $post = PostPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($post);

    $post->delete();

    return $this->redirect('post/list');
  }
}

