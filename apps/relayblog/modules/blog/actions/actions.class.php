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
    //PropelPagerのインスタンス生成
    $pager = new sfPropelPager('Blog', 2);
    //ブログのレコードの取得
    $c = new Criteria();
    //ブログのidに従って降順で取得
    $c->addDescendingOrderByColumn(BlogPeer::ID);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    // $pager->setPeerMethod('doSelectJoinUser');
    $pager->init();
 
    $this->blog_pager = $pager;
    // $this->blogs = BlogPeer::doSelect($c);

    $this->blog_comments = BlogCommentPeer::doSelect(new Criteria());

    //ブログの最新記事を取得
    $c_lates = new Criteria();
    $c_lates->addDescendingOrderByColumn(BlogPeer::ID);
    $c_lates->setLimit(5);
    $this->lates_blogs = BlogPeer::doSelect($c_lates);
  }

  public function executeShow()
  {
  //blogのレコードをテンプレートに渡す
    //主キーに基づいて取ってきてテンプレートに渡す
    $this->blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
    //主キーが存在しなかったときの処理
    $this->forward404Unless($this->blog);

  //blogに対するcommentをテンプレートに渡す
    $this->blog_comments = $this->blog->getBlogComments();
    //blog_commentのレコードを取ってくる
    // $c_comment = new Criteria();
    //取ってくる条件を指定する。blog_idに沿って取ってくる
    // $c_comment->add(BlogCommentPeer::BLOG_ID, $this->blog->getId());
    //blog_commentのレコードを昇順で取ってくる
    // $c_comment->addAscendingOrderByColumn(BlogCommentPeer::ID);
    //blog_commentsとしてテンプレートに渡す
    // $this->blog_comments = BlogCommentPeer::doSelect($c_comment);

  //commentの数をカウントする
    //基準設定
    $c_count = new Criteria();
    //基準としてブログのidを設定。これでブログごとのコメント数がわかる
    $c_count->add(BlogCommentPeer::BLOG_ID, $this->blog->getId());
    //doCountメソッドでカウントし、テンプレートに渡す
    $this->comment_number = BlogCommentPeer::doCount($c_count);
  }

  public function executeCreate()
  {
    //Blogインスタンスの生成
    $this->blog = new Blog();
    //editSuccessへ飛ばす
    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    //ブログを主キーに沿って取得しテンプレートに渡す
    $this->blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->blog);
  }

  public function executeUpdate()
  {
  //新たなブログの投稿(create)か、既存の投稿の編集(edit)か
    //Blogのidがnullならば
    if (!$this->getRequestParameter('id'))
    {
      //Blogインスタンスの生成
      $blog = new Blog();
    }
    //blogのidが存在すれば
    else
    {
      //blogのレコードを主キーに従って取得し、$blogに代入する
      $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($blog);
    }
    //ファイル名を取得し$fileName変数に代入する
    $fileName = $this->getRequest()->getFileName('file');
    //アップロードディレクトリにファイルを移動
    $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);

    $blog->setId($this->getRequestParameter('id'));
    $blog->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    $blog->setTitle($this->getRequestParameter('title'));
    $blog->setImage($fileName);
    $blog->setBody($this->getRequestParameter('body'));
    //レコードに保存
    $blog->save();
    //リダイレクトページを指定
    return $this->redirect('blog/show?id='.$blog->getId());
  }

  public function executeComment()
  {
    $subscriber_id = $this->getUser()->getSubscriberId();
    $blog_id = $this->getRequestParameter('id');

    $blog_comment = new BlogComment();
    //useidは本来セッションから取得できるので、こんな書き方をする必要はない
    // $blog_comment->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    $blog_comment->setUserId($subscriber_id);
    //idをblogidにセット
    $blog_comment->setBlogId($blog_id);
    $blog_comment->setBody($this->getRequestParameter('body'));
    
    $blog_comment->save();

    //投稿後のリダイレクト
    return $this->redirect('blog/show?id='.$blog_id);
    // return $this->redirect('blog/list');
  }



  public function executeDelete()
  {
    $blog = BlogPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($blog);

    $blog->delete();

    return $this->redirect('blog/list');
  }
}
