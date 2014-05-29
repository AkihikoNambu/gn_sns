<?php


abstract class BaseReport extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $image;


	
	protected $year;


	
	protected $host_country;


	
	protected $body;


	
	protected $reportfile;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getImage()
	{

		return $this->image;
	}

	
	public function getYear()
	{

		return $this->year;
	}

	
	public function getHostCountry()
	{

		return $this->host_country;
	}

	
	public function getBody()
	{

		return $this->body;
	}

	
	public function getReportfile()
	{

		return $this->reportfile;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = ReportPeer::IMAGE;
		}

	} 
	
	public function setYear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v) {
			$this->year = $v;
			$this->modifiedColumns[] = ReportPeer::YEAR;
		}

	} 
	
	public function setHostCountry($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->host_country !== $v) {
			$this->host_country = $v;
			$this->modifiedColumns[] = ReportPeer::HOST_COUNTRY;
		}

	} 
	
	public function setBody($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->body !== $v) {
			$this->body = $v;
			$this->modifiedColumns[] = ReportPeer::BODY;
		}

	} 
	
	public function setReportfile($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reportfile !== $v) {
			$this->reportfile = $v;
			$this->modifiedColumns[] = ReportPeer::REPORTFILE;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ReportPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->image = $rs->getString($startcol + 0);

			$this->year = $rs->getInt($startcol + 1);

			$this->host_country = $rs->getString($startcol + 2);

			$this->body = $rs->getString($startcol + 3);

			$this->reportfile = $rs->getString($startcol + 4);

			$this->id = $rs->getInt($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Report object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ReportPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ReportPeer::DATABASE_NAME);
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
					$pk = ReportPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ReportPeer::doUpdate($this, $con);
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


			if (($retval = ReportPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getImage();
				break;
			case 1:
				return $this->getYear();
				break;
			case 2:
				return $this->getHostCountry();
				break;
			case 3:
				return $this->getBody();
				break;
			case 4:
				return $this->getReportfile();
				break;
			case 5:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ReportPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getImage(),
			$keys[1] => $this->getYear(),
			$keys[2] => $this->getHostCountry(),
			$keys[3] => $this->getBody(),
			$keys[4] => $this->getReportfile(),
			$keys[5] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setImage($value);
				break;
			case 1:
				$this->setYear($value);
				break;
			case 2:
				$this->setHostCountry($value);
				break;
			case 3:
				$this->setBody($value);
				break;
			case 4:
				$this->setReportfile($value);
				break;
			case 5:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ReportPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setImage($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setYear($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHostCountry($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBody($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setReportfile($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setId($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ReportPeer::DATABASE_NAME);

		if ($this->isColumnModified(ReportPeer::IMAGE)) $criteria->add(ReportPeer::IMAGE, $this->image);
		if ($this->isColumnModified(ReportPeer::YEAR)) $criteria->add(ReportPeer::YEAR, $this->year);
		if ($this->isColumnModified(ReportPeer::HOST_COUNTRY)) $criteria->add(ReportPeer::HOST_COUNTRY, $this->host_country);
		if ($this->isColumnModified(ReportPeer::BODY)) $criteria->add(ReportPeer::BODY, $this->body);
		if ($this->isColumnModified(ReportPeer::REPORTFILE)) $criteria->add(ReportPeer::REPORTFILE, $this->reportfile);
		if ($this->isColumnModified(ReportPeer::ID)) $criteria->add(ReportPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ReportPeer::DATABASE_NAME);

		$criteria->add(ReportPeer::ID, $this->id);

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

		$copyObj->setImage($this->image);

		$copyObj->setYear($this->year);

		$copyObj->setHostCountry($this->host_country);

		$copyObj->setBody($this->body);

		$copyObj->setReportfile($this->reportfile);


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
			self::$peer = new ReportPeer();
		}
		return self::$peer;
	}

} 