<?php



class UserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('user');
		$tMap->setPhpName('User');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('USER_NAME', 'UserName', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('FIRST_NAME', 'FirstName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MIDDLE_NAME', 'MiddleName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LAST_NAME', 'LastName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IMAGE', 'Image', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('USER_TYPE', 'UserType', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('OCCUPATION', 'Occupation', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('NATIONALITY', 'Nationality', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PLACE_OF_RESIDENCE', 'PlaceOfResidence', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('FACEBOOK_URL', 'FacebookUrl', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SELF_INTRODUCTION', 'SelfIntroduction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SHA1_PASSWORD', 'Sha1Password', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('SALT', 'Salt', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 