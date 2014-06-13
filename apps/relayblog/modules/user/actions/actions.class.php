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
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }
  public function executeLogin()
{
  if ($this->getRequest()->getMethod() != sfRequest::POST)
  {
    // フォームを表示する
    $this->getRequest()->setAttribute('referer', $this->getRequest()->getReferer());
  }
  else
  {
    // フォーム投稿を処理する
    $nickname = $this->getRequestParameter('nickname');
 
    $c = new Criteria();
    $c->add(UserPeer::NICKNAME, $nickname);
    $user = UserPeer::doSelectOne($c);
 
    // nicknameが存在するか？
    if ($user)
    {
      // passwordがOKか?
      if (true)
      {
        $this->getUser()->setAuthenticated(true);
        $this->getUser()->addCredential('subscriber');
 
        $this->getUser()->setAttribute('subscriber_id', $user->getId(), 'subscriber');
        $this->getUser()->setAttribute('nickname', $user->getNickname(), 'subscriber');
 
        // 最後のページにリダイレクトする
        return $this->redirect($this->getRequestParameter('referer','@homepage'));
      }
    }
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

public function executeShow()
  {
    $this->subscriber = UserPeer::retrieveByPk($this->getRequestParameter('id', $this->getUser()->getSubscriberId()));
    $this->forward404Unless($this->subscriber);
   
    $this->interests = $this->subscriber->getInterestsJoinQuestion();
    $this->answers   = $this->subscriber->getAnswersJoinQuestion();
    $this->questions = $this->subscriber->getQuestions();
  }

}
