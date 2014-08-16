<?php

/**
 * user actions.
 *
 * @package    gn_sns
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class userActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  //ユーザー登録
  public function executeAdd()
  {
    if($this->getRequest()->getMethod() != sfRequest::POST)
    {
      // フォームを表示する
      return sfView::SUCCESS;
    }
    else
    {
      // フォーム投稿を処理する
      $user = new User();
      $user->setUserName($this->getRequestParameter('user_name'));
      $user->setFirstName($this->getRequestParameter('first_name'));
      $user->setMiddleName($this->getRequestParameter('middle_name'));
      $user->setLastName($this->getRequestParameter('last_name'));
      $user->setEmail($this->getRequestParameter('email'));
      $user->setFacebookUrl($this->getRequestParameter('facebook_url'));
      // Certificationを初期値として0に設定する
      $user->setCertification($this->getRequestParameter('certification'));
      $user->setPassword($this->getRequestParameter('password1'));
      $user->save();

    return $this->redirect('@homepage');
    }
    
  }

  public function handleErrorAdd()
  {
    return sfView::SUCCESS;
  }

  //ユーザーログイン
  public function executeLogin()
{
  if ($this->getRequest()->getMethod() != sfRequest::POST)
  {
    // フォームを表示する
    $this->getRequest()->setAttribute('referer', $this->getRequest()->getReferer());
  }
  else
  {
        // 最後のページにリダイレクトする
        return $this->redirect('@homepage');
  }
}

  public function executeAdminuserlogin(){
    if ($this->getRequest()->getMethod() != sfRequest::POST)
    {
      // フォームを表示する
      return sfView::SUCCESS;
    }
    else
    {
      // adminのページにリダイレクトしたい      
      return $this->redirect('http://localhost:8888/sfprojects/gn_sns/web/admin_dev.php/home/list');
  }
  }

  public function executeLogout()
{
  $this->getUser()->setAuthenticated(false);
  $this->getUser()->clearCredentials();
 
  $this->getUser()->getAttributeHolder()->removeNamespace('subscriber');
 
  $this->redirect('@homepage');
}
public function handleErrorLogin()
  {
    return sfView::SUCCESS;
  }
public function handleErrorAdminuserlogin(){
  return sfView::SUCCESS;
}
public function executeEdit()
  {
     if($this->getRequest()->getMethod() != sfRequest::POST)
      {
        // フォームを表示する
      $this->subscriber = UserPeer::retrieveByPk($this->getRequestParameter('id', $this->getUser()->getSubscriberId()));
      $this->forward404Unless($this->subscriber);
      }
     else
      {
      $this->subscriber = UserPeer::retrieveByPk($this->getRequestParameter('id', $this->getUser()->getSubscriberId()));
      $fileName = $this->getRequest()->getFileName('file');
      if($fileName)
      {
        //画像uploadのためにdirectoryへ移動
        $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);
        $this->subscriber->setImage($fileName);
      }
      //変更するために新しくおく
      $this->subscriber->setUserName($this->getRequestParameter('user_name'));
      $this->subscriber->setFirstName($this->getRequestParameter('first_name'));
      $this->subscriber->setMiddleName($this->getRequestParameter('middle_name'));
      $this->subscriber->setLastName($this->getRequestParameter('last_name'));
      $this->subscriber->setEmail($this->getRequestParameter('email'));
      $this->subscriber->setFacebookUrl($this->getRequestParameter('facebook_url'));
      $this->subscriber->setPassword($this->getRequestParameter('password1'));
      // $this->subscriber->setPlaceOfResidence($this->getRequestParameter('place_of_residence'));
      $this->subscriber->setNationality($this->getRequestParameter('nationality'));
      $this->subscriber->setSelfIntroduction($this->getRequestParameter('self_introduction'));
      $this->subscriber->save();
      }

    // $this->username = $this->subscriber->getUserName();
    // $this->password = $this->subscriber->getSha1Password();
    // $this->firstname = $this->subscriber->getFirstName();
    // $this->lastname = $this->subscriber->getLastName();

    // $this->blog = $this->subscriber->getInterestsJoinQuestion();
    // $this->answers   = $this->subscriber->getAnswersJoinQuestion();
    // $this->questions = $this->subscriber->getQuestions();
    // $this->redirect('user/mypage');
  }
public function executeMypage()
{
   $this->subscriber = UserPeer::retrieveByPk($this->getRequestParameter('id', $this->getUser()->getSubscriberId()));
   $this->forward404Unless($this->subscriber);
}
public function executeMypageshow()
{
  $this->user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
  $this->forward404Unless($this->user);
}

}
