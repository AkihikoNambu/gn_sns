<?php


abstract class BasePost extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $user_id;


	
	protected $title;


	
	protected $image;


	
	protected $body;


	
	protected $category;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $aUser;

	
	protected $collPostComments;

	
	protected $lastPostCommentCriteria = null;

	
	protected $collPostLikes;

	
	protected $lastPostLikeCriteria = null;

	
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

	
	public function getCategory()
	{

		return $this->category;
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
			$this->modifiedColumns[] = PostPeer::USER_ID;
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
			$this->modifiedColumns[] = PostPeer::TITLE;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = PostPeer::IMAGE;
		}

	} 
	
	public function setBody($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->body !== $v) {
			$this->body = $v;
			$this->modifiedColumns[] = PostPeer::BODY;
		}

	} 
	
	public function setCategory($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->category !== $v) {
			$this->category = $v;
			$this->modifiedColumns[] = PostPeer::CATEGORY;
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
			$this->modifiedColumns[] = PostPeer::CREATED_AT;
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
			$this->modifiedColumns[] = PostPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PostPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->user_id = $rs->getInt($startcol + 0);

			$this->title = $rs->getString($startcol + 1);

			$this->image = $rs->getString($startcol + 2);

			$this->body = $rs->getString($startcol + 3);

			$this->category = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->id = $rs->getInt($startcol + 7);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Post object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PostPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(PostPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(PostPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME);
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
					$pk = PostPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PostPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collPostComments !== null) {
				foreach($this->collPostComments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPostLikes !== null) {
				foreach($this->collPostLikes as $referrerFK) {
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


			if (($retval = PostPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPostComments !== null) {
					foreach($this->collPostComments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPostLikes !== null) {
					foreach($this->collPostLikes as $referrerFK) {
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
		$pos = PostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCategory();
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
		$keys = PostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getImage(),
			$keys[3] => $this->getBody(),
			$keys[4] => $this->getCategory(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
			$keys[7] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCategory($value);
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
		$keys = PostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBody($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCategory($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setId($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PostPeer::DATABASE_NAME);

		if ($this->isColumnModified(PostPeer::USER_ID)) $criteria->add(PostPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PostPeer::TITLE)) $criteria->add(PostPeer::TITLE, $this->title);
		if ($this->isColumnModified(PostPeer::IMAGE)) $criteria->add(PostPeer::IMAGE, $this->image);
		if ($this->isColumnModified(PostPeer::BODY)) $criteria->add(PostPeer::BODY, $this->body);
		if ($this->isColumnModified(PostPeer::CATEGORY)) $criteria->add(PostPeer::CATEGORY, $this->category);
		if ($this->isColumnModified(PostPeer::CREATED_AT)) $criteria->add(PostPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(PostPeer::UPDATED_AT)) $criteria->add(PostPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(PostPeer::ID)) $criteria->add(PostPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PostPeer::DATABASE_NAME);

		$criteria->add(PostPeer::ID, $this->id);

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

		$copyObj->setCategory($this->category);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getPostComments() as $relObj) {
				$copyObj->addPostComment($relObj->copy($deepCopy));
			}

			foreach($this->getPostLikes() as $relObj) {
				$copyObj->addPostLike($relObj->copy($deepCopy));
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
			self::$peer = new PostPeer();
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

	
	public function initPostComments()
	{
		if ($this->collPostComments === null) {
			$this->collPostComments = array();
		}
	}

	
	public function getPostComments($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePostCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPostComments === null) {
			if ($this->isNew()) {
			   $this->collPostComments = array();
			} else {

				$criteria->add(PostCommentPeer::POST_ID, $this->getId());

				PostCommentPeer::addSelectColumns($criteria);
				$this->collPostComments = PostCommentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PostCommentPeer::POST_ID, $this->getId());

				PostCommentPeer::addSelectColumns($criteria);
				if (!isset($this->lastPostCommentCriteria) || !$this->lastPostCommentCriteria->equals($criteria)) {
					$this->collPostComments = PostCommentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPostCommentCriteria = $criteria;
		return $this->collPostComments;
	}

	
	public function countPostComments($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePostCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PostCommentPeer::POST_ID, $this->getId());

		return PostCommentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPostComment(PostComment $l)
	{
		$this->collPostComments[] = $l;
		$l->setPost($this);
	}


	
	public function getPostCommentsJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePostCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPostComments === null) {
			if ($this->isNew()) {
				$this->collPostComments = array();
			} else {

				$criteria->add(PostCommentPeer::POST_ID, $this->getId());

				$this->collPostComments = PostCommentPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(PostCommentPeer::POST_ID, $this->getId());

			if (!isset($this->lastPostCommentCriteria) || !$this->lastPostCommentCriteria->equals($criteria)) {
				$this->collPostComments = PostCommentPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastPostCommentCriteria = $criteria;

		return $this->collPostComments;
	}

	
	public function initPostLikes()
	{
		if ($this->collPostLikes === null) {
			$this->collPostLikes = array();
		}
	}

	
	public function getPostLikes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePostLikePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPostLikes === null) {
			if ($this->isNew()) {
			   $this->collPostLikes = array();
			} else {

				$criteria->add(PostLikePeer::POST_ID, $this->getId());

				PostLikePeer::addSelectColumns($criteria);
				$this->collPostLikes = PostLikePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PostLikePeer::POST_ID, $this->getId());

				PostLikePeer::addSelectColumns($criteria);
				if (!isset($this->lastPostLikeCriteria) || !$this->lastPostLikeCriteria->equals($criteria)) {
					$this->collPostLikes = PostLikePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPostLikeCriteria = $criteria;
		return $this->collPostLikes;
	}

	
	public function countPostLikes($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePostLikePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PostLikePeer::POST_ID, $this->getId());

		return PostLikePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPostLike(PostLike $l)
	{
		$this->collPostLikes[] = $l;
		$l->setPost($this);
	}


	
	public function getPostLikesJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePostLikePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPostLikes === null) {
			if ($this->isNew()) {
				$this->collPostLikes = array();
			} else {

				$criteria->add(PostLikePeer::POST_ID, $this->getId());

				$this->collPostLikes = PostLikePeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(PostLikePeer::POST_ID, $this->getId());

			if (!isset($this->lastPostLikeCriteria) || !$this->lastPostLikeCriteria->equals($criteria)) {
				$this->collPostLikes = PostLikePeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastPostLikeCriteria = $criteria;

		return $this->collPostLikes;
	}

} 