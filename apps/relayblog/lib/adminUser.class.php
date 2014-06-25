<?php

class adminUser extends sfBasicSecurityUser
{
	public function adsignIn($user)
	{
	  $this->setAttribute('adminirator_id', $user->getId(), 'adminirator');
	  $this->setAuthenticated(true);
	 
	  $this->addCredential('adminirator');
	  $this->setAttribute('user_name', $user->getUserName(), 'adminirator');
	}
	 
	public function adsignOut()
	{
	  $this->getAttributeHolder()->removeNamespace('adminirator');
	 
	  $this->setAuthenticated(false);
	  $this->clearCredentials();
	}

	public function getAdminiratorId()
	{
	  return $this->getAttribute('adminirator_id', '', 'adminirator');
	}
	 
	public function getAdminirator()
	{
	  return UserPeer::retrieveByPk($this->getAdminiratorId());
	}
	 
	public function getadUserName()
	{
	  return $this->getAttribute('user_name', '', 'adminirator');
	}
}