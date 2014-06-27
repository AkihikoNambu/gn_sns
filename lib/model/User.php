<?php

/**
 * Subclass for representing a row from the 'userdata' table.
 *
 * 
 *
 * @package lib.model
 */ 
class User extends BaseUser
{
	public function __toString()
	{
		return $this->getFirstName().' '.$this->getLastName();
	}
	public function setPassword($password)
	{
	  $salt = md5(rand(100000, 999999).$this->getUsername().$this->getEmail());
	  $this->setSalt($salt);
	  $this->setSha1Password(sha1($salt.$password));
	}
}