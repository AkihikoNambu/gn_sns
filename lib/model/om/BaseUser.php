<?php


abstract class BaseUser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $user_name;


	
	protected $first_name;


	
	protected $middle_name;


	
	protected $last_name;


	
	protected $image;


	
	protected $user_type;


	
	protected $occupation;


	
	protected $nationality;


	
	protected $partcipation_year;


	
	protected $place_of_residence;


	
	protected $email;


	
	protected $facebook_url;


	
	protected $self_introduction;


	
	protected $sha1_password;


	
	protected $salt;


	
	protected $certification;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $collBlogs;

	
	protected $lastBlogCriteria = null;

	
	protected $collBlogComments;

	
	protected $lastBlogCommentCriteria = null;

	
	protected $collFriends;

	
	protected $lastFriendCriteria = null;

	
	protected $collFriendComments;

	
	protected $lastFriendCommentCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getUserName()
	{

		return $this->user_name;
	}

	
	public function getFirstName()
	{

		return $this->first_name;
	}

	
	public function getMiddleName()
	{

		return $this->middle_name;
	}

	
	public function getLastName()
	{

		return $this->last_name;
	}

	
	public function getImage()
	{

		return $this->image;
	}

	
	public function getUserType()
	{

		return $this->user_type;
	}

	
	public function getOccupation()
	{

		return $this->occupation;
	}

	
	public function getNationality()
	{

		return $this->nationality;
	}

	
	public function getPartcipationYear()
	{

		return $this->partcipation_year;
	}

	
	public function getPlaceOfResidence()
	{

		return $this->place_of_residence;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getFacebookUrl()
	{

		return $this->facebook_url;
	}

	
	public function getSelfIntroduction()
	{

		return $this->self_introduction;
	}

	
	public function getSha1Password()
	{

		return $this->sha1_password;
	}

	
	public function getSalt()
	{

		return $this->salt;
	}

	
	public function getCertification()
	{

		return $this->certification;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setUserName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v) {
			$this->user_name = $v;
			$this->modifiedColumns[] = UserPeer::USER_NAME;
		}

	} 
	
	public function setFirstName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->first_name !== $v) {
			$this->first_name = $v;
			$this->modifiedColumns[] = UserPeer::FIRST_NAME;
		}

	} 
	
	public function setMiddleName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->middle_name !== $v) {
			$this->middle_name = $v;
			$this->modifiedColumns[] = UserPeer::MIDDLE_NAME;
		}

	} 
	
	public function setLastName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->last_name !== $v) {
			$this->last_name = $v;
			$this->modifiedColumns[] = UserPeer::LAST_NAME;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = UserPeer::IMAGE;
		}

	} 
	
	public function setUserType($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_type !== $v) {
			$this->user_type = $v;
			$this->modifiedColumns[] = UserPeer::USER_TYPE;
		}

	} 
	
	public function setOccupation($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->occupation !== $v) {
			$this->occupation = $v;
			$this->modifiedColumns[] = UserPeer::OCCUPATION;
		}

	} 
	
	public function setNationality($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nationality !== $v) {
			$this->nationality = $v;
			$this->modifiedColumns[] = UserPeer::NATIONALITY;
		}

	} 
	
	public function setPartcipationYear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partcipation_year !== $v) {
			$this->partcipation_year = $v;
			$this->modifiedColumns[] = UserPeer::PARTCIPATION_YEAR;
		}

	} 
	
	public function setPlaceOfResidence($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->place_of_residence !== $v) {
			$this->place_of_residence = $v;
			$this->modifiedColumns[] = UserPeer::PLACE_OF_RESIDENCE;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
		}

	} 
	
	public function setFacebookUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->facebook_url !== $v) {
			$this->facebook_url = $v;
			$this->modifiedColumns[] = UserPeer::FACEBOOK_URL;
		}

	} 
	
	public function setSelfIntroduction($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->self_introduction !== $v) {
			$this->self_introduction = $v;
			$this->modifiedColumns[] = UserPeer::SELF_INTRODUCTION;
		}

	} 
	
	public function setSha1Password($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sha1_password !== $v) {
			$this->sha1_password = $v;
			$this->modifiedColumns[] = UserPeer::SHA1_PASSWORD;
		}

	} 
	
	public function setSalt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salt !== $v) {
			$this->salt = $v;
			$this->modifiedColumns[] = UserPeer::SALT;
		}

	} 
	
	public function setCertification($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->certification !== $v) {
			$this->certification = $v;
			$this->modifiedColumns[] = UserPeer::CERTIFICATION;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = UserPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = UserPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->user_name = $rs->getString($startcol + 0);

			$this->first_name = $rs->getString($startcol + 1);

			$this->middle_name = $rs->getString($startcol + 2);

			$this->last_name = $rs->getString($startcol + 3);

			$this->image = $rs->getString($startcol + 4);

			$this->user_type = $rs->getString($startcol + 5);

			$this->occupation = $rs->getString($startcol + 6);

			$this->nationality = $rs->getString($startcol + 7);

			$this->partcipation_year = $rs->getInt($startcol + 8);

			$this->place_of_residence = $rs->getString($startcol + 9);

			$this->email = $rs->getString($startcol + 10);

			$this->facebook_url = $rs->getString($startcol + 11);

			$this->self_introduction = $rs->getString($startcol + 12);

			$this->sha1_password = $rs->getString($startcol + 13);

			$this->salt = $rs->getString($startcol + 14);

			$this->certification = $rs->getInt($startcol + 15);

			$this->created_at = $rs->getTimestamp($startcol + 16, null);

			$this->updated_at = $rs->getTimestamp($startcol + 17, null);

			$this->id = $rs->getInt($startcol + 18);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UserPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(UserPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collBlogs !== null) {
				foreach($this->collBlogs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBlogComments !== null) {
				foreach($this->collBlogComments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFriends !== null) {
				foreach($this->collFriends as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFriendComments !== null) {
				foreach($this->collFriendComments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collBlogs !== null) {
					foreach($this->collBlogs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBlogComments !== null) {
					foreach($this->collBlogComments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFriends !== null) {
					foreach($this->collFriends as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFriendComments !== null) {
					foreach($this->collFriendComments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getUserName();
				break;
			case 1:
				return $this->getFirstName();
				break;
			case 2:
				return $this->getMiddleName();
				break;
			case 3:
				return $this->getLastName();
				break;
			case 4:
				return $this->getImage();
				break;
			case 5:
				return $this->getUserType();
				break;
			case 6:
				return $this->getOccupation();
				break;
			case 7:
				return $this->getNationality();
				break;
			case 8:
				return $this->getPartcipationYear();
				break;
			case 9:
				return $this->getPlaceOfResidence();
				break;
			case 10:
				return $this->getEmail();
				break;
			case 11:
				return $this->getFacebookUrl();
				break;
			case 12:
				return $this->getSelfIntroduction();
				break;
			case 13:
				return $this->getSha1Password();
				break;
			case 14:
				return $this->getSalt();
				break;
			case 15:
				return $this->getCertification();
				break;
			case 16:
				return $this->getCreatedAt();
				break;
			case 17:
				return $this->getUpdatedAt();
				break;
			case 18:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserName(),
			$keys[1] => $this->getFirstName(),
			$keys[2] => $this->getMiddleName(),
			$keys[3] => $this->getLastName(),
			$keys[4] => $this->getImage(),
			$keys[5] => $this->getUserType(),
			$keys[6] => $this->getOccupation(),
			$keys[7] => $this->getNationality(),
			$keys[8] => $this->getPartcipationYear(),
			$keys[9] => $this->getPlaceOfResidence(),
			$keys[10] => $this->getEmail(),
			$keys[11] => $this->getFacebookUrl(),
			$keys[12] => $this->getSelfIntroduction(),
			$keys[13] => $this->getSha1Password(),
			$keys[14] => $this->getSalt(),
			$keys[15] => $this->getCertification(),
			$keys[16] => $this->getCreatedAt(),
			$keys[17] => $this->getUpdatedAt(),
			$keys[18] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setUserName($value);
				break;
			case 1:
				$this->setFirstName($value);
				break;
			case 2:
				$this->setMiddleName($value);
				break;
			case 3:
				$this->setLastName($value);
				break;
			case 4:
				$this->setImage($value);
				break;
			case 5:
				$this->setUserType($value);
				break;
			case 6:
				$this->setOccupation($value);
				break;
			case 7:
				$this->setNationality($value);
				break;
			case 8:
				$this->setPartcipationYear($value);
				break;
			case 9:
				$this->setPlaceOfResidence($value);
				break;
			case 10:
				$this->setEmail($value);
				break;
			case 11:
				$this->setFacebookUrl($value);
				break;
			case 12:
				$this->setSelfIntroduction($value);
				break;
			case 13:
				$this->setSha1Password($value);
				break;
			case 14:
				$this->setSalt($value);
				break;
			case 15:
				$this->setCertification($value);
				break;
			case 16:
				$this->setCreatedAt($value);
				break;
			case 17:
				$this->setUpdatedAt($value);
				break;
			case 18:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserName($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFirstName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMiddleName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLastName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setImage($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUserType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOccupation($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNationality($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPartcipationYear($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPlaceOfResidence($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEmail($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFacebookUrl($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSelfIntroduction($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSha1Password($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setSalt($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCertification($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCreatedAt($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUpdatedAt($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setId($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::USER_NAME)) $criteria->add(UserPeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(UserPeer::FIRST_NAME)) $criteria->add(UserPeer::FIRST_NAME, $this->first_name);
		if ($this->isColumnModified(UserPeer::MIDDLE_NAME)) $criteria->add(UserPeer::MIDDLE_NAME, $this->middle_name);
		if ($this->isColumnModified(UserPeer::LAST_NAME)) $criteria->add(UserPeer::LAST_NAME, $this->last_name);
		if ($this->isColumnModified(UserPeer::IMAGE)) $criteria->add(UserPeer::IMAGE, $this->image);
		if ($this->isColumnModified(UserPeer::USER_TYPE)) $criteria->add(UserPeer::USER_TYPE, $this->user_type);
		if ($this->isColumnModified(UserPeer::OCCUPATION)) $criteria->add(UserPeer::OCCUPATION, $this->occupation);
		if ($this->isColumnModified(UserPeer::NATIONALITY)) $criteria->add(UserPeer::NATIONALITY, $this->nationality);
		if ($this->isColumnModified(UserPeer::PARTCIPATION_YEAR)) $criteria->add(UserPeer::PARTCIPATION_YEAR, $this->partcipation_year);
		if ($this->isColumnModified(UserPeer::PLACE_OF_RESIDENCE)) $criteria->add(UserPeer::PLACE_OF_RESIDENCE, $this->place_of_residence);
		if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UserPeer::FACEBOOK_URL)) $criteria->add(UserPeer::FACEBOOK_URL, $this->facebook_url);
		if ($this->isColumnModified(UserPeer::SELF_INTRODUCTION)) $criteria->add(UserPeer::SELF_INTRODUCTION, $this->self_introduction);
		if ($this->isColumnModified(UserPeer::SHA1_PASSWORD)) $criteria->add(UserPeer::SHA1_PASSWORD, $this->sha1_password);
		if ($this->isColumnModified(UserPeer::SALT)) $criteria->add(UserPeer::SALT, $this->salt);
		if ($this->isColumnModified(UserPeer::CERTIFICATION)) $criteria->add(UserPeer::CERTIFICATION, $this->certification);
		if ($this->isColumnModified(UserPeer::CREATED_AT)) $criteria->add(UserPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(UserPeer::UPDATED_AT)) $criteria->add(UserPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUserName($this->user_name);

		$copyObj->setFirstName($this->first_name);

		$copyObj->setMiddleName($this->middle_name);

		$copyObj->setLastName($this->last_name);

		$copyObj->setImage($this->image);

		$copyObj->setUserType($this->user_type);

		$copyObj->setOccupation($this->occupation);

		$copyObj->setNationality($this->nationality);

		$copyObj->setPartcipationYear($this->partcipation_year);

		$copyObj->setPlaceOfResidence($this->place_of_residence);

		$copyObj->setEmail($this->email);

		$copyObj->setFacebookUrl($this->facebook_url);

		$copyObj->setSelfIntroduction($this->self_introduction);

		$copyObj->setSha1Password($this->sha1_password);

		$copyObj->setSalt($this->salt);

		$copyObj->setCertification($this->certification);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getBlogs() as $relObj) {
				$copyObj->addBlog($relObj->copy($deepCopy));
			}

			foreach($this->getBlogComments() as $relObj) {
				$copyObj->addBlogComment($relObj->copy($deepCopy));
			}

			foreach($this->getFriends() as $relObj) {
				$copyObj->addFriend($relObj->copy($deepCopy));
			}

			foreach($this->getFriendComments() as $relObj) {
				$copyObj->addFriendComment($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

	
	public function initBlogs()
	{
		if ($this->collBlogs === null) {
			$this->collBlogs = array();
		}
	}

	
	public function getBlogs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseBlogPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
			   $this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::USER_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				$this->collBlogs = BlogPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogPeer::USER_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
					$this->collBlogs = BlogPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBlogCriteria = $criteria;
		return $this->collBlogs;
	}

	
	public function countBlogs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseBlogPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BlogPeer::USER_ID, $this->getId());

		return BlogPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlog(Blog $l)
	{
		$this->collBlogs[] = $l;
		$l->setUser($this);
	}

	
	public function initBlogComments()
	{
		if ($this->collBlogComments === null) {
			$this->collBlogComments = array();
		}
	}

	
	public function getBlogComments($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseBlogCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogComments === null) {
			if ($this->isNew()) {
			   $this->collBlogComments = array();
			} else {

				$criteria->add(BlogCommentPeer::USER_ID, $this->getId());

				BlogCommentPeer::addSelectColumns($criteria);
				$this->collBlogComments = BlogCommentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogCommentPeer::USER_ID, $this->getId());

				BlogCommentPeer::addSelectColumns($criteria);
				if (!isset($this->lastBlogCommentCriteria) || !$this->lastBlogCommentCriteria->equals($criteria)) {
					$this->collBlogComments = BlogCommentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBlogCommentCriteria = $criteria;
		return $this->collBlogComments;
	}

	
	public function countBlogComments($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseBlogCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BlogCommentPeer::USER_ID, $this->getId());

		return BlogCommentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlogComment(BlogComment $l)
	{
		$this->collBlogComments[] = $l;
		$l->setUser($this);
	}


	
	public function getBlogCommentsJoinBlog($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseBlogCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogComments === null) {
			if ($this->isNew()) {
				$this->collBlogComments = array();
			} else {

				$criteria->add(BlogCommentPeer::USER_ID, $this->getId());

				$this->collBlogComments = BlogCommentPeer::doSelectJoinBlog($criteria, $con);
			}
		} else {
									
			$criteria->add(BlogCommentPeer::USER_ID, $this->getId());

			if (!isset($this->lastBlogCommentCriteria) || !$this->lastBlogCommentCriteria->equals($criteria)) {
				$this->collBlogComments = BlogCommentPeer::doSelectJoinBlog($criteria, $con);
			}
		}
		$this->lastBlogCommentCriteria = $criteria;

		return $this->collBlogComments;
	}

	
	public function initFriends()
	{
		if ($this->collFriends === null) {
			$this->collFriends = array();
		}
	}

	
	public function getFriends($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFriends === null) {
			if ($this->isNew()) {
			   $this->collFriends = array();
			} else {

				$criteria->add(FriendPeer::USER_ID, $this->getId());

				FriendPeer::addSelectColumns($criteria);
				$this->collFriends = FriendPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FriendPeer::USER_ID, $this->getId());

				FriendPeer::addSelectColumns($criteria);
				if (!isset($this->lastFriendCriteria) || !$this->lastFriendCriteria->equals($criteria)) {
					$this->collFriends = FriendPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFriendCriteria = $criteria;
		return $this->collFriends;
	}

	
	public function countFriends($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FriendPeer::USER_ID, $this->getId());

		return FriendPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFriend(Friend $l)
	{
		$this->collFriends[] = $l;
		$l->setUser($this);
	}

	
	public function initFriendComments()
	{
		if ($this->collFriendComments === null) {
			$this->collFriendComments = array();
		}
	}

	
	public function getFriendComments($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFriendCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFriendComments === null) {
			if ($this->isNew()) {
			   $this->collFriendComments = array();
			} else {

				$criteria->add(FriendCommentPeer::USER_ID, $this->getId());

				FriendCommentPeer::addSelectColumns($criteria);
				$this->collFriendComments = FriendCommentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FriendCommentPeer::USER_ID, $this->getId());

				FriendCommentPeer::addSelectColumns($criteria);
				if (!isset($this->lastFriendCommentCriteria) || !$this->lastFriendCommentCriteria->equals($criteria)) {
					$this->collFriendComments = FriendCommentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFriendCommentCriteria = $criteria;
		return $this->collFriendComments;
	}

	
	public function countFriendComments($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFriendCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FriendCommentPeer::USER_ID, $this->getId());

		return FriendCommentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFriendComment(FriendComment $l)
	{
		$this->collFriendComments[] = $l;
		$l->setUser($this);
	}


	
	public function getFriendCommentsJoinFriend($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFriendCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFriendComments === null) {
			if ($this->isNew()) {
				$this->collFriendComments = array();
			} else {

				$criteria->add(FriendCommentPeer::USER_ID, $this->getId());

				$this->collFriendComments = FriendCommentPeer::doSelectJoinFriend($criteria, $con);
			}
		} else {
									
			$criteria->add(FriendCommentPeer::USER_ID, $this->getId());

			if (!isset($this->lastFriendCommentCriteria) || !$this->lastFriendCommentCriteria->equals($criteria)) {
				$this->collFriendComments = FriendCommentPeer::doSelectJoinFriend($criteria, $con);
			}
		}
		$this->lastFriendCommentCriteria = $criteria;

		return $this->collFriendComments;
	}

} 