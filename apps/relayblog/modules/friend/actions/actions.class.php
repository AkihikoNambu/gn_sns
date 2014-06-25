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
    $c = new Criteria;
    $c->addDescendingOrderByColumn(FriendPeer::ID);
    $this->friends = FriendPeer::doSelect($c);
  }

  public function executeShow()
  {
    $this->friend = FriendPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->friend);

  //friendに対するcommentをテンプレートに渡す
    //friend_commentのレコードを取ってくる
    $c_comment = new Criteria();
    //取ってくる条件を指定する。friend_idに沿って取ってくる
    $c_comment->add(FriendCommentPeer::FRIEND_ID, $this->friend->getId());
    //friend_commentのレコードを昇順で取ってくる
    $c_comment->addAscendingOrderByColumn(FriendCommentPeer::ID);
    //blog_commentsとしてテンプレートに渡す
    $this->friend_comments = FriendCommentPeer::doSelect($c_comment);

  //commentの数をカウントする
    //基準設定
    $c_count = new Criteria();
    //基準としてフレンドのidを設定。これでフレンドごとのコメント数がわかる
    $c_count->add(FriendCommentPeer::FRIEND_ID, $this->friend->getId());
    //doCountメソッドでカウントし、テンプレートに渡す
    $this->comment_number = FriendCommentPeer::doCount($c_count);

  //ブログの最新記事を取得
    $c_lates = new Criteria();
    $c_lates->addDescendingOrderByColumn(FriendPeer::ID);
    $c_lates->setLimit(5);
    $this->lates_friends = FriendPeer::doSelect($c_lates);
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

  public function executeComment()
  {
    $friend_id = $this->getRequestParameter('id');
    $friend_comment = new FriendComment();

    //useridを取得しfriend_commentのパラメーターに持たせる。
    //(今は省略)
    $friend_comment->setFriendId($friend_id);
    $friend_comment->setBody($this->getRequestParameter('body'));
    
    $friend_comment->save();

    //投稿後のリダイレクト
    return $this->redirect('friend/show?id='.$friend_id);
  }
}
