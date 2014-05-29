<?php



class InterestedMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.InterestedMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('interested');
		$tMap->setPhpName('Interested');

		$tMap->setUseIdGenerator(true);

		$tMap->addForeignKey('BLOG_ID', 'BlogId', 'int', CreoleTypes::INTEGER, 'blog', 'ID', false, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 