<?php



class ApplicantMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ApplicantMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('applicant');
		$tMap->setPhpName('Applicant');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('APP_USER_NAME', 'AppUserName', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('APP_FIRST_NAME', 'AppFirstName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('APP_MIDDLE_NAME', 'AppMiddleName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('APP_LAST_NAME', 'AppLastName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('APP_EMAIL', 'AppEmail', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('APP_FACEBOOK_URL', 'AppFacebookUrl', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('APP_PARTICIPATION_YEAR', 'AppParticipationYear', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 