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
      $user->setPassword($this->getRequestParameter('password'));
      // Certificationを初期値として0に設定する
      $user->setCertification($this->getRequestParameter('certification'));
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
public function executeShow()
  {
    $this->subscriber = UserPeer::retrieveByPk($this->getRequestParameter('id', $this->getUser()->getSubscriberId()));
    $this->forward404Unless($this->subscriber);
    // $this->username = $this->subscriber->getUserName();
    // $this->password = $this->subscriber->getSha1Password();
    // $this->firstname = $this->subscriber->getFirstName();
    // $this->lastname = $this->subscriber->getLastName();

    // $this->blog = $this->subscriber->getInterestsJoinQuestion();
    // $this->answers   = $this->subscriber->getAnswersJoinQuestion();
    // $this->questions = $this->subscriber->getQuestions();
  }

}
