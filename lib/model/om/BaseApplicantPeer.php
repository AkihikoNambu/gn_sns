<?php


abstract class BaseApplicantPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'applicant';

	
	const CLASS_DEFAULT = 'lib.model.Applicant';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const APP_USER_NAME = 'applicant.APP_USER_NAME';

	
	const APP_FIRST_NAME = 'applicant.APP_FIRST_NAME';

	
	const APP_MIDDLE_NAME = 'applicant.APP_MIDDLE_NAME';

	
	const APP_LAST_NAME = 'applicant.APP_LAST_NAME';

	
	const APP_EMAIL = 'applicant.APP_EMAIL';

	
	const APP_FACEBOOK_URL = 'applicant.APP_FACEBOOK_URL';

	
	const APP_PARTICIPATION_YEAR = 'applicant.APP_PARTICIPATION_YEAR';

	
	const CREATED_AT = 'applicant.CREATED_AT';

	
	const UPDATED_AT = 'applicant.UPDATED_AT';

	
	const ID = 'applicant.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('AppUserName', 'AppFirstName', 'AppMiddleName', 'AppLastName', 'AppEmail', 'AppFacebookUrl', 'AppParticipationYear', 'CreatedAt', 'UpdatedAt', 'Id', ),
		BasePeer::TYPE_COLNAME => array (ApplicantPeer::APP_USER_NAME, ApplicantPeer::APP_FIRST_NAME, ApplicantPeer::APP_MIDDLE_NAME, ApplicantPeer::APP_LAST_NAME, ApplicantPeer::APP_EMAIL, ApplicantPeer::APP_FACEBOOK_URL, ApplicantPeer::APP_PARTICIPATION_YEAR, ApplicantPeer::CREATED_AT, ApplicantPeer::UPDATED_AT, ApplicantPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('app_user_name', 'app_first_name', 'app_middle_name', 'app_last_name', 'app_email', 'app_facebook_url', 'app_participation_year', 'created_at', 'updated_at', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('AppUserName' => 0, 'AppFirstName' => 1, 'AppMiddleName' => 2, 'AppLastName' => 3, 'AppEmail' => 4, 'AppFacebookUrl' => 5, 'AppParticipationYear' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, 'Id' => 9, ),
		BasePeer::TYPE_COLNAME => array (ApplicantPeer::APP_USER_NAME => 0, ApplicantPeer::APP_FIRST_NAME => 1, ApplicantPeer::APP_MIDDLE_NAME => 2, ApplicantPeer::APP_LAST_NAME => 3, ApplicantPeer::APP_EMAIL => 4, ApplicantPeer::APP_FACEBOOK_URL => 5, ApplicantPeer::APP_PARTICIPATION_YEAR => 6, ApplicantPeer::CREATED_AT => 7, ApplicantPeer::UPDATED_AT => 8, ApplicantPeer::ID => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('app_user_name' => 0, 'app_first_name' => 1, 'app_middle_name' => 2, 'app_last_name' => 3, 'app_email' => 4, 'app_facebook_url' => 5, 'app_participation_year' => 6, 'created_at' => 7, 'updated_at' => 8, 'id' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ApplicantMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ApplicantMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ApplicantPeer::getTableMap();
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
		return str_replace(ApplicantPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ApplicantPeer::APP_USER_NAME);

		$criteria->addSelectColumn(ApplicantPeer::APP_FIRST_NAME);

		$criteria->addSelectColumn(ApplicantPeer::APP_MIDDLE_NAME);

		$criteria->addSelectColumn(ApplicantPeer::APP_LAST_NAME);

		$criteria->addSelectColumn(ApplicantPeer::APP_EMAIL);

		$criteria->addSelectColumn(ApplicantPeer::APP_FACEBOOK_URL);

		$criteria->addSelectColumn(ApplicantPeer::APP_PARTICIPATION_YEAR);

		$criteria->addSelectColumn(ApplicantPeer::CREATED_AT);

		$criteria->addSelectColumn(ApplicantPeer::UPDATED_AT);

		$criteria->addSelectColumn(ApplicantPeer::ID);

	}

	const COUNT = 'COUNT(applicant.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT applicant.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ApplicantPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ApplicantPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ApplicantPeer::doSelectRS($criteria, $con);
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
		$objects = ApplicantPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ApplicantPeer::populateObjects(ApplicantPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ApplicantPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ApplicantPeer::getOMClass();
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
		return ApplicantPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ApplicantPeer::ID); 

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
			$comparison = $criteria->getComparison(ApplicantPeer::ID);
			$selectCriteria->add(ApplicantPeer::ID, $criteria->remove(ApplicantPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ApplicantPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ApplicantPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Applicant) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ApplicantPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Applicant $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ApplicantPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ApplicantPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ApplicantPeer::DATABASE_NAME, ApplicantPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ApplicantPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ApplicantPeer::DATABASE_NAME);

		$criteria->add(ApplicantPeer::ID, $pk);


		$v = ApplicantPeer::doSelect($criteria, $con);

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
			$criteria->add(ApplicantPeer::ID, $pks, Criteria::IN);
			$objs = ApplicantPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseApplicantPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ApplicantMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ApplicantMapBuilder');
}
