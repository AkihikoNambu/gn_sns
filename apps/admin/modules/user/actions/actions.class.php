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
  public function executeApplicantlist()
  {
  	$c_applicant = new Criteria();
  	//Certificationが0のもの
  	$c_applicant->add(UserPeer::CERTIFICATION, '0');
    //applicantのレコードをidの昇順で取ってくる
    $c_applicant->addAscendingOrderByColumn(UserPeer::ID);
    //blog_commentsとしてテンプレートに渡す
    $this->applicants = UserPeer::doSelect($c_applicant);
  }
  public function executeApprove()
  {
  	$user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($user);
    $user->setCertification($this->getRequestParameter('certification'));

    $user->save();

    return $this->redirect('user/applicantlist');
  }
  public function executeUserlist()
  {
  	$c_user = new Criteria();
  	//Certificationが0のもの
  	$c_user->add(UserPeer::CERTIFICATION, '1');
    //applicantのレコードをidの昇順で取ってくる
    $c_user->addDescendingOrderByColumn(UserPeer::ID);
    //blog_commentsとしてテンプレートに渡す
    $this->users = UserPeer::doSelect($c_user);
  }
}
