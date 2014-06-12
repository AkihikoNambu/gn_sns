<?php


abstract class BaseUserPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'user';

	
	const CLASS_DEFAULT = 'lib.model.User';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const USER_NAME = 'user.USER_NAME';

	
	const FIRST_NAME = 'user.FIRST_NAME';

	
	const MIDDLE_NAME = 'user.MIDDLE_NAME';

	
	const LAST_NAME = 'user.LAST_NAME';

	
	const IMAGE = 'user.IMAGE';

	
	const USER_TYPE = 'user.USER_TYPE';

	
	const OCCUPATION = 'user.OCCUPATION';

	
	const NATIONALITY = 'user.NATIONALITY';

	
	const PLACE_OF_RESIDENCE = 'user.PLACE_OF_RESIDENCE';

	
	const EMAIL = 'user.EMAIL';

	
	const FACEBOOK_URL = 'user.FACEBOOK_URL';

	
	const SELF_INTRODUCTION = 'user.SELF_INTRODUCTION';

	
	const SHA1_PASSWORD = 'user.SHA1_PASSWORD';

	
	const SALT = 'user.SALT';

	
	const CREATED_AT = 'user.CREATED_AT';

	
	const UPDATED_AT = 'user.UPDATED_AT';

	
	const ID = 'user.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('UserName', 'FirstName', 'MiddleName', 'LastName', 'Image', 'UserType', 'Occupation', 'Nationality', 'PlaceOfResidence', 'Email', 'FacebookUrl', 'SelfIntroduction', 'Sha1Password', 'Salt', 'CreatedAt', 'UpdatedAt', 'Id', ),
		BasePeer::TYPE_COLNAME => array (UserPeer::USER_NAME, UserPeer::FIRST_NAME, UserPeer::MIDDLE_NAME, UserPeer::LAST_NAME, UserPeer::IMAGE, UserPeer::USER_TYPE, UserPeer::OCCUPATION, UserPeer::NATIONALITY, UserPeer::PLACE_OF_RESIDENCE, UserPeer::EMAIL, UserPeer::FACEBOOK_URL, UserPeer::SELF_INTRODUCTION, UserPeer::SHA1_PASSWORD, UserPeer::SALT, UserPeer::CREATED_AT, UserPeer::UPDATED_AT, UserPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('user_name', 'first_name', 'middle_name', 'last_name', 'image', 'user_type', 'occupation', 'nationality', 'place_of_residence', 'email', 'facebook_url', 'self_introduction', 'sha1_password', 'salt', 'created_at', 'updated_at', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('UserName' => 0, 'FirstName' => 1, 'MiddleName' => 2, 'LastName' => 3, 'Image' => 4, 'UserType' => 5, 'Occupation' => 6, 'Nationality' => 7, 'PlaceOfResidence' => 8, 'Email' => 9, 'FacebookUrl' => 10, 'SelfIntroduction' => 11, 'Sha1Password' => 12, 'Salt' => 13, 'CreatedAt' => 14, 'UpdatedAt' => 15, 'Id' => 16, ),
		BasePeer::TYPE_COLNAME => array (UserPeer::USER_NAME => 0, UserPeer::FIRST_NAME => 1, UserPeer::MIDDLE_NAME => 2, UserPeer::LAST_NAME => 3, UserPeer::IMAGE => 4, UserPeer::USER_TYPE => 5, UserPeer::OCCUPATION => 6, UserPeer::NATIONALITY => 7, UserPeer::PLACE_OF_RESIDENCE => 8, UserPeer::EMAIL => 9, UserPeer::FACEBOOK_URL => 10, UserPeer::SELF_INTRODUCTION => 11, UserPeer::SHA1_PASSWORD => 12, UserPeer::SALT => 13, UserPeer::CREATED_AT => 14, UserPeer::UPDATED_AT => 15, UserPeer::ID => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('user_name' => 0, 'first_name' => 1, 'middle_name' => 2, 'last_name' => 3, 'image' => 4, 'user_type' => 5, 'occupation' => 6, 'nationality' => 7, 'place_of_residence' => 8, 'email' => 9, 'facebook_url' => 10, 'self_introduction' => 11, 'sha1_password' => 12, 'salt' => 13, 'created_at' => 14, 'updated_at' => 15, 'id' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/UserMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.UserMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UserPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(UserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UserPeer::USER_NAME);

		$criteria->addSelectColumn(UserPeer::FIRST_NAME);

		$criteria->addSelectColumn(UserPeer::MIDDLE_NAME);

		$criteria->addSelectColumn(UserPeer::LAST_NAME);

		$criteria->addSelectColumn(UserPeer::IMAGE);

		$criteria->addSelectColumn(UserPeer::USER_TYPE);

		$criteria->addSelectColumn(UserPeer::OCCUPATION);

		$criteria->addSelectColumn(UserPeer::NATIONALITY);

		$criteria->addSelectColumn(UserPeer::PLACE_OF_RESIDENCE);

		$criteria->addSelectColumn(UserPeer::EMAIL);

		$criteria->addSelectColumn(UserPeer::FACEBOOK_URL);

		$criteria->addSelectColumn(UserPeer::SELF_INTRODUCTION);

		$criteria->addSelectColumn(UserPeer::SHA1_PASSWORD);

		$criteria->addSelectColumn(UserPeer::SALT);

		$criteria->addSelectColumn(UserPeer::CREATED_AT);

		$criteria->addSelectColumn(UserPeer::UPDATED_AT);

		$criteria->addSelectColumn(UserPeer::ID);

	}

	const COUNT = 'COUNT(user.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT user.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UserPeer::populateObjects(UserPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UserPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = UserPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return UserPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(UserPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(UserPeer::ID);
			$selectCriteria->add(UserPeer::ID, $criteria->remove(UserPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(UserPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof User) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UserPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(User $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UserPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(UserPeer::DATABASE_NAME, UserPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = UserPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::ID, $pk);


		$v = UserPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(UserPeer::ID, $pks, Criteria::IN);
			$objs = UserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseUserPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/UserMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.UserMapBuilder');
}
