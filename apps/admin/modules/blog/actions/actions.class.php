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

//Listのアクション
  public function executeList()
  {
    // $this->blogs = BlogPeer::doSelect(new Criteria());
    $c = new Criteria();
    //addで$cにいれる基準を加える
    //idの降順で$cに入れていく
    $c->addDescendingOrderByColumn(BlogPeer::ID);
    //$cの条件でparent_blogsに格納しtemplateに渡す
    $this->blogs = BlogPeer::doSelect($c);
  }

  public function executeShow()
  {
    //parentブログの詳細ページ
    $this->blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->blog);

    $c_comment = new Criteria();
    $c_comment->add(BlogCommentPeer::BLOG_ID, $this->blog->getId());
    $c_comment->addAscendingOrderByColumn(BlogCommentPeer::ID);

    $this->blog_comments = BlogCommentPeer::doSelect($c_comment);
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
    //idがnullならば
    if (!$this->getRequestParameter('id'))
    {
      //Blogのインスタンスを作る
      $blog = new Blog();
    }
    //idがあれば
    else
    {
      //idに従ってblogの内容をとってくる
      $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($blog);
    }

    $fileName = $this->getRequest()->getFileName('file');
    $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);

    $blog->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    $blog->setTitle($this->getRequestParameter('title'));
    $blog->setImage($fileName);
    $blog->setBody($this->getRequestParameter('body'));
    $oya_id = $this->getRequestParameter('oya_id');

    if ($oya_id) {
      $blog->setParentId($oya_id);
    }else{
      $blog->setParentId(0);
    }
    
    $blog->save();

    return $this->redirect('blog/show?id='.$blog->getId());
  }

  // public function executeComment()
  // {
  //   $blog_comment = new BlogComment();
  //   $blog_comment->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
  //   $blog_comment->setBlogId($this->getRequestParameter('blog_id'));
  //   $blog_comment->setBody($this->getRequestParameter('body'));
  //   $blog_comment->save();
  // }

  public function executeDelete()
  {
    $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($blog);

    $blog->delete();

    return $this->redirect('blog/list');
  }
}
