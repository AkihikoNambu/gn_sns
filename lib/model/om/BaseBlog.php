<?php


abstract class BaseBlog extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $user_id;


	
	protected $title;


	
	protected $image;


	
	protected $body;


	
	protected $parent_id;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $aUser;

	
	protected $collBlogComments;

	
	protected $lastBlogCommentCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getTitle()
	{

		return $this->title;
	}

	
	public function getImage()
	{

		return $this->image;
	}

	
	public function getBody()
	{

		return $this->body;
	}

	
	public function getParentId()
	{

		return $this->parent_id;
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

	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = BlogPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = BlogPeer::TITLE;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = BlogPeer::IMAGE;
		}

	} 
	
	public function setBody($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->body !== $v) {
			$this->body = $v;
			$this->modifiedColumns[] = BlogPeer::BODY;
		}

	} 
	
	public function setParentId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = BlogPeer::PARENT_ID;
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
			$this->modifiedColumns[] = BlogPeer::CREATED_AT;
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
			$this->modifiedColumns[] = BlogPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = BlogPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->user_id = $rs->getInt($startcol + 0);

			$this->title = $rs->getString($startcol + 1);

			$this->image = $rs->getString($startcol + 2);

			$this->body = $rs->getString($startcol + 3);

			$this->parent_id = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->id = $rs->getInt($startcol + 7);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Blog object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BlogPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BlogPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(BlogPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(BlogPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BlogPeer::DATABASE_NAME);
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


												
			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = BlogPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BlogPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collBlogComments !== null) {
				foreach($this->collBlogComments as $referrerFK) {
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


												
			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = BlogPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collBlogComments !== null) {
					foreach($this->collBlogComments as $referrerFK) {
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
		$pos = BlogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getUserId();
				break;
			case 1:
				return $this->getTitle();
				break;
			case 2:
				return $this->getImage();
				break;
			case 3:
				return $this->getBody();
				break;
			case 4:
				return $this->getParentId();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getUpdatedAt();
				break;
			case 7:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getImage(),
			$keys[3] => $this->getBody(),
			$keys[4] => $this->getParentId(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
			$keys[7] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BlogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setUserId($value);
				break;
			case 1:
				$this->setTitle($value);
				break;
			case 2:
				$this->setImage($value);
				break;
			case 3:
				$this->setBody($value);
				break;
			case 4:
				$this->setParentId($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
			case 7:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBody($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setParentId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setId($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BlogPeer::DATABASE_NAME);

		if ($this->isColumnModified(BlogPeer::USER_ID)) $criteria->add(BlogPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(BlogPeer::TITLE)) $criteria->add(BlogPeer::TITLE, $this->title);
		if ($this->isColumnModified(BlogPeer::IMAGE)) $criteria->add(BlogPeer::IMAGE, $this->image);
		if ($this->isColumnModified(BlogPeer::BODY)) $criteria->add(BlogPeer::BODY, $this->body);
		if ($this->isColumnModified(BlogPeer::PARENT_ID)) $criteria->add(BlogPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(BlogPeer::CREATED_AT)) $criteria->add(BlogPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(BlogPeer::UPDATED_AT)) $criteria->add(BlogPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(BlogPeer::ID)) $criteria->add(BlogPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BlogPeer::DATABASE_NAME);

		$criteria->add(BlogPeer::ID, $this->id);

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

		$copyObj->setUserId($this->user_id);

		$copyObj->setTitle($this->title);

		$copyObj->setImage($this->image);

		$copyObj->setBody($this->body);

		$copyObj->setParentId($this->parent_id);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getBlogComments() as $relObj) {
				$copyObj->addBlogComment($relObj->copy($deepCopy));
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
			self::$peer = new BlogPeer();
		}
		return self::$peer;
	}

	
	public function setUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}


		$this->aUser = $v;
	}


	
	public function getUser($con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUser = UserPeer::retrieveByPK($this->user_id, $con);

			
		}
		return $this->aUser;
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

				$criteria->add(BlogCommentPeer::BLOG_ID, $this->getId());

				BlogCommentPeer::addSelectColumns($criteria);
				$this->collBlogComments = BlogCommentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogCommentPeer::BLOG_ID, $this->getId());

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

		$criteria->add(BlogCommentPeer::BLOG_ID, $this->getId());

		return BlogCommentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlogComment(BlogComment $l)
	{
		$this->collBlogComments[] = $l;
		$l->setBlog($this);
	}


	
	public function getBlogCommentsJoinUser($criteria = null, $con = null)
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

				$criteria->add(BlogCommentPeer::BLOG_ID, $this->getId());

				$this->collBlogComments = BlogCommentPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(BlogCommentPeer::BLOG_ID, $this->getId());

			if (!isset($this->lastBlogCommentCriteria) || !$this->lastBlogCommentCriteria->equals($criteria)) {
				$this->collBlogComments = BlogCommentPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastBlogCommentCriteria = $criteria;

		return $this->collBlogComments;
	}

} 