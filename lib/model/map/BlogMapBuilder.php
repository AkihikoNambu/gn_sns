<?php



class BlogMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BlogMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('blog');
		$tMap->setPhpName('Blog');

		$tMap->setUseIdGenerator(true);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('IMAGE', 'Image', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('BODY', 'Body', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PARENT_ID', 'ParentId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 