<?php


abstract class BaseApplicant extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $app_user_name;


	
	protected $app_first_name;


	
	protected $app_middle_name;


	
	protected $app_last_name;


	
	protected $app_email;


	
	protected $app_facebook_url;


	
	protected $app_participation_year;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getAppUserName()
	{

		return $this->app_user_name;
	}

	
	public function getAppFirstName()
	{

		return $this->app_first_name;
	}

	
	public function getAppMiddleName()
	{

		return $this->app_middle_name;
	}

	
	public function getAppLastName()
	{

		return $this->app_last_name;
	}

	
	public function getAppEmail()
	{

		return $this->app_email;
	}

	
	public function getAppFacebookUrl()
	{

		return $this->app_facebook_url;
	}

	
	public function getAppParticipationYear()
	{

		return $this->app_participation_year;
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

	
	public function setAppUserName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_user_name !== $v) {
			$this->app_user_name = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_USER_NAME;
		}

	} 
	
	public function setAppFirstName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_first_name !== $v) {
			$this->app_first_name = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_FIRST_NAME;
		}

	} 
	
	public function setAppMiddleName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_middle_name !== $v) {
			$this->app_middle_name = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_MIDDLE_NAME;
		}

	} 
	
	public function setAppLastName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_last_name !== $v) {
			$this->app_last_name = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_LAST_NAME;
		}

	} 
	
	public function setAppEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_email !== $v) {
			$this->app_email = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_EMAIL;
		}

	} 
	
	public function setAppFacebookUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->app_facebook_url !== $v) {
			$this->app_facebook_url = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_FACEBOOK_URL;
		}

	} 
	
	public function setAppParticipationYear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->app_participation_year !== $v) {
			$this->app_participation_year = $v;
			$this->modifiedColumns[] = ApplicantPeer::APP_PARTICIPATION_YEAR;
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
			$this->modifiedColumns[] = ApplicantPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ApplicantPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ApplicantPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->app_user_name = $rs->getString($startcol + 0);

			$this->app_first_name = $rs->getString($startcol + 1);

			$this->app_middle_name = $rs->getString($startcol + 2);

			$this->app_last_name = $rs->getString($startcol + 3);

			$this->app_email = $rs->getString($startcol + 4);

			$this->app_facebook_url = $rs->getString($startcol + 5);

			$this->app_participation_year = $rs->getInt($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->updated_at = $rs->getTimestamp($startcol + 8, null);

			$this->id = $rs->getInt($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Applicant object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ApplicantPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ApplicantPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ApplicantPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ApplicantPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ApplicantPeer::DATABASE_NAME);
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
					$pk = ApplicantPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ApplicantPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


			if (($retval = ApplicantPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ApplicantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getAppUserName();
				break;
			case 1:
				return $this->getAppFirstName();
				break;
			case 2:
				return $this->getAppMiddleName();
				break;
			case 3:
				return $this->getAppLastName();
				break;
			case 4:
				return $this->getAppEmail();
				break;
			case 5:
				return $this->getAppFacebookUrl();
				break;
			case 6:
				return $this->getAppParticipationYear();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			case 8:
				return $this->getUpdatedAt();
				break;
			case 9:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ApplicantPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppUserName(),
			$keys[1] => $this->getAppFirstName(),
			$keys[2] => $this->getAppMiddleName(),
			$keys[3] => $this->getAppLastName(),
			$keys[4] => $this->getAppEmail(),
			$keys[5] => $this->getAppFacebookUrl(),
			$keys[6] => $this->getAppParticipationYear(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getUpdatedAt(),
			$keys[9] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ApplicantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setAppUserName($value);
				break;
			case 1:
				$this->setAppFirstName($value);
				break;
			case 2:
				$this->setAppMiddleName($value);
				break;
			case 3:
				$this->setAppLastName($value);
				break;
			case 4:
				$this->setAppEmail($value);
				break;
			case 5:
				$this->setAppFacebookUrl($value);
				break;
			case 6:
				$this->setAppParticipationYear($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
			case 8:
				$this->setUpdatedAt($value);
				break;
			case 9:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ApplicantPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppUserName($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAppFirstName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppMiddleName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAppLastName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAppEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAppFacebookUrl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAppParticipationYear($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setId($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ApplicantPeer::DATABASE_NAME);

		if ($this->isColumnModified(ApplicantPeer::APP_USER_NAME)) $criteria->add(ApplicantPeer::APP_USER_NAME, $this->app_user_name);
		if ($this->isColumnModified(ApplicantPeer::APP_FIRST_NAME)) $criteria->add(ApplicantPeer::APP_FIRST_NAME, $this->app_first_name);
		if ($this->isColumnModified(ApplicantPeer::APP_MIDDLE_NAME)) $criteria->add(ApplicantPeer::APP_MIDDLE_NAME, $this->app_middle_name);
		if ($this->isColumnModified(ApplicantPeer::APP_LAST_NAME)) $criteria->add(ApplicantPeer::APP_LAST_NAME, $this->app_last_name);
		if ($this->isColumnModified(ApplicantPeer::APP_EMAIL)) $criteria->add(ApplicantPeer::APP_EMAIL, $this->app_email);
		if ($this->isColumnModified(ApplicantPeer::APP_FACEBOOK_URL)) $criteria->add(ApplicantPeer::APP_FACEBOOK_URL, $this->app_facebook_url);
		if ($this->isColumnModified(ApplicantPeer::APP_PARTICIPATION_YEAR)) $criteria->add(ApplicantPeer::APP_PARTICIPATION_YEAR, $this->app_participation_year);
		if ($this->isColumnModified(ApplicantPeer::CREATED_AT)) $criteria->add(ApplicantPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ApplicantPeer::UPDATED_AT)) $criteria->add(ApplicantPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(ApplicantPeer::ID)) $criteria->add(ApplicantPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ApplicantPeer::DATABASE_NAME);

		$criteria->add(ApplicantPeer::ID, $this->id);

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

		$copyObj->setAppUserName($this->app_user_name);

		$copyObj->setAppFirstName($this->app_first_name);

		$copyObj->setAppMiddleName($this->app_middle_name);

		$copyObj->setAppLastName($this->app_last_name);

		$copyObj->setAppEmail($this->app_email);

		$copyObj->setAppFacebookUrl($this->app_facebook_url);

		$copyObj->setAppParticipationYear($this->app_participation_year);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new ApplicantPeer();
		}
		return self::$peer;
	}

} 