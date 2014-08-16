<?php

class myUser extends sfBasicSecurityUser
{
	public function signIn($user)
	{
	  $this->setAttribute('subscriber_id', $user->getId(), 'subscriber');
	  $this->setAuthenticated(true);
	 
	  $this->addCredential('subscriber');
	  $this->setAttribute('user_name', $user->getUserName(), 'subscriber');
	}
	 
	public function signOut()
	{
	  $this->getAttributeHolder()->removeNamespace('subscriber');
	 
	  $this->setAuthenticated(false);
	  $this->clearCredentials();
	}
	public function getSubscriberId()
	{
		// 第２引数は第１引数がセットされていないとき
	  return $this->getAttribute('subscriber_id', '', 'subscriber');
	}
	 
	public function getSubscriber()
	{
	  return UserPeer::retrieveByPk($this->getSubscriberId());
	}
	 
	public function getUserName()
	{
	  return $this->getAttribute('user_name', '', 'subscriber');
	}

}
