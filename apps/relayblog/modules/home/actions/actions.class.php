<?php


/**
 * home actions.
 *
 * @package    gn_sns
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    // $this->forward('default', 'module');

   //ブログの最新記事を取得
    $c_latesfriend = new Criteria();
    $c_latesfriend->addDescendingOrderByColumn(FriendPeer::ID);
    $c_latesfriend->setLimit(3);
    $this->lates_friends = FriendPeer::doSelect($c_latesfriend);

   //ブログの最新記事を取得
    $c_latesblog = new Criteria();
    $c_latesblog->addDescendingOrderByColumn(BlogPeer::ID);
    $c_latesblog->setLimit(3);
    $this->lates_blogs = BlogPeer::doSelect($c_latesblog);
  }

}


