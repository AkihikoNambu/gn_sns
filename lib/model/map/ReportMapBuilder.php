<?php



class ReportMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ReportMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('report');
		$tMap->setPhpName('Report');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('IMAGE', 'Image', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('YEAR', 'Year', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('HOST_COUNTRY', 'HostCountry', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('BODY', 'Body', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('REPORTFILE', 'Reportfile', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 